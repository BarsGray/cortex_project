<?php
/**
 * cortex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cortex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cortex_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cortex, use a find and replace
		* to change 'cortex' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cortex', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'cortex' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cortex_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cortex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cortex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cortex_content_width', 640 );
}
add_action( 'after_setup_theme', 'cortex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cortex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cortex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cortex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cortex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cortex_scripts() {
	wp_enqueue_style( 'cortex-style', get_template_directory_uri().'/resources/css/style.css', array(), _S_VERSION );
	


	wp_enqueue_script( 'cortex-inputmask', get_template_directory_uri() . '/resources/libs/inputmask.min.js', array('jquery'), _S_VERSION, true );
// 	wp_enqueue_script( 'cortex-parallax', get_template_directory_uri() . '/resources/libs/parallax.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cortex-script', get_template_directory_uri() . '/resources/js/script.js', array('jquery'), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cortex_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

class core {
	private $errors;
	public $config;
	private $settings = 9;
    function __construct() {
        if(!session_id()) { session_start(); }
        add_action( 'wp_enqueue_scripts', array($this, 'clientStylesAndScripts'));
		add_action( 'pre_get_posts' , array( $this, 'hide_pages_from_admin' ));
		add_action( 'admin_menu', array( $this, 'linked_url' ));
		add_filter('use_block_editor_for_post', array( $this, 'disable_gutenberg_on_settings'), 5, 2);

	}
    public function loadTemplate($name,$addTmpPage=true,$url=false,$params=array()) {
        if ($url) {
            $path=$url.(($addTmpPage)?"/templates/":"").$name.".tpl";
        } else {
            $path=realpath(__DIR__).(($addTmpPage)?"/templates/":"").$name.".tpl";
        }

        if(file_exists($path)) {
            include_once($path);
        } else {
            $this->addError(1004,"Error: tempate ".$path." not found");
        }
    }
	public function addError($code=0,$text) {
		$this->errors[$code][]=$text;
	}
	public function showErrors() {
		if (!empty($this->errors))
		foreach ($this->errors as $code => $errors) {
			foreach ($errors as $error) {
				echo "<p><span>{$code}</span>{$error}</p>";
			}
		}
	}
	function WPerrors(){
		static $wp_error;
		return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
	}
	function show_error_messages() {
		if($codes = $this->WPerrors()->get_error_codes()) {
			echo '<div class="errors">';
			   foreach($codes as $code){
					$message = $this->WPerrors()->get_error_message($code);
					echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
				}
			echo '</div>';
		}	
	}
	public function siteURL() {
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'].'/';
        return $protocol.$domainName;
    }
	public function is_plugin_active( $plugin ) {
        return in_array( $plugin, (array) get_option( 'active_plugins', array() ) );
    }
    static function clientStylesAndScripts() {
        wp_register_style( 'style-cortex', get_template_directory_uri().'/resources/css/style.css',array('Swiper') );
        wp_enqueue_style( 'style-cortex' );
        //wp_enqueue_script('Swiperjs', get_template_directory_uri().'/resources/js/swiper.min.js',array('jquery'),'1',false);
		wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
	}
    function hide_pages_from_admin( $query ) {
		global $pagenow;
		if( is_admin() && 'edit.php' == $pagenow && 'page' == get_query_var('post_type') ){
			$query->set( 'post__not_in', array($this->settings) ); 
		}
		return $query;
	}
    function linked_url() {
        add_menu_page( 'linked_url', 'Настройки темы', 'read', 'post.php?post='.$this->settings.'&action=edit', '', 'dashicons-text', 40 );
    }
	function disable_gutenberg_on_settings($can, $post){
		if($post){
			if($post->ID === $this->settings){
				return false;
			}
		}
		return $can;
	}
}
$GLOBALS['core'] = new core();


add_filter('wpcf7_validate_text', 'custom_text_validation', 1, 2);
add_filter('wpcf7_validate_text*', 'custom_text_validation', 1, 2);
function custom_text_validation($result, $tag) {
    $type = $tag->type;
    $name = $tag->name;
    if($name == 'your-name') {
        $value = $_POST['your-name'];
         $len= strlen($value);
          if($value==''){
            
            $result->invalidate($tag, "Введите имя.");
        }
    }
	if($name == 'your-phone') {
        $value = $_POST['your-phone'];
        $pattern = '/^[+\-\(\)\d\s]{11,}$/';
         $len= strlen($value);
          if($value=='' || preg_match_all('/\d/', $value) != 11){
            $result->invalidate($tag, "Номер введен некорректно.");
        }
    }
 return $result;

}
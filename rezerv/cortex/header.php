<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cortex
 */

$hfields = get_fields(9);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cortex' ); ?></a>

    <header class="py-7">
    <div class="wrapper">
        <div class="flex items-center justify-between">
            <a href="/" class="block mr-7 lg:w-[120px] lg:mr-0"><img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] );?>" alt="" width="150" height="34"></a>
            <div class="mt-3 mr-auto text-[#80A6AC] lg:hidden slog"></div>
            <a href="mailto:info@cortox.ru" class="text-base mr-auto lg:ml-auto lg:text-sm sm:hidden">info@cortox.ru</a>
            <div class="block mr-auto sm:hidden">
                <a href="tel:<?=$hfields['phone_link']?>" class="text-lg lg:text-base"><?=$hfields['phone']?></a>
                <div class="flex justify-between">
                    <a href="<?=$hfields['link_whatsapp']?>" class="primary-link">WhatsApp</a>
                    <a href="<?=$hfields['link_telegram']?>" class="primary-link">Telegram</a>
                </div>
            </div>
            <button class="outlined-btn" type="button" data-modal-trigger="callback">Заказать звонок</button>
        </div>
    </div>
    </header>

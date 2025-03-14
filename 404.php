<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cortex
 */

get_header();
?>

<section class="pt-3 section-pb">
	<div class="wrapper">

		<div class="error_404_content-wrapper">
			<div class="error_404_content-text_box">
				<h1 class="error_404_content-title">Похоже, это тупик :&#8288;(</h1>
				<p class="error_404_content-text">Мы не можем найти запрашиваемую страницу. Пожалуйста, проверьте URL или вернитесь на домашнюю страницу.</p>
				<a class="error_404_content-btn" href="<?php bloginfo('url'); ?>">Главная</a>
			</div>
			<div class="error_404_content-img_box">
				<img class="error_404_content-img" src="<?php bloginfo('template_url'); ?>'/resources/img/qwe1.jpg'" alt="not found">
			</div>
		</div>

	</div>
</section>

<?php
get_footer();

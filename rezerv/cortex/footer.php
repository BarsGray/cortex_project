<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cortex
 */

 $ffields = get_fields(9);
?>
   <footer class="mt-auto pt-11 rounded-t-3xl bg-primary text-bg">
    <div class="wrapper">
        <div class="flex items-start justify-between sm:grid sm:grid-cols-2 sm:gap-5">
            <a href="/" class="block lg:w-24 sm:-order-2">
                <img src="/wp-content/uploads/2024/09/logo-white.png" alt="" width="150" height="34" class="block sm:hidden">
                <img src="/wp-content/uploads/2024/09/logo-white-mob.png" alt="" width="60" height="53" class="hidden sm:block">
            </a>
			<?php
				wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'Menu footer',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'grid grid-cols-2 gap-x-10 gap-y-4 lg:grid-cols-1 lg:gap-y-2.5',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
			?>
            <a href="mailto:<?=$ffields['email']?>" class="lg:hidden"><?=$ffields['email']?></a>
            <div>
                <a href="tel:<?=$ffields['phone_link']?>" class="block mb-2 font-medium text-xl lg:hidden"><?=$ffields['phone']?></a>
                <a href="mailto:<?=$ffields['email']?>" class="hidden lg:block"><?=$ffields['email']?></a>
                <ul class="flex space-x-3 lg:mt-4">
                    <li><a href="<?=$ffields['link_telegram']?>"><img src="/wp-content/uploads/2024/09/tg.svg" alt="" width="30" height="30"></a></li>
                    <li><a href="<?=$ffields['link_whatsapp']?>"><img src="/wp-content/uploads/2024/09/wa.svg" alt="" width="30" height="30"></a></li>
                </ul>
            </div>
            <div class="sm:-order-1">
                <a href="tel:<?=$ffields['phone_link']?>" class="hidden mb-2 font-medium text-xl lg:block sm:text-base sm:text-nowrap"><?=$ffields['phone']?></a>
                <button class="outlined-white-btn text-white sm:w-full sm:text-nowrap sm:px-0 sm:py-3" type="button" data-modal-trigger="callback">Заказать звонок</button>
            </div>
        </div>
		
		
        <div class="flex items-center justify-between mt-10 py-5 border-t border-t-bg border-opacity-30 sm:flex-col sm:mt-6">
            <div class="text-bg" style="font-size:12px!important;color:rgb(217, 221, 220)!important;"><?=$ffields['copy']?></div>
            <a href="/privacy/" class="secondary-link sm:-order-1 sm:mb-2" style="font-size:12px!important;color:rgb(217, 221, 220)!important;">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<div class="hidden fixed bottom-0 left-0 w-full rounded-t-3xl bg-secondary z-10" data-cookie>
    <picture>
        <source srcset="./img/cookie-bg-mob.png" alt="" media="(max-width: 640px)">
        <source srcset="./img/cookie-bg-tablet.png" alt="" media="(max-width: 1200px)">
        <source srcset="./img/cookie-bg.webp" alt="" media="(min-width: 1201px)">
        <img src="./img/cookie-bg.webp" alt="" class="absolute right-0 bottom-0 h-full -z-10 sm:h-auto">
    </picture>
    <div class="wrapper">
        <div class="grid grid-cols-3 gap-5 py-7 sm:grid-cols-1">
            <div class="col-span-2">
                Этот сайт использует файлы cookies для более комфортной работы пользователя. <br>Продолжая просмотр страниц сайта, вы соглашаетесь с использованием файлов cookies.
            </div>
            <div>
                <button class="outlined-btn w-[190px] ml-auto sm:ml-0" type="button" data-cookie-trigger>Хорошо</button>
            </div>
        </div>
    </div>
</div>


<div class="fixed left-0 top-0 z-10 flex items-center justify-center px-[30px] w-screen h-screen md:px-5" id="callback" data-modal="callback">
    <div class="absolute left-0 top-0 w-full h-full bg-black bg-opacity-60" data-modal-close></div>
    <div class="relative z-10 w-full max-w-[480px] py-20 rounded-3xl bg-secondary sm:py-10 sm:px-4">
        <button class="absolute right-8 top-8 block sm:right-4 sm:top-4" type="button" data-modal-close>
            <img src="/wp-content/uploads/2024/09/close.svg" alt="" class="block">
        </button>
        
        <img src="/wp-content/uploads/2024/09/modal-bg.webp" alt="" class="absolute right-0 bottom-0">
        <div class="group/form max-w-[280px] mx-auto">
            <div class="group-has-[.sent]/form:hidden">
                <?php
                    echo do_shortcode('[contact-form-7 id="1ebd588" title="Контактная форма 1"]');
                ?>    
            </div>
            <div class="group-has-[.sent]/form:flex hidden flex-col justify-center items-center text-center h-[268px]">
                <div class="title title--h3 text-primary">Спасибо! </div>
                <p class="w-44 mt-4 mx-auto opacity-50">В ближайшее время мы свяжемся с вами</p>
            </div>
        </div>
        <!-- <form >
            <div class="title title--h3 text-primary">Заказать звонок</div>
            <div class="space-y-3">
                <div class="field mt-5">
                    <input type="text" class="field__inp" placeholder="Имя">
                </div>
                <div class="field field--phone mt-5">
                    <input type="text" class="field__inp" placeholder="+7 (___) ___-__-__">
                </div>
                <button class="primary-btn w-full" type="submit">Позвоните мне</button>
                <div class="text-xs opacity-50">Нажимая кнопку, вы соглашаетесь на обработку ваших персональных данных</div>
            </div>
        </form> -->
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>

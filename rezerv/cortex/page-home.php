<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mobius
 */

get_header();
$fields = get_fields();
?>
 <section class="pt-3 section-pb">
        <div class="wrapper">
            <div class="relative">
                <h1 class="
                    title title--h1 absolute left-0 top-0 max-w-[440px] py-4 px-4 rounded-ee-3xl bg-bg text-primary
                    lg:max-w-[360px] lg:py-3 sm:static sm:p-0 sm:mb-5
                ">
                    <?=$fields['header']?>

                   
                    <span class="absolute left-full top-0 w-6 h-6 bg-bg sm:hidden"></span>
                    <span class="absolute left-full top-0 w-6 h-6 rounded-tl-full bg-secondary sm:hidden"></span>
                    <span class="absolute left-0 top-full w-6 h-6 bg-bg sm:hidden"></span>
                    <span class="absolute left-0 top-full w-6 h-6 rounded-tl-full bg-secondary sm:hidden"></span>
                </h1>
                <div class="flex items-end justify-center min-h-[495px] rounded-3xl bg-secondary sm:min-h-0">
                    <img src="./img/hero-texture.png" alt="" class="absolute right-0 top-0 block sm:hidden">
                    
                    <div class="absolute -left-8 -bottom-16 w-[380px] lg:w-[272px] sm:-left-2 sm:w-48">
                        <img src="<?=$fields['img_left']?>" alt="">
                    </div>
                    
                    <p class="max-w-[33%] pb-6 mr-16 lg:max-w-[40%] lg:mr-0 sm:max-w-full sm:p-6 sm:pb-28">
                        <svg class="inline -mt-1" width="51" height="12" viewBox="0 0 51 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.15236 2.66402C7.67201 2.6696 8.09894 2.142 8.10571 1.48596C8.11264 0.829752 7.69689 0.293504 7.17723 0.288089C6.65758 0.282505 6.23065 0.810118 6.22371 1.46616C6.21695 2.12237 6.6327 2.6586 7.15236 2.66402Z" fill="#188EA0"/>
                            <path d="M4.56562 2.2699C4.94398 2.26888 5.24941 1.8159 5.24789 1.25817C5.24637 0.700443 4.9384 0.248973 4.56004 0.249988C4.18185 0.251173 3.87641 0.704157 3.87794 1.26189C3.87946 1.81961 4.18725 2.27108 4.56562 2.2699Z" fill="#188EA0"/>
                            <path d="M2.68022 2.70832C3.02507 2.78092 3.39142 2.42743 3.49836 1.91894C3.60531 1.41029 3.41258 0.939198 3.06755 0.866606C2.72269 0.794182 2.35634 1.14749 2.24923 1.65615C2.14229 2.1648 2.33519 2.6359 2.68022 2.70832Z" fill="#188EA0"/>
                            <path d="M2.011 2.78933C2.10051 2.36393 1.93909 1.96983 1.65058 1.90908C1.36207 1.8485 1.05562 2.14413 0.966108 2.56953C0.876594 2.99493 1.03802 3.38902 1.32653 3.44977C1.61504 3.51035 1.92149 3.21474 2.011 2.78933Z" fill="#188EA0"/>
                            <path d="M0.575783 3.29194C0.341591 3.2427 0.0926809 3.48281 0.0200883 3.82818C-0.0526735 4.17371 0.0784643 4.49369 0.312656 4.54293C0.547016 4.59234 0.79593 4.35223 0.868522 4.0067C0.941284 3.66133 0.810143 3.34118 0.575783 3.29194Z" fill="#188EA0"/>
                            <path d="M4.58709 11.4851C3.44084 11.4851 2.46278 11.0802 1.65309 10.2705C0.843406 9.46081 0.438477 8.48276 0.438477 7.33667C0.438477 6.18687 0.843406 5.20881 1.65309 4.40268C2.46278 3.58927 3.44084 3.18248 4.58709 3.18248C5.73317 3.18248 6.71122 3.58927 7.52091 4.40268C7.69097 4.57274 7.77608 4.778 7.77608 5.01828C7.77608 5.25857 7.69097 5.46399 7.52091 5.63388C7.35085 5.80783 7.1456 5.89464 6.90531 5.89464C6.66131 5.89464 6.45419 5.80783 6.28413 5.63388C5.81456 5.16431 5.24888 4.92961 4.58709 4.92961C3.92513 4.92961 3.35928 5.16431 2.88988 5.63388C2.42031 6.10344 2.18561 6.67099 2.18561 7.33667C2.18561 7.99864 2.42031 8.56431 2.88988 9.03371C3.35928 9.50345 3.92513 9.73815 4.58709 9.73815C5.24888 9.73815 5.81456 9.50345 6.28413 9.03371C6.45419 8.86365 6.66131 8.77871 6.90531 8.77871C7.1456 8.77871 7.35085 8.86365 7.52091 9.03371C7.69097 9.20377 7.77608 9.4092 7.77608 9.64931C7.77608 9.89332 7.69097 10.1006 7.52091 10.2705C6.71122 11.0802 5.73317 11.4851 4.58709 11.4851Z" fill="#188EA0"/>
                            <path d="M15.0744 7.33667C15.0744 6.67471 14.8394 6.10902 14.3698 5.63946C13.8965 5.16617 13.3291 4.92961 12.6673 4.92961C12.0054 4.92961 11.4395 5.16617 10.9701 5.63946C10.5006 6.10902 10.2657 6.67471 10.2657 7.33667C10.2657 7.99864 10.5006 8.56431 10.9701 9.03371C11.4395 9.50345 12.0054 9.73815 12.6673 9.73815C13.3291 9.73815 13.8965 9.50345 14.3698 9.03371C14.8394 8.56431 15.0744 7.99864 15.0744 7.33667ZM8.51855 7.33667C8.51855 6.19042 8.92349 5.21236 9.73334 4.40268C10.5468 3.58927 11.5246 3.18248 12.6673 3.18248C13.8134 3.18248 14.7915 3.58927 15.6012 4.40268C16.4146 5.21236 16.8214 6.19042 16.8214 7.33667C16.8214 8.47903 16.4146 9.45709 15.6012 10.2705C14.7915 11.0802 13.8134 11.4851 12.6673 11.4851C11.5246 11.4851 10.5468 11.0802 9.73334 10.2705C8.92349 9.45709 8.51855 8.47903 8.51855 7.33667Z" fill="#188EA0"/>
                            <path d="M23.5928 6.24406C23.5928 5.88161 23.4635 5.5728 23.2046 5.31779C22.9494 5.05906 22.6408 4.92961 22.2783 4.92961H19.8768V7.55293H22.2783C22.6408 7.55293 22.9494 7.42534 23.2046 7.17016C23.4635 6.91144 23.5928 6.60263 23.5928 6.24406ZM19.8768 9.29989V10.6088C19.8768 10.8529 19.7917 11.06 19.6217 11.2301C19.4516 11.4002 19.2464 11.4851 19.0061 11.4851C18.7621 11.4851 18.5551 11.4002 18.3851 11.2301C18.2148 11.06 18.1299 10.8529 18.1299 10.6088V4.05884C18.1299 3.81856 18.2148 3.6133 18.3851 3.44324C18.5551 3.26945 18.7621 3.18248 19.0061 3.18248H22.2783C23.1213 3.18248 23.8424 3.48198 24.4414 4.081C25.0404 4.68002 25.3399 5.40104 25.3399 6.24406C25.3399 6.77641 25.2086 7.27372 24.9461 7.73585C24.6945 8.18342 24.3507 8.5457 23.9144 8.82304L25.0849 9.99315C25.2548 10.1634 25.3399 10.3686 25.3399 10.6088C25.3399 10.8529 25.2548 11.06 25.0849 11.2301C24.9109 11.4002 24.7038 11.4851 24.4635 11.4851C24.2231 11.4851 24.018 11.4002 23.848 11.2301L21.9179 9.29989H19.8768Z" fill="#188EA0"/>
                            <path d="M26.8656 4.92961C26.6216 4.92961 26.4143 4.84467 26.2444 4.67444C26.0742 4.50438 25.9893 4.2993 25.9893 4.05884C25.9893 3.81856 26.0742 3.6133 26.2444 3.44324C26.4143 3.26945 26.6216 3.18248 26.8656 3.18248H32.3229C32.5634 3.18248 32.7703 3.26945 32.9443 3.44324C33.1142 3.6133 33.1993 3.81856 33.1993 4.05884C33.1993 4.2993 33.1142 4.50438 32.9443 4.67444C32.7703 4.84467 32.5634 4.92961 32.3229 4.92961H30.4651V10.6088C30.4651 10.8529 30.38 11.06 30.21 11.2301C30.0397 11.4002 29.8346 11.4851 29.5944 11.4851C29.3539 11.4851 29.147 11.4002 28.9732 11.2301C28.8029 11.06 28.718 10.8529 28.718 10.6088V4.92961H26.8656Z" fill="#188EA0"/>
                            <path d="M40.4092 7.33667C40.4092 6.67471 40.1741 6.10902 39.7046 5.63946C39.2315 5.16617 38.6639 4.92961 38.0021 4.92961C37.3402 4.92961 36.7743 5.16617 36.3049 5.63946C35.8353 6.10902 35.6006 6.67471 35.6006 7.33667C35.6006 7.99864 35.8353 8.56431 36.3049 9.03371C36.7743 9.50345 37.3402 9.73815 38.0021 9.73815C38.6639 9.73815 39.2315 9.50345 39.7046 9.03371C40.1741 8.56431 40.4092 7.99864 40.4092 7.33667ZM33.8535 7.33667C33.8535 6.19042 34.2584 5.21236 35.0681 4.40268C35.8815 3.58927 36.8594 3.18248 38.0021 3.18248C39.1482 3.18248 40.1263 3.58927 40.9359 4.40268C41.7494 5.21236 42.1561 6.19042 42.1561 7.33667C42.1561 8.47903 41.7494 9.45709 40.9359 10.2705C40.1263 11.0802 39.1482 11.4851 38.0021 11.4851C36.8594 11.4851 35.8815 11.0802 35.0681 10.2705C34.2584 9.45709 33.8535 8.47903 33.8535 7.33667Z" fill="#188EA0"/>
                            <path d="M46.632 5.9723L48.6896 3.49875C48.845 3.3138 49.0428 3.21024 49.2831 3.18807C49.5233 3.1659 49.736 3.2324 49.921 3.38774C50.1058 3.54291 50.2093 3.74088 50.2315 3.98116C50.2537 4.22162 50.187 4.43416 50.0318 4.61894L47.7689 7.33667L50.0318 10.0542C50.187 10.2392 50.2537 10.4517 50.2315 10.6922C50.2093 10.9325 50.1058 11.1284 49.921 11.28C49.7582 11.4167 49.5716 11.4851 49.3607 11.4851C49.0907 11.4851 48.8671 11.3799 48.6896 11.169L46.632 8.70087L44.5743 11.169C44.3968 11.3799 44.1731 11.4851 43.9032 11.4851C43.6888 11.4851 43.502 11.4167 43.3431 11.28C43.1582 11.1284 43.0546 10.9325 43.0325 10.6922C43.0103 10.4517 43.077 10.2392 43.2323 10.0542L45.495 7.33667L43.2323 4.61894C43.077 4.43416 43.0103 4.22162 43.0325 3.98116C43.0546 3.74088 43.1582 3.54291 43.3431 3.38774C43.5279 3.2324 43.7405 3.1659 43.9809 3.18807C44.2212 3.21024 44.4192 3.3138 44.5743 3.49875L46.632 5.9723Z" fill="#188EA0"/>
                        </svg> <?=$fields['text']?>
                    </p>

                    <div class="
                        absolute right-0 bottom-0 grid grid-cols-4 p-6 gap-5 rounded-tl-3xl bg-bg
                        lg:grid-cols-2 lg:py-4 lg:px-8 lg:gap-3.5
                        sm:w-[45%] sm:h-16 sm:p-0
                    ">
                        <?php
                        foreach($fields['images_right'] as $item) {
                            ?>
                            <img src="<?=$item['img']?>" alt="" width="80" height="80" class="opacity-0 -translate-x-1/2 animate-iconSlide1 lg:w-16 sm:hidden">
                            <?php    
                        }
                        ?>
                        

                        <span class="absolute right-full bottom-0 w-6 h-6 bg-bg"></span>
                        <span class="absolute right-full bottom-0 w-6 h-6 rounded-br-full bg-secondary"></span>
                        <span class="absolute bottom-full right-0 w-6 h-6 bg-bg"></span>
                        <span class="absolute bottom-full right-0 w-6 h-6 rounded-br-full bg-secondary"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pt section-pb overflow-hidden lg:mt-11" id="catalog">
        <div class="wrapper">
            <div class="max-w-[1080px] mx-auto">
                <div class="grid grid-cols-2 gap-5 items-start lg:grid-cols-5 sm:grid-cols-1">
                    <h2 class="title title--h2 lg:col-span-2"><?=$fields['header_2']?></h2>
                    <p class="lg:col-span-3"><?=$fields['text_2']?></p>
                </div>

                <div class="mt-[100px] space-y-[100px] lg:space-y-[50px] lg:mt-[40px]">
                        <?php
                            foreach($fields['block'] as $item) {
                                if ($item['type'] == 'left_clear') {
                                ?>
                                    <div class="flex items-end opacity-0 lg:flex-col lg:items-stretch" style="transition: .3s;" data-fadein>
                                        <div class="w-[420px] lg:w-full lg:grid lg:grid-cols-5 lg:gap-5 lg:-order-1 lg:mb-8 sm:grid-cols-1 sm:mb-12">
                                            <div class="title title--h3 lg:col-span-2"><?=$item['header']?></div>
                                            <p class="mt-3.5 mb-2.5 lg:col-span-3 lg:my-0"><?=$item['text_left']?></p>
                                        </div>
                                        <div class="grow ml-10 lg:w-full lg:mx-0">
                                            <div class="relative w-full px-9 pb-7 pt-20 sm:pt-36 sm:pb-12 sm:px-4">
                                                <p class="relative w-[320px] text-[13px] z-10 sm:w-full">
                                                    <?=$item['text_right']?>
                                                </p>

                                                <picture>
                                                    <source srcset="./img/production-1-bg-mob.png" media="(max-width: 768px)">
													<source srcset="./img/production-1-bg-tablet.png" media="(max-width: 1200px)">
                                                    <source srcset="./img/production-1-bg.png" media="(min-width: 1201px)">
                                                    <img src="./img/production-1-bg.png" alt="" class="absolute left-0 bottom-0 w-full h-full">
                                                </picture>
                                                <img
                                                    src="<?=$item['img_left']?>"
                                                    alt=""
                                                    class="absolute right-0 bottom-7 lg:bottom-11 lg:right-4 lg:w-52 sm:bottom-auto sm:-top-16 sm:-right-8">
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="flex items-end opacity-0 lg:flex-col lg:items-stretch" style="transition: .3s;" data-fadein>
                                        <div class="grow mr-10 lg:w-full lg:mx-0">
                                            <div class="relative w-full px-9 pb-7 pt-20 sm:pt-36 sm:pb-12 sm:px-4">
                                                <p class="relative w-[283px] ml-auto text-[13px] z-10 lg:ml-0 sm:w-full">
                                                    <?=$item['text_left']?>
                                                </p>
                    
                                                <picture>
                                                    <source srcset="./img/production-2-bg-mob.png" media="(max-width: 768px)">
													<source srcset="./img/production-2-bg-tablet.png" media="(max-width: 1200px)">
                                                    <source srcset="./img/production-2-bg.png" media="(min-width: 1201px)">
                                                    <img src="./img/production-2-bg.png" alt="" class="absolute left-0 bottom-0 w-full h-full">
                                                </picture>
                                                <img
                                                    src="<?=$item['img_left']?>"
                                                    alt=""
                                                    class="absolute left-0 bottom-6 lg:bottom-11 lg:left-auto lg:right-4 lg:w-52 lg:-scale-x-100 sm:bottom-auto sm:-top-16 sm:-right-8">
                                            </div>
                                        </div>
                                        <div class="w-[420px] lg:w-full lg:grid lg:grid-cols-5 lg:gap-5 lg:-order-1 lg:mb-8 sm:grid-cols-1 sm:mb-12">
                                            <div class="title title--h3 lg:col-span-2"><?=$item['header']?></div>
                                            <p class="mt-3.5 mb-2.5 lg:col-span-3 lg:my-0"><?=$item['text_right']?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pt section-pb" id="about">
        <div class="wrapper">
            <div class="grid grid-cols-12 gap-5 sm:grid-cols-1">
                <div
                    class="
                        col-span-5 relative flex flex-col justify-between min-h-[380px] p-9 rounded-3xl bg-secondary
                        lg:p-6 sm:col-span-12 sm:min-h-[262px]
                    ">
                    <img src="./img/about-bg.png" alt="" class="block absolute right-0 bottom-0 sm:w-52">
                    
                    <h2 class="title title--h2 text-primary"><?=$fields['header_3']?></h2>
                    <p class="relative max-w-[420px] mt-4 z-10 sm:text-[13px]"><?=$fields['text_3_left']?></p>
                </div>
                <div
                    class="
                        col-span-7 flex flex-col justify-between min-h-[380px] p-9 rounded-3xl border-[3px] border-secondary
                        lg:p-6 sm:col-span-12 sm:min-h-0
                    ">
                    <p class="sm:text-[13px]"><?=$fields['text_3_right']?></p>

                    <div class="flex mt-4 sm:flex-col sm:mt-11">
                        <?php
                        foreach($fields['r_3_right'] as $item) {
                            ?>
                            <div class="w-[240px] mr-12 sm:mr-0 sm:mb-4">
                                <div class="title title--h2 text-primary"><span data-count="<?=$item['header']?>">0</span><?=$item['header_2']?></div>
                                <div class="text-xs mt-2"><?=$item['text']?></div>
                            </div>
                            <?php    
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pt section-pb" id="buy">
        <div class="wrapper">
            <div class="grid grid-cols-2 gap-5 lg:grid-cols-5 sm:grid-cols-1">
                <div class="lg:col-span-3 sm:col-span-1">
                    <div class="max-w-[478px]">
                        <h2 class="title title--h2"><?=$fields['header_4']?></h2>
                        <p class="mt-6">
                            <?=$fields['text_4_l']?>
                        </p>
                    </div>
                </div>
                <div class="lg:col-span-2 sm:col-span-1">
                    <div class="grid grid-cols-2 gap-5 lg:grid-cols-1 sm:grid-cols-2 sm:gap-4">
                        <a href="<?=$fields['link_ozon']?>" class="block"><img src="./img/ozon.png" alt="" width="310" height="92" class="block w-full"></a>
                        <a href="<?=$fields['link_WB']?>" class="block"><img src="./img/wb.png" alt="" width="310" height="92" class="block w-full"></a>
                    </div>
                    <div class="relative mt-5 py-6 px-10 rounded-2xl overflow-hidden bg-secondary lg:py-4 lg:px-5 lg:text-[13px]">
                        <img src="./img/delivery-bg.png" alt="" class="absolute left-0 bottom-0 h-full sm:hidden">

                        <?=$fields['text_4_r']?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pt -mb-6" id="contacts">
        <div class="bg-secondary section-pt section-pb rounded-t-3xl">
            <div class="wrapper">
                <div class="grid grid-cols-12 mb-6 gap-5 lg:block">
                    <div class="col-span-5 lg:grid lg:grid-cols-2 sm:grid-cols-1">
                        <div>
                            <h2 class="title title--h2 max-w-[368px] text-primary lg:max-w-[325px] sm:max-w-[250px]"><?=$fields['header_5']?> </h2>
                            <div class="mt-6 lg:max-w-[322px] sm:max-w-[230px]"><?=$fields['text_5']?></div>
                        </div>

                        <div class="grid grid-cols-2 max-w-[471px] gap-3 mt-14 lg:grid-cols-1 lg:max-w-[unset] lg:mt-0 lg:content-start sm:mt-6">
                            <a href="<?=$fields['link_whatsapp']?>" class="wa-btn lg:w-[271px] lg:ml-auto sm:w-full sm:ml-0">Написать в WhatsApp</a>
                            <a href="<?=$fields['link_telegram']?>" class="tg-btn lg:w-[271px] lg:ml-auto sm:w-full sm:ml-0">Написать в Telegram</a>
                        </div>
                    </div>
                    <div class="col-span-7 lg:hidden">
                        <img src="<?=$fields['qr_whatsapp_telegram']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMS shop and cafe</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <h1 class="visually-hidden">DMC SHOP AND K-POP CAFE</h1>
    <div class="um-page-wrapper">
        <header class="z-10 w-full transition-colors top-0 fixed pt-2 md:pt-0">
            <div class="container md:gap-5 items-center justify-between flex md:pt-2">

                <div class="flex items-center justify-center">
                    <button class="btn-close-menu bg-pink rounded-xl shadow-md shadow-main-black">
                        <svg viewBox="0 0 64 48">
                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                        </svg>
                    </button>
                    <div class="mobile-menu bg-orange pt-10 -left-96">
                        <div class="hidden lg:block">
                            <ul
                                class="flex flex-col pb-11 text-main-black mt-28 overflow-auto h-screen scrollbar-thumb-gray-300 scrollbar-track-gray-100 justify-start items-start">
                                <li class="px-4 mb-4">
                                    <a class="text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/attez.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">attez</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/blackpink.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">blackpink</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/bts.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">BTS</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/enhypen.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">enhypen</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/itzy.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">itzy</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/nmixx.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">nmixx</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class=" text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/twice.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">twice</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class=" text-main-black hover:text-green transition-colors nav-link" href="#">
                                        <div class="flex items-center justify-center gap-10">
                                            <img class="rounded-xl"
                                                src="<?php echo get_template_directory_uri() ?>/src/img/bands/txt.png"
                                                alt="bts_img" />
                                            <p class="text-xl font-semibold">txt</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- sidebar menu for mobile -->
                        <div class="lg:hidden sm:block overflow-hidden w-full">
                            <!-- <ul class="flex flex-col pb-11 text-main-black mt-28">
                                <li class="px-4 mb-4"><a
                                        class="text-main-black hover:text-green transition-colors nav-link" href="#"
                                        data-goto="">Группы</a>
                                </li>
                                <li class="px-4 mb-4"><a
                                        class="text-main-black hover:text-green transition-colors nav-link" href="#"
                                        data-goto="page-section-1">Каталог</a>
                                </li>
                                <li class="px-4 mb-4"><a
                                        class="text-main-black hover:text-green transition-colors nav-link" href="#"
                                        data-goto="page-section-2">Новинки</a></li>
                                <li class="px-4 mb-4"><a
                                        class="text-main-black hover:text-green transition-colors nav-link" href="#"
                                        data-goto="page-section-3">Предзаказ</a></li>

                                <li class="px-4 mb-4"><a
                                        class="text-main-black hover:text-green transition-colors nav-link" href="#"
                                        data-goto="page-section-4">Мероприятия</a></li>

                                <li class="px-4 mb-4"><a
                                        class="text-main-black hover:text-green transition-colors nav-link" href="#"
                                        data-goto="#">Отзывы</a></li>
                            </ul> -->

                            <nav class="nav">
                                <?php wp_nav_menu([
                                    'theme_location' => 'mobile',
                                    'container' => 'ul',
                                    'menu_class' => 'flex flex-col pb-11 text-main-black mt-28',
                                    'menu_id' => ''
                                ]);
                                ?>
                            </nav>
                        </div>

                    </div>

                    <a href="/">
                        <span class="sm:w-[142px] sm:h-[70px] w-[74px] h-[37px]"><img
                                src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" /></span>
                    </a>
                    <span class="text-[12px] md:text-[20px] text-main-black">DMS <span class="text-pink">SHOP</span>
                        </br> AND <span class="text-green">CAFE</span></span>

                </div>

                <!-- <ul class="mobile gap-2 flex-wrap text-main-black hidden md:flex">
                    <li class="mr-4"><a class="text-main-black hover:text-green transition-colors nav-link" href="#"
                            data-goto=".page-section-1">Каталог</a></li>
                    <li class="mr-4"><a class="text-main-black hover:text-green transition-colors nav-link" href="#"
                            data-goto=".page-section-2">Новинки</a></li>
                    <li class="mr-4"><a class="text-main-black hover:text-green transition-colors nav-link" href="#"
                            data-goto=".page-section-3">Предзаказ</a></li>
                    <li class="mr-4"><a class="text-main-black hover:text-green transition-colors nav-link" href="#"
                            data-goto=".page-section-4">Мероприятия</a></li>
                    <li class="mr-4"><a class="text-main-black hover:text-green transition-colors nav-link" href="#"
                            data-goto=".page-section-5">Отзывы</a></li>
                </ul> -->

                <nav class="nav">
                    <?php wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => 'ul',
                        'menu_class' => 'mobile gap-2 flex-wrap text-main-black hidden md:flex',
                        'menu_id' => ''
                    ]);
                    ?>
                </nav>

                <div class="justify-center items-center relative">
                    <ul class="flex">
                        <li class="header-wrapper">
                            <!-- <a class="header-call-button block w-full mx-1" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                                    class=" hover:bg-dark-pink transition-all .5s bg-green p-1 rounded-xl shadow-md shadow-main-black" />
                            </a> -->

                            <!-- <div class="modal-wrapper">
                                <div class="modal-content w-80">
                                    <div class="flex items-center justify-center">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/check-mark-circle.svg"
                                            alt="" />
                                        <p class="text-dark-green font-bold pl-3 sm:text-xs md:text-lg">Товар добавлен в
                                            корзину</p>
                                    </div>
                                    <a href="#"
                                        class="text-green underline flex items-center justify-center sm:text-xs md:text-lg">Перейти</a>
                                </div>
                            </div> -->

                            <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="header__cart">

                                <!-- <div class="header__cart-wrapper cart-price"><span id="cart_total" class="pink-price">
                                        <?php echo WC()->cart->get_cart_total(); ?>
                                    </span>
                                </div> -->

                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                                    class=" hover:bg-dark-pink transition-all .5s bg-green p-1 rounded-xl shadow-md shadow-main-black" />

                                <div class="mini-card">
                                    <?php the_widget('WC_Widget_Cart', 'title=') ?>
                                </div>
                            </a>


                        </li>

                        <li class="header-wrapper">
                            <div class="modal-wrapper w-60">
                                <div class="modal-content">
                                    <!-- <ul class="p-5">
                                        <li>
                                            <a href="#" class="font-semibold text-main-black block">Личный кабинет</a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-semibold text-green block pt-5">Вход</a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-semibold  text-dark-pink block pt-5">Регистрация</a>
                                        </li>

                                    </ul> -->
                                    <nav class="nav">
                                        <?php wp_nav_menu([
                                            'theme_location' => 'lk',
                                            'container' => '',
                                            'menu_class' => '',
                                            'menu_id' => ''
                                        ]);
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="header-call-button account block w-full mx-1" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/account.svg"
                                    class=" hover:bg-dark-pink transition-all .5s bg-green p-1 rounded-xl shadow-md shadow-main-black" />
                            </a>
                        </li>
                        <li class="header-wrapper">
                            <div class="modal-wrapper lg:w-[1440px]">
                                <div class="modal-content">
                                    <div class="container">
                                        <form class="flex" action="" method="get">
                                            <div class="flex items-center justify-between w-full">
                                                <?php get_search_form(); ?>
                                            </div>
                                        </form>
                                        <!-- <div style="max-height: 300px; overflow-y: auto;">
                                            <ul
                                                class="flex items-center justify-center pt-10 gap-5 flex-wrap band__list2">
                                                <li>
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>
                                                <li class="hidden">
                                                    <div class="flex items-center justify-center gap-5">
                                                        <img class="rounded-lg w-[60px] h-[60px]"
                                                            src="<?php echo get_template_directory_uri() ?>/src/img/bands_big/image 16.png" />
                                                        <p class="md:text-xl text-sm text-main-black font-bold"> STRAY
                                                            KIDS</p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div> -->

                                        <!-- <div class="flex items-center justify-end gap-2">
                                            <span class="loadMoreText2">Посмотреть все 2</span>
                                            <button class="loadMoreButton2">
                                                <span><img
                                                        src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-bottom.svg"
                                                        alt="стрелочка вниз" /></span>
                                            </button>
                                            <button class="hideMoreButton2 hidden">
                                                <span><img class="rotate-180"
                                                        src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-bottom.svg"
                                                        alt="стрелочка вниз" /></span>
                                            </button>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                            <a class="header-call-button account block w-full mx-1" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/search.svg"
                                    class=" hover:bg-dark-pink transition-all .5s bg-green p-1 rounded-xl shadow-md shadow-main-black" />
                                <div class="modal-wrapper w-60">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
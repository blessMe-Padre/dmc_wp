<?php
/*
Template Name: Карточка товара - шаблон 
*/
get_header();
?>
<main>
    <div class="container mt-40">
        <div class="breadcrumb">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </a>
                </li>

                <li class="opacity-60"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>

                <li class="breadcrumb__item">
                    <span class="opacity-60">Каталог</span>
                </li>

                <li class="opacity-60"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>

                <li class="breadcrumb__item">
                    <span class="opacity-60">AERA(アエラ) (APRIL, 2023) - COVER : BTS JIMIN</span>
                </li>
            </ul>
        </div>



    </div>
</main>


<section class="lg:pt-8 pt-4">
    <div class="container grid grid-cols-1 md:grid-cols-2 ">

        <div class="event-item__slider w-0 min-w-[100%] overflow-hidden relative">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="rounded-3xl md:w-[600px] md:h-[600px]"
                        src="<?php echo get_template_directory_uri() ?>./src/img/event/event-item.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="rounded-3xl md:w-[600px] md:h-[600px]"
                        src="<?php echo get_template_directory_uri() ?>./src/img/event/event-item.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="rounded-3xl md:w-[600px] md:h-[600px]"
                        src="<?php echo get_template_directory_uri() ?>./src/img/event/event-item.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="rounded-3xl md:w-[600px] md:h-[600px]"
                        src="<?php echo get_template_directory_uri() ?>./src/img/event/event-item.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="rounded-3xl md:w-[600px] md:h-[600px]"
                        src="<?php echo get_template_directory_uri() ?>./src/img/event/event-item.png" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="flex flex-col relative md:p-10 p-5 rounded-3xl">

            <div class="pb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="165" height="41" viewBox="0 0 165 41" fill="none">
                    <g filter="url(#filter0_d_149_10981)">
                        <path
                            d="M0.770701 3.28863C-0.325104 1.98799 0.599494 0 2.30022 0H162.74C164.434 0 165.361 1.97439 164.278 3.27768L152.84 17.0522C152.201 17.8226 152.229 18.9473 152.907 19.6841L163.914 31.6458C165.093 32.9277 164.184 35 162.442 35H2.6033C0.854413 35 -0.0520953 32.9135 1.14138 31.6352L12.2894 19.6942C12.9802 18.9543 13.0092 17.8149 12.357 17.0407L0.770701 3.28863Z"
                            fill="#FAA6AE" />
                    </g>
                    <defs>
                        <filter id="filter0_d_149_10981" x="0.296387" y="0" width="164.447" height="41"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="6" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.188235 0 0 0 0 0.188235 0 0 0 0 0.188235 0 0 0 1 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_149_10981" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_149_10981"
                                result="shape" />
                        </filter>
                    </defs>
                    <span></span>
            </div>

            <div class="flex">
                <h2 class="text-xl lg:text-3xl text-jost font-extrabold uppercase relative z-0 pb-5">Набор BLACKPINK -
                    OST [THE GIRLS] (Reve/DIGITAL) </h2>
            </div>

            <ul class="catalog-form__list pb-5">
                <li>
                    <input class="catalog-form__input visually-hidden" type="radio" name="radio" id="checkbox">
                    <label class="catalog-form__label" for="checkbox">
                        <img src="<?php echo get_template_directory_uri() ?>./src/img/label-catalog.png" width="30"
                            height="30" alt="label-catalog">
                        <span>Black</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="radio" name="radio" id="checkbox2">
                    <label class="catalog-form__label" for="checkbox2">
                        <img src="<?php echo get_template_directory_uri() ?>./src/img/label-catalog.png" width="30"
                            height="30" alt="label-catalog">
                        <span>Pink</span>
                    </label>
                </li>
            </ul>

            <div class="flex items-center">
                <div class="flex pr-10">
                    <p class="text-main-black md:text-4xl text-2xl pt-5 font-extrabold pb-5">2000 ₽</p>
                </div>

                <div class="flex">
                    <button class="py-2 px-16 bg-green rounded-xl md:text-lg text-sm text-white font-semibold shadow-md"
                        style="box-shadow: 0px 6px 0px 0px #303030;">Добавить в корзину</button>
                </div>
            </div>
            <p class="opacity-50 text-main-black md:text-base text-xs pt-5 pb-5">*Цена указана с учетом доставки до РФ
            </p>

            <div class="catalog-form__wrapper">
                <!-- sidebar -->
                <div class="catalog-form__sidebar">
                    <nav class="catalog-menu hidden sm:block">
                        <ul class="menu">
                            <li>
                                <a href="#">Описание</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">BTS</a>
                                    </li>
                                    <li>
                                        <a href="#">STRAY KIDS</a>
                                    </li>
                                    <li>
                                        <a href="#">ENHYPEN</a>
                                    </li>
                                    <li>
                                        <a href="#">TXT</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="#">Информация о доставке</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">BTS</a>
                                    </li>
                                    <li>
                                        <a href="#">STRAY KIDS</a>
                                    </li>
                                    <li>
                                        <a href="#">ENHYPEN</a>
                                    </li>
                                    <li>
                                        <a href="#">TXT</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>


        </div>

    </div>
</section>

<section class=" bg-bg page-section-2 md:pt-28 pt-52">
    <div class="container">
        <section class="new-items-section">

            <div class="flex items-center justify-between md:mb-5 mb-2">
                <div>
                    <h2 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative z-0">C ЭТИМ ТОВАРОМ
                        ПОКУПАЮТ</h2>
                </div>

                <div class="swiper-pagination"></div>
                <div>
                    <button class="prev-new--item bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/arrow-left.svg"
                            alt="влево" />
                    </button>
                    <button class="next-new--item bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/arrow-rigth.svg"
                            alt="вправо" />
                    </button>
                </div>

            </div>

            <div class="swiper new-items-7">
                <div class="swiper-wrapper">
                    <div class="swiper-slide rounded-xl relative">
                        <div class="new-items-section__img relative">
                            <img class="rounded-xl h-auto"
                                src="<?php echo get_template_directory_uri() ?>./src/img/new/new_1.png" />
                        </div>

                        <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                            <img class="absolute top-0 left-0 md:w-40 w-28"
                                src="<?php echo get_template_directory_uri() ?>./src/img/order/sticker.png" height="40"
                                width="160" />
                        </a>

                        <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                            <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                        </a>

                        <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">Альбом Stray Kids The
                            3rd
                            Album 5-STAR
                        </p>

                        <div class="flex flex-col md:flex-row items-center md:items-start">

                            <div class="flex items-center justify-between md:justify-around">
                                <p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">2000 р</p>

                                <div class="flex items-center justify-between gap-2">
                                    <a href="#" class="text-gray-500 lg:hidden sm:block">
                                        <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                            src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                                    </a>

                                    <a class="sm:block lg:hidden" href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/cart.svg"
                                            class="bg-green rounded-lg shadow-md shadow-main-black" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide rounded-xl relative">
                        <div class="new-items-section__img relative">
                            <img class="rounded-xl h-auto"
                                src="<?php echo get_template_directory_uri() ?>./src/img/new/new_2.png" />
                        </div>

                        <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                            <img class="absolute top-0 left-0 md:w-40 w-28"
                                src="<?php echo get_template_directory_uri() ?>./src/img/order/sticker.png" height="40"
                                width="160" />
                        </a>

                        <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                            <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                        </a>

                        <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">Альбом Stray Kids The
                            3rd
                            Album 5-STAR
                        </p>

                        <div class="flex flex-col md:flex-row items-center md:items-start">

                            <div class="flex items-center justify-between md:justify-around">
                                <p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">2000 р</p>

                                <div class="flex items-center justify-between gap-2">
                                    <a href="#" class="text-gray-500 lg:hidden sm:block">
                                        <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                            src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                                    </a>

                                    <a class="sm:block lg:hidden" href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/cart.svg"
                                            class="bg-green rounded-lg shadow-md shadow-main-black" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide rounded-xl relative">
                        <div class="new-items-section__img relative">
                            <img class="rounded-xl h-auto"
                                src="<?php echo get_template_directory_uri() ?>./src/img/new/new_3.png" />
                        </div>

                        <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                            <img class="absolute top-0 left-0 md:w-40 w-28"
                                src="<?php echo get_template_directory_uri() ?>./src/img/order/sticker.png" height="40"
                                width="160" />
                        </a>

                        <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                            <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                        </a>

                        <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">Альбом Stray Kids The
                            3rd
                            Album 5-STAR
                        </p>

                        <div class="flex flex-col md:flex-row items-center md:items-start">

                            <div class="flex items-center justify-between md:justify-around">
                                <p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">2000 р</p>

                                <div class="flex items-center justify-between gap-2">
                                    <a href="#" class="text-gray-500 lg:hidden sm:block">
                                        <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                            src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                                    </a>

                                    <a class="sm:block lg:hidden" href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/cart.svg"
                                            class="bg-green rounded-lg shadow-md shadow-main-black" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide rounded-xl relative">
                        <div class="new-items-section__img relative">
                            <img class="rounded-xl h-auto"
                                src="<?php echo get_template_directory_uri() ?>./src/img/new/new_4.png" />
                        </div>

                        <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                            <img class="absolute top-0 left-0 md:w-40 w-28"
                                src="<?php echo get_template_directory_uri() ?>./src/img/order/sticker.png" height="40"
                                width="160" />
                        </a>

                        <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                            <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                        </a>

                        <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">Альбом Stray Kids The
                            3rd
                            Album 5-STAR
                        </p>

                        <div class="flex flex-col md:flex-row items-center md:items-start">

                            <div class="flex items-center justify-between md:justify-around">
                                <p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">2000 р</p>

                                <div class="flex items-center justify-between gap-2">
                                    <a href="#" class="text-gray-500 lg:hidden sm:block">
                                        <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                            src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                                    </a>

                                    <a class="sm:block lg:hidden" href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/cart.svg"
                                            class="bg-green rounded-lg shadow-md shadow-main-black" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide rounded-xl relative">
                        <div class="new-items-section__img relative">
                            <img class="rounded-xl h-auto"
                                src="<?php echo get_template_directory_uri() ?>./src/img/new/new_4.png" />
                        </div>

                        <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                            <img class="absolute top-0 left-0 md:w-40 w-28"
                                src="<?php echo get_template_directory_uri() ?>./src/img/order/sticker.png" height="40"
                                width="160" />
                        </a>

                        <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                            <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                        </a>

                        <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">Альбом Stray Kids The
                            3rd
                            Album 5-STAR
                        </p>

                        <div class="flex flex-col md:flex-row items-center md:items-start">

                            <div class="flex items-center justify-between md:justify-around">
                                <p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">2000 р</p>

                                <div class="flex items-center justify-between gap-2">
                                    <a href="#" class="text-gray-500 lg:hidden sm:block">
                                        <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                            src="<?php echo get_template_directory_uri() ?>./src/img/icons/favorite.svg" />
                                    </a>

                                    <a class="sm:block lg:hidden" href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./src/img/icons/cart.svg"
                                            class="bg-green rounded-lg shadow-md shadow-main-black" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</section>

<?php get_footer(); ?>
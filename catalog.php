<?php
/*
Template Name: Страница каталога - шаблон 
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
            </ul>
        </div>

        <div class="flex mb-5">
            <h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative">
                Каталог</h1>
        </div>

        <form class="catalog-form mb-7">
            <ul class="catalog-form__list">
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox">
                    <label class="catalog-form__label" for="checkbox">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox2">
                    <label class="catalog-form__label" for="checkbox2">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox3">
                    <label class="catalog-form__label" for="checkbox3">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox4">
                    <label class="catalog-form__label" for="checkbox4">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox5">
                    <label class="catalog-form__label" for="checkbox5">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox6">
                    <label class="catalog-form__label" for="checkbox6">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox7">
                    <label class="catalog-form__label" for="checkbox7">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox8">
                    <label class="catalog-form__label" for="checkbox8">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
                <li>
                    <input class="catalog-form__input visually-hidden" type="checkbox" name="checkbox" id="checkbox9">
                    <label class="catalog-form__label" for="checkbox9">
                        <img src="./src/img/label-catalog.png" width="30" height="30" alt="label-catalog">
                        <span>BTS</span>
                    </label>
                </li>
            </ul>
        </form>

        <div class="catalog-form__header flex gap-5 mb-10">
            <div class="hidden sm:block">
                <span class="text-main-black text-sm">Предзаказ</span>
                <div class="toggle">
                    <label class="toggle__switch">
                        <input class="visually-hidden" type="checkbox" name="storehouse">
                        <span class="toggle__slider"></span>
                    </label>
                </div>
            </div>
            <div class="hidden sm:block">
                <span class="text-main-black text-sm">В наличии РФ</span>
                <div class="toggle">
                    <label class="toggle__switch">
                        <input class="visually-hidden" type="checkbox" name="storehouse">
                        <span class="toggle__slider"></span>
                    </label>
                </div>
            </div>

            <div>
                <a href="#popup" class="popup-link filter-button sm:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path
                            d="M3.25 20.5833H18.4167M7.58333 12.9999H22.75M15.1667 5.41658L22.75 5.41658M10.8333 5.41658H3.25"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M20.5833 18.4167C21.0119 18.4167 21.4308 18.5437 21.7871 18.7818C22.1434 19.0199 22.4211 19.3583 22.5851 19.7542C22.7491 20.1501 22.792 20.5857 22.7084 21.006C22.6248 21.4263 22.4184 21.8124 22.1154 22.1154C21.8124 22.4184 21.4263 22.6248 21.006 22.7084C20.5857 22.792 20.1501 22.7491 19.7542 22.5851C19.3583 22.4211 19.0199 22.1434 18.7818 21.7871C18.5437 21.4308 18.4167 21.0119 18.4167 20.5833C18.4167 20.0087 18.6449 19.4576 19.0513 19.0513C19.4576 18.6449 20.0087 18.4167 20.5833 18.4167ZM3.25 13C3.25 13.4285 3.37707 13.8474 3.61515 14.2037C3.85323 14.56 4.19161 14.8377 4.58752 15.0017C4.98343 15.1657 5.41907 15.2086 5.83936 15.125C6.25965 15.0414 6.64572 14.8351 6.94873 14.5321C7.25175 14.229 7.4581 13.843 7.5417 13.4227C7.6253 13.0024 7.5824 12.5668 7.41841 12.1709C7.25442 11.7749 6.97671 11.4366 6.6204 11.1985C6.2641 10.9604 5.84519 10.8333 5.41667 10.8333C4.84203 10.8333 4.29093 11.0616 3.8846 11.4679C3.47827 11.8743 3.25 12.4254 3.25 13ZM10.8333 5.41667C10.8333 5.84519 10.9604 6.26409 11.1985 6.6204C11.4366 6.97671 11.7749 7.25441 12.1709 7.4184C12.5668 7.58239 13.0024 7.6253 13.4227 7.5417C13.843 7.4581 14.2291 7.25174 14.5321 6.94873C14.8351 6.64572 15.0414 6.25965 15.125 5.83936C15.2086 5.41907 15.1657 4.98342 15.0017 4.58752C14.8377 4.19161 14.56 3.85323 14.2037 3.61515C13.8474 3.37707 13.4285 3.25 13 3.25C12.4254 3.25 11.8743 3.47827 11.4679 3.8846C11.0616 4.29093 10.8333 4.84203 10.8333 5.41667Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Фильтры
                </a>
            </div>

            <div>
                <select>
                    <option>Сортировать по</option>
                    <option>Пункт 2</option>
                    <option>Пункт 3</option>
                    <option>Пункт 4</option>
                    <option>Пункт 5</option>
                </select>
            </div>

        </div>

        <div class="catalog-form__wrapper">
            <!-- sidebar -->
            <div class="catalog-form__sidebar">
                <nav class="catalog-menu hidden sm:block">
                    <ul class="menu">
                        <li>
                            <a href="#">Группы</a>
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
                            <a href="#">Азиатские вкусняшки</a>
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

            <div class="catalog-form__content">
                <ul class="catalog-form__inner">
                    <li class="rounded-xl relative">
                        <a href="#">
                            <div class="new-items-section__img relative">
                                <img class="rounded-xl" src="./src/img/new/new_1.png" />
                            </div>

                            <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                                <img class="absolute top-0 left-0 md:w-40 w-28" src="./src/img/order/sticker.png"
                                    height="40" width="160" />
                            </a>
                            <object>
                                <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                                    <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                        src="./src/img/icons/favorite.svg" />
                                </a>
                            </object>
                            <p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">Альбом Stray Kids The
                                3rd
                                Album 5-STAR
                            </p>

                            <div class="flex flex-col md:flex-row items-center md:items-start">

                                <div class="flex items-center justify-between md:justify-around">
                                    <p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">2000 р</p>

                                    <div class="flex items-center justify-between gap-2">
                                        <object>
                                            <a href="index.html" class="text-gray-500 lg:hidden sm:block">
                                                <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                                    src="./src/img/icons/favorite.svg" />
                                            </a>
                                        </object>
                                        <object>
                                            <a class="sm:block lg:hidden" href="index.html">
                                                <img src="./src/img/icons/cart.svg"
                                                    class="bg-green rounded-lg shadow-md shadow-main-black" />
                                            </a>
                                        </object>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="rounded-xl relative">
                        <a href="#">
                            <div class="new-items-section__img relative">
                                <img class="rounded-xl" src="./src/img/new/new_4.png" />
                            </div>

                            <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                                <img class="absolute top-0 left-0 md:w-40 w-28" src="./src/img/order/sticker.png"
                                    height="40" width="160" />
                            </a>

                            <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                                <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                    src="./src/img/icons/favorite.svg" />
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
                                                src="./src/img/icons/favorite.svg" />
                                        </a>

                                        <a class="sm:block lg:hidden" href="#">
                                            <img src="./src/img/icons/cart.svg"
                                                class="bg-green rounded-lg shadow-md shadow-main-black" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="rounded-xl relative">
                        <a href="#">
                            <div class="new-items-section__img relative">
                                <img class="rounded-xl" src="./src/img/new/new_2.png" />
                            </div>

                            <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                                <img class="absolute top-0 left-0 md:w-40 w-28" src="./src/img/order/sticker.png"
                                    height="40" width="160" />
                            </a>

                            <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                                <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                    src="./src/img/icons/favorite.svg" />
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
                                                src="./src/img/icons/favorite.svg" />
                                        </a>

                                        <a class="sm:block lg:hidden" href="#">
                                            <img src="./src/img/icons/cart.svg"
                                                class="bg-green rounded-lg shadow-md shadow-main-black" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </div>
</main>

<section id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg width="32" height="32" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                    </path>
                </svg>
            </button>
            <h2 class="popup__title">Фильтры</h2>
            <div>
                <div class="flex items-center justify-between mb-5">
                    <span class="text-main-black text-sm">Предзаказ</span>
                    <div class="toggle">
                        <label class="toggle__switch">
                            <input class="visually-hidden" type="checkbox" name="storehouse">
                            <span class="toggle__slider"></span>
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-between mb-5">
                    <span class="text-main-black text-sm">В наличии РФ</span>
                    <div class="toggle">
                        <label class="toggle__switch">
                            <input class="visually-hidden" type="checkbox" name="storehouse">
                            <span class="toggle__slider"></span>
                        </label>
                    </div>
                </div>
                <nav class="catalog-menu">
                    <ul class="menu">
                        <li>
                            <a href="#">Группы</a>
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
                            <a href="#">Азиатские вкусняшки</a>
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
</section>

<?php get_footer(); ?>
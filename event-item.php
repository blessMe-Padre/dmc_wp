<?php
/*
Template Name: Страница одного мероприятия - шаблон 
*/
get_header();
?>

<main>
    <section>
        <div class="container pt-20">

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
                        <span class="opacity-100">DMC K-POP CAFE празднует День Рождение Чонхо из Ateez</span>
                    </li>
                </ul>
            </div>


            <section class="lg:pt-8 pt-4">
                <div class="container grid grid-cols-1 md:grid-cols-2 ">

                    <div class="event-item__slider w-0 min-w-[100%] overflow-hidden relative">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img class="rounded-3xl md:w-[600px] md:h-[600px]" src="./src/img/event/event-item.png"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="rounded-3xl md:w-[600px] md:h-[600px]" src="./src/img/event/event-item.png"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="rounded-3xl md:w-[600px] md:h-[600px]" src="./src/img/event/event-item.png"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="rounded-3xl md:w-[600px] md:h-[600px]" src="./src/img/event/event-item.png"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="rounded-3xl md:w-[600px] md:h-[600px]" src="./src/img/event/event-item.png"
                                    alt="">
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="flex flex-col relative bg-bg md:p-10 p-5 rounded-3xl">

                        <div class="flex">
                            <h2 class="text-xl lg:text-3xl text-jost font-extrabold uppercase relative z-0">DMC K-POP
                                CAFE празднует День Рождение Чонхо из Ateez </h2>
                        </div>

                        <div class="pt-8">
                            <p class="font-semibold md:text-2xl sm:text-base">
                                В нашем кафе будут:
                            </p>
                        </div>

                        <div>
                            <ul class="list-disc pt-5 pl-10">
                                <li class="pt-2 md:text-lg text-base">
                                    Именные напитки
                                </li>

                                <li class="pt-2 md:text-lg text-base">
                                    Вкусная еда
                                </li>

                                <li class="pt-2 md:text-lg text-base">
                                    Тематические десерты

                                </li>

                                <li class="pt-2">
                                    Просмотр различных медиа и прослушивание треков
                                </li>

                                <li class="pt-2 md:text-lg text-base">
                                    Карточка в подарок к заказу
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="pt-7">
                                <li class="flex pt-5 gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                        fill="none">
                                        <rect width="34" height="34" rx="17" fill="#FAA6AE" />
                                        <path
                                            d="M16.9584 25.893C20.4376 22.3144 23.9167 19.1099 23.9167 15.1572C23.9167 11.2044 20.8014 8 16.9584 8C13.1154 8 10 11.2044 10 15.1572C10 19.1099 13.4792 22.3144 16.9584 25.893Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.9583 16.9469C18.0564 16.9469 18.9464 16.0568 18.9464 14.9588C18.9464 13.8608 18.0564 12.9707 16.9583 12.9707C15.8603 12.9707 14.9702 13.8608 14.9702 14.9588C14.9702 16.0568 15.8603 16.9469 16.9583 16.9469Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p class="font-semibold md:text-lg text-sm">
                                        DMC K-POP CAFE, Владивосток, Светланская улица, 109
                                    </p>
                                </li>
                                <li class="flex pt-5 gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                        fill="none">
                                        <rect width="34" height="34" rx="17" fill="#FAA6AE" />
                                        <path
                                            d="M16.875 25.75C21.7766 25.75 25.75 21.7766 25.75 16.875C25.75 11.9735 21.7766 8 16.875 8C11.9735 8 8 11.9735 8 16.875C8 21.7766 11.9735 25.75 16.875 25.75Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16.875 10.959V16.8757" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.0561 21.0561L16.875 16.875" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="font-semibold md:text-lg text-sm">
                                        09:00-23:00
                                    </p>
                                </li>
                                <li class="flex pt-5 gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"
                                        fill="none">
                                        <rect width="34" height="34" rx="17" fill="#FAA6AE" />
                                        <path
                                            d="M19.6525 19.9382L20.0911 19.5022C20.6974 18.8993 21.6424 18.7755 22.4182 19.1971L24.2579 20.1973C25.4394 20.8395 25.6997 22.4135 24.7764 23.3317L23.4084 24.6918C23.0606 25.0377 22.629 25.2904 22.1327 25.3367M8.00278 12.6069C7.96885 12.0098 8.24866 11.4716 8.66622 11.0564L10.1777 9.55353C11.0198 8.7162 12.4395 8.84585 13.1742 9.82725L14.3885 11.4493C14.9821 12.2422 14.918 13.3283 14.2376 14.0049L13.9614 14.2795"
                                            stroke="white" stroke-width="1.5" />
                                        <path
                                            d="M22.1328 25.3372C20.5637 25.4835 16.7266 25.3219 12.6371 21.2557C8.78084 17.4213 8.08974 14.1349 8.00293 12.6074"
                                            stroke="white" stroke-width="1.5" />
                                        <path
                                            d="M19.6524 19.9381C19.6524 19.9381 18.6099 20.9746 15.7644 18.1453C12.9188 15.3159 13.9613 14.2793 13.9613 14.2793"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <p class="font-semibold md:text-lg text-sm">
                                        Для брони звонить: +7 (924) 257-95-87
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </section>
</main>

<?php get_footer(); ?>
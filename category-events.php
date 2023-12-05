<?php
/*
Template Name: Страница events - шаблон 
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
                        <span class="opacity-60">Мероприятия</span>
                    </li>
                </ul>
            </div>

            <div class="flex">
                <h2 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative z-0">Мероприятия</h2>
            </div>


            <!-- <ul class="flex pt-10 min-w-[100%] flex-wrap items-center justify-center">

            </ul> -->




            <!-- <div class="flex md:items-center md:justify-end justify-center gap-2 pt-10">
                <button class="prev-new--item-1 bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                    <img src="./src/img/icons/arrow-left.svg" alt="влево" />
                </button>

                <div class="bg-main-black py-2 px-5 rounded-lg">
                    <p class="text-white"> 1/6 </p>
                </div>

                <button class="next-new--item-1 bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                    <img src="./src/img/icons/arrow-rigth.svg" alt="вправо" />
                </button>
            </div> -->
        </div>
    </section>
</main>

<?php get_footer(); ?>
<?php
/*
Template Name: Страница заказа - шаблон
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
                        <span class="opacity-60">Доставка и оплата</span>
                    </li>
                </ul>
            </div>


            <section class="lg:pt-8 pt-5 ">
                <div class="container grid grid-cols-1  md:grid-cols-2 gap-10 ">

                    <div class="flex flex-col px-5 pt-10 bg-bg rounded-3xl relative z-0 md:pb-44 pb-36">

                        <img class="rounded-2xl absolute -bottom-0 right-0 -z-10" src="/src/img/order/picture_1.png"
                            alt="" />
                        <div class="flex relative items-center">
                            <div>
                                <h2
                                    class="text-xl lg:text-3xl text-jost font-extrabold uppercase relative z-0 text-pink">
                                    Доставка </h2>
                            </div>
                            <div class="pink-line gap-10"></div>
                        </div>

                        <div class="pt-10 md:text-lg text-sm">
                            Мы отправляем Почтой России и СДЕКом. Стоимость доставки ориентировочная, точную стоимость
                            уточняйте у менеджера.
                        </div>

                        <ul class="list-disc p-4">
                            <li class="font-bold p-2 uppercase md:text-lg text-sm">ЕСЛИ ТОВАР ИМЕЕТ ОТМЕТКУ «В НАЛИЧИИ»:
                            </li>
                            <p>-если вы находитесь во Владивостоке, то доставка день в день</p>
                            <p>-если в другом городе России, то обработка заказа 2-3 рабочих дня, доставка по России
                                5-14 дней </p>

                            <li class="font-bold p-2 uppercase md:text-lg text-sm">ЕСЛИ ТОВАР ИМЕЕТ ОТМЕТКУ «ПОД ЗАКАЗ»:
                            </li>

                            <p>- 2 - 3 недели на доставку из Кореи</p>
                            <li class="font-bold p-2 uppercase md:text-lg text-sm">ЕСЛИ ТОВАР ИМЕЕТ ОТМЕТКУ «ПРЕДЗАКАЗ»:
                            </li>
                            <p>- 1,5 - 2,5 месяца, сроки рассчитываются с даты релиза, при значительных изменениях мы
                                оповестим вас лично</p>
                        </ul>
                    </div>

                    <div class="flex flex-col px-5 pt-10 bg-bg rounded-3xl relative z-0  md:pb-44 pb-36">
                        <img class="rounded-2xl absolute -bottom-0 right-0 -z-10" src="/src/img/order/picture_2.png"
                            alt="" />
                        <div class="flex relative items-center">
                            <div>
                                <h2
                                    class="text-xl lg:text-3xl text-jost font-extrabold uppercase relative z-0 text-green">
                                    Оплата </h2>
                            </div>
                            <div class="green-line gap-10"></div>
                        </div>

                        <div class="pt-8">
                            <p class="md:text-lg sm:text-sm">
                                В нашем магазине есть множество вариантов оплаты, с помощью которых Вы можете оплатить
                                заказ:
                            </p>

                            <ul class="list-disc p-4">
                                <li class="p-2 md:text-lg text-sm"><span class="font-bold">С помощью любой банковской
                                        карты</span> Visa, MasterCard, МИР, Union Pay </li>
                                <li class="p-2 md:text-lg text-sm"><span class="font-bold">Если доставка по
                                        городу</span> - наличными при получении </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </section>

    </div>
</main>

<?php get_footer(); ?>
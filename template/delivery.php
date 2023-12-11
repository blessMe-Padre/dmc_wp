<?php
/*
Template Name: Доставка и оплата - шаблон
*/
?>
<?php get_header('custom'); ?>

<main class="inner-page-main mt-40 delivery">
    <div class="container">
        <div class="flex mb-5">
            <h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative">
                Доставка и оплата</h1>
        </div>
        <div class="delivery__wrapper">
            <div class="delivery__item delivery__item--1">
                <h2 class="delivery__title">доставка</h2>
                <?php the_content(); ?>
            </div>
            <div class="delivery__item delivery__item--2">
                <h2 class="delivery__title delivery__title--green">оплата</h2>
                <p>В нашем магазине есть множество вариантов оплаты, с помощью которых Вы можете оплатить заказ:</p>
                <ul>
                    <li>С помощью любой банковской карты Visa, MasterCard, МИР, Union Pay</li>
                    <li>Если доставка по городу - наличными при получении</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
<?php
/*
Template Name: Личный кабинет страницы - шаблон
*/
?>
<?php get_header('custom'); ?>

<main class="inner-page-main mt-40">
    <div class="container">
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>
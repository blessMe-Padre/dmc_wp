<?php
/*
Template Name: Страница отзывов - шаблон
*/
get_header('custom');
?>
<main>
    <div class="container mt-40 reviews">
        <div class="flex mb-5">
            <h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative">
                Отзывы</h1>
        </div>

        <ul class="reviews__list">
            <?php
            $my_posts = get_posts(
                array(
                    'numberposts' => -1,
                    'category' => '30',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'testimonial',
                    'suppress_filters' => true,
                )
            );


            foreach ($my_posts as $post) {
                setup_postdata($post);
                ?>
                <li class="reviews__item gallery-wrapper">
                    <div class="reviews__header">
                        <div class="reviews__img">
                            <img src="<?= get_field("отзыв_аватар"); ?>" width="100" height="100" alt="avatar">
                        </div>
                        <p class="reviews__name">
                            <?= get_field("отзыв_имя"); ?>
                        </p>
                    </div>
                    <p class="reviews__text">
                        <?= get_field("отзывы_текст"); ?>
                    </p>
                    <div class="reviews__video">
                        <a class="" href="<?php the_field('отзыв_изображение'); ?>" data-caption="Image caption">
                            <img src="<?php the_field('отзыв_изображение'); ?>" width="143" height="143" alt="video"
                                alt="First image">
                        </a>
                        <!-- <img src="<?php echo get_template_directory_uri() ?>/src/img/reviews-img-2.png" width="143"
                            height="143" alt="video"> -->
                    </div>
                </li>

                <?php
            }
            wp_reset_postdata();
            ?>

        </ul>
    </div>



</main>

<?php get_footer(); ?>
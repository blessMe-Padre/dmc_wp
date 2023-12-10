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

                        <a href="#popup<?php the_ID(); ?>" class="popup-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path
                                    d="M3.25 20.5833H18.4167M7.58333 12.9999H22.75M15.1667 5.41658L22.75 5.41658M10.8333 5.41658H3.25"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20.5833 18.4167C21.0119 18.4167 21.4308 18.5437 21.7871 18.7818C22.1434 19.0199 22.4211 19.3583 22.5851 19.7542C22.7491 20.1501 22.792 20.5857 22.7084 21.006C22.6248 21.4263 22.4184 21.8124 22.1154 22.1154C21.8124 22.4184 21.4263 22.6248 21.006 22.7084C20.5857 22.792 20.1501 22.7491 19.7542 22.5851C19.3583 22.4211 19.0199 22.1434 18.7818 21.7871C18.5437 21.4308 18.4167 21.0119 18.4167 20.5833C18.4167 20.0087 18.6449 19.4576 19.0513 19.0513C19.4576 18.6449 20.0087 18.4167 20.5833 18.4167ZM3.25 13C3.25 13.4285 3.37707 13.8474 3.61515 14.2037C3.85323 14.56 4.19161 14.8377 4.58752 15.0017C4.98343 15.1657 5.41907 15.2086 5.83936 15.125C6.25965 15.0414 6.64572 14.8351 6.94873 14.5321C7.25175 14.229 7.4581 13.843 7.5417 13.4227C7.6253 13.0024 7.5824 12.5668 7.41841 12.1709C7.25442 11.7749 6.97671 11.4366 6.6204 11.1985C6.2641 10.9604 5.84519 10.8333 5.41667 10.8333C4.84203 10.8333 4.29093 11.0616 3.8846 11.4679C3.47827 11.8743 3.25 12.4254 3.25 13ZM10.8333 5.41667C10.8333 5.84519 10.9604 6.26409 11.1985 6.6204C11.4366 6.97671 11.7749 7.25441 12.1709 7.4184C12.5668 7.58239 13.0024 7.6253 13.4227 7.5417C13.843 7.4581 14.2291 7.25174 14.5321 6.94873C14.8351 6.64572 15.0414 6.25965 15.125 5.83936C15.2086 5.41907 15.1657 4.98342 15.0017 4.58752C14.8377 4.19161 14.56 3.85323 14.2037 3.61515C13.8474 3.37707 13.4285 3.25 13 3.25C12.4254 3.25 11.8743 3.47827 11.4679 3.8846C11.0616 4.29093 10.8333 4.84203 10.8333 5.41667Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <img src="<?php the_field('отзывы_видео_постер'); ?>" width="143" height="143" alt="video"
                                alt="First image">
                        </a>

                        <section id="popup<?php the_ID(); ?>" class="popup">
                            <div class="popup__body">
                                <div class="popup__content">
                                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                        <svg width="32" height="32" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                            </path>
                                        </svg>
                                    </button>
                                    <h2 class="popup__title">Видео отзыв</h2>
                                    <video preload="metadata" poster="отзывы_видео_постер" controls class="video__item">
                                        <source src="<?php the_field('отзыв_видео'); ?>" type="video/webm">
                                        <source src="<?php the_field('отзыв_видео'); ?>" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </section>
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
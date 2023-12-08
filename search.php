<?php
get_header();
?>
<main>
    <div class="container">
        <section class="inner-page-main mt-40">

            <div class="flex mb-5">
                <h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative">
                    Результаты поиска для:
                    <?php echo get_search_query(); ?>
                </h1>
            </div>

            <ul class="search-list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <?php
                        if ('product' === get_post_type()):
                            // Получаем объект продукта
                            global $product;

                            wc_get_template_part('content', 'product');
                        else:
                            // Ваш обычный код для вывода постов, если это не продукт
                            ?>

                            <!-- item вывода мероприятия -->

                            <div class="p-5">
                                <img class="rounded-lg relative" src="<?= get_field("обложка_мероприятия"); ?>" />
                                <p class="pt-2 text-base lg:text-2xl font-bold ">
                                    <?php the_title(); ?>
                                </p>
                                <div class="flex items-center justify-between md:w-auto w-full">
                                    <p class="text-sm lg:text-xl pr-3">Ждем в гости
                                        <?= get_field("дата_проведения"); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"
                                        class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                        <img class=""
                                            src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-corner.svg"
                                            alt="вправо" />
                                    </a>
                                </div>
                            </div>

                            <!-- item вывода мероприятия -->

                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>По вашему запросу ничего не найдено.</p>
            <?php endif; ?>

        </section>
    </div>
</main>
<?php
get_footer();
?>
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

            <!-- <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a></h2>
                    <?php the_excerpt(); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Ничего не найдено.</p>
            <?php endif; ?> -->

            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <?php
                    // Проверяем, является ли пост продуктом WooCommerce
                    if ('product' === get_post_type()):
                        // Получаем объект продукта
                        global $product;

                        // Теперь можно использовать шаблоны WooCommerce для отображения продукта
                        // Этот код будет выводить стандартные карточки товара WooCommerce
                        wc_get_template_part('content', 'product');
                    else:
                        // Ваш обычный код для вывода постов, если это не продукт
                        ?>
                        <h2><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a></h2>
                        <?php the_excerpt(); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Ничего не найдено.</p>
            <?php endif; ?>

        </section>
    </div>
</main>
<?php
get_footer();
?>
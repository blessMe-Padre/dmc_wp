<?php
/*
Template Name: Главная страница - шаблон 
*/
get_header();
?>

    <main>
            <section class="main-swiper mt-32 md:mb-14 sm:mb-5" data-wow-delay="0.2s">
                <div class="container">
                    <div class="item-main__wrapper -z-10">
                        <div class="slider-item w-0 min-w-[100%] overflow-hidden relative">
                            <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'product_cat' => 'album', // Замените 'news' на слаг вашей категории
                            );

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) {
                                while ($loop->have_posts()):
                                    $loop->the_post();
                                    global $product;

                                    echo '<div class="swiper-slide">';
                                    if (has_post_thumbnail($loop->post->ID)) {
                                        echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                    }

                                    echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                                    if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                        echo '<p class="md:w-40 w-28 text-white pl-2">Предзаказ</p>';
                                    } else {
                                        echo '<p class="md:w-40 w-28 text-white pl-2">В наличии</p>';
                                    }
                                    echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                                    echo '</div>';

                                    echo '<div class="flex items-center justify-center pt-10 pb-2">';
                                    echo '<p class="md:text-2xl text-sm font-Jost font-bold text-main-black uppercase">' . esc_html($loop->post->post_title) . '</p>';
                                    echo '<a href="' . get_permalink($loop->post->ID) . '" class="rounded-full shadow-md shadow-main-black p-2 ml-10" alt="' . $loop->post->post_title . '">';
                                    echo '<img class="" src="' . get_template_directory_uri() . '/src/img/icons/arrow-corner.svg" alt="вправо"/>';
                                    echo '</a>';
                                    echo '</div>';
                                    $product_id = get_the_ID();
                                    echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                    echo '</div>';

                                endwhile;
                            } else {
                                echo __('Товаров не найдено');
                            }

                            wp_reset_postdata();
                            ?>                    
                                
                            </div>
                            
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>
                    </div>
        
                    <ul class="flex items-center justify-center p-10 gap-5 flex-wrap band__list">
                        <?php
                        // Получаем объект родительской категории по ее слагу (названию)
                        $parent_category = get_term_by('slug', 'bands', 'product_cat');

                        // Проверяем, что категория действительно существует
                        if ($parent_category) {
                            $parent_cat_id = $parent_category->term_id;

                            $args = array(
                                'taxonomy' => 'product_cat',       // указываем, что нужны категории продуктов
                                'orderby' => 'name',               // сортировка по имени
                                'order' => 'ASC',                  // порядок сортировки
                                'hide_empty' => false,             // показывать пустые категории
                                'parent' => $parent_cat_id         // указываем ID родительской категории
                            );

                            $product_categories = get_terms($args);

                            if (!empty($product_categories)) {
                                foreach ($product_categories as $key => $category) {
                                    // Получаем изображение категории
                                    $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);
                                    $image_url = wp_get_attachment_url($thumbnail_id);

                                    echo '<li>';
                                    echo '<a href="' . get_term_link($category) . '">';
                                    if ($image_url) {
                                        echo '<img class="rounded-lg md:w-[150px] md:h-[150px] w-[60px] h-[60px]" src="' . $image_url . '" />';
                                    } else {
                                        // Здесь можете указать изображение по умолчанию, если у категории нет своего изображения
                                        echo '<img class="rounded-lg md:w-[150px] md:h-[150px] w-[60px] h-[60px]" src="' . get_template_directory_uri() . '/src/img/default-image.png" />';
                                    }
                                    // echo '<p>'.$category->name.'</p>'; // Вывод названия категории
                                    echo '</li>';
                                    echo '</a>';
                                }
                            }
                        } else {
                            echo '<p>Родительская категория "band" не найдена.</p>';
                        }
                        ?>
                      
                    </ul>
                                           
                    <div class="flex items-center justify-end gap-2">
                        <span class="loadMoreText">Посмотреть все</span>
                        <button class="loadMoreButton">
                            <span><img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-bottom.svg" alt="стрелочка вниз"/></span>
                        </button>
                        <button class="hideMoreButton hidden">
                            <span><img class="rotate-180" src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-bottom.svg" alt="стрелочка вниз"/></span>
                        </button>
                    </div>
                    
                </div>
            </section>

            <section class=" sm:pt-10 bg-bg page-section-1 nav-link">
                <div class=" container new-items-section">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative z-0 mb-5">Каталог</h2>
                        </div>

                                            
                        <div class="flex items-center justify-between">
                            <div class="swiper-pagination"></div>
                            <div>
                                <button
                                    class="prev-new--item-1 bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-left.svg" alt="влево" />
                                </button>
                                <button
                                    class="next-new--item-1 bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-rigth.svg" alt="вправо" />
                                </button>
                            </div>
    
                        </div>

                    </div>
        
                    <div class="tabs-container">
                        <button class="_tabs-item md:text-lg text-xs" data-tab="#candy">Азиатские вкусняшки</button>
                        <button class="_tabs-item md:text-lg text-xs" data-tab="#cosmetics">Косметика</button>
                        <button class="_tabs-item md:text-lg text-xs" data-tab="#photocard">Фотокарточки</button>
                        <button class="_tabs-item md:text-lg text-xs" data-tab="#lastic">Лайтстики</button>
                        <button class="_tabs-item md:text-lg text-xs _active" data-tab="#merch">Мерч</button>

                        
                        <!-- Первый таб со слайдерами -->
                        <div id="candy" class="_tabs-block"> 
                            <div class="new-items-section">
                                <div class="swiper new-items-1">
                                    <div class="swiper-wrapper">
                                    <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => -1,
                                        'product_cat' => 'asia-snack', // Замените 'news' на слаг вашей категории
                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) {
                                        while ($loop->have_posts()):
                                            $loop->the_post();
                                            global $product;
                                            $product_id = get_the_ID();
                                            echo '<div class="swiper-slide rounded-xl relative">';
                                            echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';

                                            echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                                            if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                                echo '<p class="md:w-40 w-28 text-white">Предзаказ</p>';
                                            } else {
                                                echo '<p class="md:w-40 w-28 text-white">В наличии</p>';
                                            }
                                            echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                                            echo '</div>';

                                            echo '<div class="new-items-section__img relative">';
                                            if (has_post_thumbnail($loop->post->ID)) {
                                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                            }
                                            echo '</div>';

                                            echo '<p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">' . esc_html($loop->post->post_title) . '</p>';
                                            echo '</a>';
                                            echo '<p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">' . wc_price($product->get_price()) . '</p>';
                                            echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                            echo '</div>';
                                        endwhile;
                                    } else {
                                        echo __('Товаров не найдено');
                                    }

                                    wp_reset_postdata();
                                    ?>    
                                        
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        <div id="cosmetics" class="_tabs-block "> 
                            <div class="new-items-section">
                                <div class="swiper new-items-2">
                                    <div class="swiper-wrapper">
                                    <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => -1,
                                        'product_cat' => 'cosmetica', // Замените 'news' на слаг вашей категории
                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) {
                                        while ($loop->have_posts()):
                                            $loop->the_post();
                                            global $product;
                                            $product_id = get_the_ID();
                                            echo '<div class="swiper-slide rounded-xl relative">';
                                            echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';

                                            echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                                            if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                                echo '<p class="md:w-40 w-28 text-white">Предзаказ</p>';
                                            } else {
                                                echo '<p class="md:w-40 w-28 text-white">В наличии</p>';
                                            }
                                            echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                                            echo '</div>';

                                            echo '<div class="new-items-section__img relative">';
                                            if (has_post_thumbnail($loop->post->ID)) {
                                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                            }
                                            echo '</div>';

                                            echo '<p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">' . esc_html($loop->post->post_title) . '</p>';
                                            echo '</a>';
                                            echo '<p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">' . wc_price($product->get_price()) . '</p>';
                                            echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                            echo '</div>';
                                        endwhile;
                                    } else {
                                        echo __('Товаров не найдено');
                                    }

                                    wp_reset_postdata();
                                    ?>    
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        <div id="photocard" class="_tabs-block "> 
                            <div class="new-items-section">
                                <div class="swiper new-items-4">
                                    <div class="swiper-wrapper">
                                    <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => -1,
                                        'product_cat' => 'photocard', // Замените 'news' на слаг вашей категории
                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) {
                                        while ($loop->have_posts()):
                                            $loop->the_post();
                                            global $product;
                                            $product_id = get_the_ID();
                                            echo '<div class="swiper-slide rounded-xl relative">';
                                            echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';

                                            echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                                            if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                                echo '<p class="md:w-40 w-28 text-white">Предзаказ</p>';
                                            } else {
                                                echo '<p class="md:w-40 w-28 text-white">В наличии</p>';
                                            }
                                            echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                                            echo '</div>';

                                            echo '<div class="new-items-section__img relative">';
                                            if (has_post_thumbnail($loop->post->ID)) {
                                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                            }
                                            echo '</div>';

                                            echo '<p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">' . esc_html($loop->post->post_title) . '</p>';
                                            echo '</a>';
                                            echo '<p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">' . wc_price($product->get_price()) . '</p>';
                                            echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                            echo '</div>';
                                        endwhile;
                                    } else {
                                        echo __('Товаров не найдено');
                                    }

                                    wp_reset_postdata();
                                    ?>    
                                    </div>
                                </div>
            
                            </div>
                        </div>     
                        <div id="lastic" class="_tabs-block "> 
                            <div class="new-items-section">
                                <div class="swiper new-items-5">
                                     <div class="swiper-wrapper">
                                     <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => -1,
                                        'product_cat' => 'lightstick', // Замените 'news' на слаг вашей категории
                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) {
                                        while ($loop->have_posts()):
                                            $loop->the_post();
                                            global $product;
                                            $product_id = get_the_ID();
                                            echo '<div class="swiper-slide rounded-xl relative">';
                                            echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';

                                            echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                                            if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                                echo '<p class="md:w-40 w-28 text-white">Предзаказ</p>';
                                            } else {
                                                echo '<p class="md:w-40 w-28 text-white">В наличии</p>';
                                            }
                                            echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                                            echo '</div>';

                                            echo '<div class="new-items-section__img relative">';
                                            if (has_post_thumbnail($loop->post->ID)) {
                                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                            }
                                            echo '</div>';

                                            echo '<p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">' . esc_html($loop->post->post_title) . '</p>';
                                            echo '</a>';
                                            echo '<p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">' . wc_price($product->get_price()) . '</p>';
                                            echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                            echo '</div>';
                                        endwhile;
                                    } else {
                                        echo __('Товаров не найдено');
                                    }

                                    wp_reset_postdata();
                                    ?>    
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        <div id="merch" class="_tabs-block _active "> 
                            <div class="new-items-section">
                                <div class="swiper new-items-6">
                                    <div class="swiper-wrapper">
                                    <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => -1,
                                        'product_cat' => 'merch', // Замените 'news' на слаг вашей категории
                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) {
                                        while ($loop->have_posts()):
                                            $loop->the_post();
                                            global $product;
                                            $product_id = get_the_ID();
                                            echo '<div class="swiper-slide rounded-xl relative">';
                                            echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';

                                            echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                                            if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                                echo '<p class="md:w-40 w-28 text-white">Предзаказ</p>';
                                            } else {
                                                echo '<p class="md:w-40 w-28 text-white">В наличии</p>';
                                            }
                                            echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                                            echo '</div>';

                                            echo '<div class="new-items-section__img relative">';
                                            if (has_post_thumbnail($loop->post->ID)) {
                                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                            }
                                            echo '</div>';

                                            echo '<p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">' . esc_html($loop->post->post_title) . '</p>';
                                            echo '</a>';
                                            echo '<p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">' . wc_price($product->get_price()) . '</p>';
                                            echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                                            echo '</div>';
                                        endwhile;
                                    } else {
                                        echo __('Товаров не найдено');
                                    }

                                    wp_reset_postdata();
                                    ?>    
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        
                    </div>

                   
                </div>
            </section>

            <!-- Секция новинки 23 -->
            <section class=" bg-bg page-section-2 md:pt-28 pt-52">
                <div class="container">
                    <section class="new-items-section">
    
                        <div class="flex items-center justify-between md:mb-5 mb-2">
                            <div>
                                <h2 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative z-0 mb-5">Новинки</h2>
                            </div>
    
                            <div class="swiper-pagination"></div>
                            <div>
                                <button
                                    class="prev-new--item bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-left.svg" alt="влево" />
                                </button>
                             <button
                                    class="next-new--item bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-rigth.svg" alt="вправо" />
                                </button>
                            </div>
    
                        </div>
    
                        <div class="swiper new-items-7">
                            <div class="swiper-wrapper">
                                
                            <!-- <div class="swiper-slide rounded-xl relative">
                                    <div class="new-items-section__img relative">
                                        <img class="rounded-xl h-auto" src="<?php echo get_template_directory_uri() ?>/src/img/new/new_1.png" />
                                    </div>
    
                                    <a href="#" class="absolute left-3 top-3 text-gray-500 w-40">
                                        <img class="absolute top-0 left-0 md:w-40 w-28" src="<?php echo get_template_directory_uri() ?>/src/img/order/sticker.png" height="40"
                                            width="160" />
                                    </a>

                                    <a href="#" class="absolute md:top-3 md:right-3 text-gray-500 md:block hidden ml-10">
                                        <img class="bg-pink rounded-lg shadow-md shadow-main-black"
                                            src="<?php echo get_template_directory_uri() ?>/src/img/icons/favorite.svg" />
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
                                                        src="<?php echo get_template_directory_uri() ?>/src/img/icons/favorite.svg" />
                                                </a>
                                               
                                                <a class="sm:block lg:hidden" href="#">
                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/cart.svg"
                                                        class="bg-green rounded-lg shadow-md shadow-main-black" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            </div> -->


                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => 'news', // Замените 'news' на слаг вашей категории
                    );

                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()):
                            $loop->the_post();
                            global $product;
                            $product_id = get_the_ID();
                            echo '<div class="swiper-slide rounded-xl relative">';
                            echo '<a href="' . get_permalink($loop->post->ID) . '" alt="' . $loop->post->post_title . '">';

                            echo '<div class="absolute left-3 top-3 text-gray-500 w-40 h-[37px] product-sticker">';
                            if (get_post_meta(get_the_ID(), '_stock_status', true) == 'onbackorder') {
                                echo '<p class="md:w-40 w-28 text-white">Предзаказ</p>';
                            } else {
                                echo '<p class="md:w-40 w-28 text-white">В наличии</p>';
                            }
                            echo '<img class="absolute top-0 left-0 md:w-40 w-28" src="' . get_template_directory_uri() . '/src/img/order/sticker_2.png" height="40" width="160" />';
                            echo '</div>';

                            echo '<div class="new-items-section__img relative">';
                            if (has_post_thumbnail($loop->post->ID)) {
                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                            }
                            echo '</div>';

                            echo '<p class="font-medium text-xs sm:text-base md:text-xl pt-2 pb-2">' . esc_html($loop->post->post_title) . '</p>';
                            echo '</a>';
                            echo '<p class="font-bold text-sm md:text-2xl md:mb-0 mr-10">' . wc_price($product->get_price()) . '</p>';
                            echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product_id . '" variation_id="0"]');
                            echo '</div>';
                        endwhile;
                    } else {
                        echo __('Товаров не найдено');
                    }

                    wp_reset_postdata();
                    ?>                                

                            </div>
                        </div>
    
                    </section>
                </div>
            </section>


            <section class="clothes page-section-4 lg:pt-28 pt-16">
                <div class="container flex justify-between items-center gap-10 flex-wrap lg:flex-row">
        
                    <div class="flex relative">
                        <img class="sm:h-[361px] sm:w-[361px] md:h-[650px] md:w-[650px]" src="<?php echo get_template_directory_uri() ?>/src/img/clothes/Banner_2.png" alt="" />
                        <a href="https://dmckpop.shop/shop/" class="absolute bg-pink rounded-lg shadow-md -z-0 pt-2 pb-2 px-16 lg:px-40 shadow-main-black bottom-9 right-6">
                            <span class="text-white  text-lg"> В каталог </span>
                        </a>
                    </div>
                    <div class="flex relative">
                        <img class="sm:h-[361px] sm:w-[361px] md:h-[650px] md:w-[650px]" src="<?php echo get_template_directory_uri() ?>/src/img/clothes/Banner_2.png" alt="" />
                        <a href="https://dmckpop.shop/shop/" class="absolute bg-pink rounded-lg shadow-md -z-0 pt-2 pb-2 px-16 lg:px-40 shadow-main-black bottom-9 right-6">
                            <span class="text-white  text-lg"> В каталог </span>
                        </a>
                    </div>
                    
                </div>
            </section>


            <section class="event sm:-mt-0 lg:mt-10 mb-10 w-0 min-w-[100%] page-section-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="container relative">
                  
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative z-0">Мероприятия</h2>
                            <a href="/events/" class="underline">посмотреть все</a>
                        </div>
                    
                    <div class="event-swiper overflow-hidden">
                        <div class="swiper-wrapper">

                        <?php
                        $my_posts = get_posts(
                            array(
                                'numberposts' => -1,
                                'category' => 7,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            )
                        );

                        foreach ($my_posts as $post) {
                            setup_postdata($post);
                            ?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="event-item1 p-5">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img class="rounded-lg w-[440px] relative" src="<?= get_field("обложка_мероприятия"); ?>" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <p class="pt-2 text-base lg:text-2xl font-bold "><?php the_title(); ?></p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <div class="flex items-center justify-between md:w-auto w-full">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="text-sm lg:text-xl pr-3">Ждем в гости <?= get_field("дата_проведения"); ?></p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a href="<?php the_permalink(); ?>" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img class="" src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-corner.svg" alt="вправо" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div> 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <?php
                        }
                        wp_reset_postdata();
                        ?>
     
                    </div>
                </div>
            </section>

            <section class="lg:pt-20 sm:pt-0">
                <div class="container relative z-0">
                    <img class="rounded" src="<?php echo get_template_directory_uri() ?>/src/img/bottom.png" alt="" />
                    <div class=" bg-main-black rounded w-full lg:ml-[36.4rem] lg:-mt-[44rem] lg:w-[818px] lg:h-[653px] p-6 relative z-10">
                        <div class="absolute bottom-0 right-0 -z-10">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/finger.png" alt="" />
                        </div>
                        <h2 class="text-3xl font-Jost font-extrabold md:text-6xl text-white p-2">
                            DMC <span class="text-pink">SHOP</span> AND <span class="text-green">CAFE</span>
                        </h2>
                        <div>
                            <p class="text-white p-3 text-sm md:text-xl">
                                Это инновационный онлайн-магазин и кафе, где царит неповторимая атмосфера корейской поп-культуры. Мы предлагаем обширный ассортимент товаров, аксессуаров и атрибутики, которые придутся по вкусу как поклонникам k-pop, так и тем, кто просто интересуется этой культурой.
                            </p>
                            <p class="text-white p-3 text-sm md:text-xl">
                                Наша цель - сделать k-pop доступным и привлекательным для всех возрастов и интересов. 
                            </p>
                            <p class="text-white p-3 text-sm md:text-xl">
                                Атмосферное место, вкусная еда и эксклюзивные коктейли Сначала захвати кофе, а потом уже мир ! ©DMC
                            </p>
                            <p class="text-white p-3 text-sm md:text-xl">
                                ПЕРВОЕ K-pop&Anime кафе на Дальнем Востоке:
                            </p>
                            <p>
                                <ul class="text-white list-disc p-7 text-sm md:text-">
                                    <li>
                                        Просмотр дорам и аниме
                                    </li>
                                    <li>
                                        Вечеринки и ивенты
                                    </li>
                                </ul>
                            </p>
                            <p>
                                <a href="https://yandex.ru/maps/org/dms_k_pop/20433094477/?ll=131.908135%2C43.115424&z=14.66" class="text-green">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                            <path d="M17 29.75C21.9583 24.65 26.9166 20.0832 26.9166 14.45C26.9166 8.8167 22.4768 4.25 17 4.25C11.5232 4.25 7.08331 8.8167 7.08331 14.45C7.08331 20.0832 12.0416 24.65 17 29.75Z" stroke="#6EC2A7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17 16.9999C18.5648 16.9999 19.8333 15.7314 19.8333 14.1666C19.8333 12.6018 18.5648 11.3333 17 11.3333C15.4351 11.3333 14.1666 12.6018 14.1666 14.1666C14.1666 15.7314 15.4351 16.9999 17 16.9999Z" stroke="#6EC2A7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        <span>Владивосток, Светланская улица, 109</span>
                                    </div>
                                    
                                </a>
                            </p>
                        </div>
                    </div>
                </div>  
            </section>
    </main>


<?php get_footer(); ?>
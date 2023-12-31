<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));

function theme_add_scripts()
{

    // подключаем файл swiper-bundle.min.css
    // wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');

    // Подключаем файл baguetteBox.min.css
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/animate.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri());

    //---------------------------------------------------------------------------------------------------------------------------------------------
}

// функция для добавления меню
function add_menu()
{
    register_nav_menu('top', 'основная навигация');
    register_nav_menu('mobile', 'навигация sidebar mobile');
    register_nav_menu('bottom', 'навигация в футере');
    register_nav_menu('bottom-right', 'навигация в футере');
    register_nav_menu('lk', 'меню личного кабинета');
    register_nav_menu('sidebar', 'сайдбар меню');
    register_nav_menu('bands', 'меню для вывода групп');
}

// инициализация woocommerce
add_action('after_setup_theme', 'woocommerce_support');

function woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('post-thumbnails', array('post', 'page', 'product'));
}

// удаляет сайдбар со страни
add_action('wp', 'bbloomer_remove_sidebar_product_pages');

function bbloomer_remove_sidebar_product_pages()
{

    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_tax()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }

    if (is_shop()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment($fragments)
{
    ob_start(); ?>
    <div class="cart-price">
        <p><span id="cart_total" class="pink-price">
                <?php echo WC()->cart->get_cart_total(); ?>
            </span></p>
    </div>
    <?php $fragments['div.cart-price'] = ob_get_clean(); // селектор блока обертки
        return $fragments;
}



// Добавляет вкладку "отзывы" для меню админки Wordpress"
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('testimonial',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'labels' => array(
                'name' => 'Отзывы',
                'singular_name' => 'Отзывы',
                'menu_name' => 'Отзывы',
                'all_items' => 'Все отзывы'
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category'),
        ));
}

// меняет приоритет вывода короткого описания
add_action('init', 'customize_wc_short_description');
function customize_wc_short_description()
{
    // Удаляем короткое описание из его стандартного места
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

    // Добавляем короткое описание в конец секции после описания одиночного продукта с высоким приоритетом
//     add_action('woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt', 100);
}


add_action('woocommerce_single_product_summary', 'custom_description_and_paragraph', 100);

function custom_description_and_paragraph()
{
    global $post;

    $short_description = apply_filters('woocommerce_short_description', $post->post_excerpt);

    if ($short_description) {

        echo '<div class="_tabs">';
        echo '<ul>';
        echo '<li class="_tabs-accordion product-accordion-item">';
        echo '<button class="product-accordion-btn _tabs-button">Описание</button>';
        // Вывод короткого описания продукта
        echo '<div class="product-accordion-content _tabs-content">' . $short_description . '</div>';
        echo '</li>';

        echo '<li class="_tabs-accordion product-accordion-item">';
        echo '<button class="product-accordion-btn _tabs-button">Информация о доставке</button>';
        echo '<div class="_tabs-content product-accordion-content">';

        echo '<p class="product-p">Предзаказ:</p>';
        echo '<p>' . get_field("предзаказ") . '</p>';
        echo '<p class="product-p">Под заказ:</p>';
        echo '<p>' . get_field("под_заказ") . '</p>';
        echo '<p class="product-p">В наличии:</p>';
        echo '<p>' . get_field("в_наличии") . '</p>';

        echo '</div>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
    }
}

function show_user_avatar_image()
{
    // Запускаем глобальную переменную для текущего пользователя
    global $current_user;
    // Получаем данные текущего пользователя
    wp_get_current_user();
    // Получаем метаданные пользователя
    $user_pic = get_user_meta($current_user->ID, 'avatar', true);
    // Проверяем, существует ли ключ user_pic
    if ($user_pic) {
        // Формируем имя файла изображения
        $image_name = $user_pic[0] . '.png';
        // Выводим тег img для отображения изображения
        echo '<img src="' . get_stylesheet_directory_uri() . '/src/img/icons/' . $image_name . '" alt="User Image">';
    }
}


// функция выводит количество товаров в мини корзине
function minicart_count_after_content()
{
    $items_count = WC()->cart->get_cart_contents_count();
    $text_label = _n('Item', 'Items', $items_count, 'woocommerce');
    if ($items_count) {
        ?>
        <p class="total item-count">
            <!-- <strong>
                <?php echo $text_label; ?>:
            </strong> -->
            <?php echo $items_count; ?>
        </p>

        <?php
    }
}


?>
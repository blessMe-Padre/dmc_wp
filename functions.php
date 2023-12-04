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
}

?>
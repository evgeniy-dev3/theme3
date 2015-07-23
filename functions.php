<?php

/**
 * загружаемые скрипты и стили
 */
function load_style_script(){
    wp_enqueue_script('jquery-google', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js');
    wp_enqueue_script('jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js');
    wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js');
    wp_enqueue_script('jquery-ui-1.9.2', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');


    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style_flexslider', get_template_directory_uri() . '/flexslider.css');
    wp_enqueue_style('style_custom', get_template_directory_uri() . '/css/jquery-ui-1.9.2.custom.css');
}


/**
 * загружаем скрипты и стили
 */
add_action('wp_enqueue_scripts', 'load_style_script');


/**
 * *  Опции
 */
function my_more_options(){
    // создает поле опции
    // $id, $title, $callback, $page, $section, $args
    add_settings_field(
        'phone',
        'Телефон',
        'display_phone',
        'general'

    );

    //Регистрирует новую опцию и callback функцию (функцию обратного вызова) для обработки
    //значения опции и её сохранеии в БД.
     //$option_group, $option_name, $sanitize_callback
    register_setting(
        'general',  //$option_group - Название группы, к которой будет принадлежать опция. Это название должно совпадать с названием группы в функции settings_fields()
        'my_phone'  //$option_name - Название опции, которая будет сохраняться в БД
    );

}
add_action('admin_init', 'my_more_options');
function display_phone(){
    echo "<input type='text' class='regular-text ltr' name='my_phone' value='" . esc_attr(get_option('my_phone')) . "'>";
}

/**
 * Иконки соц.сетей

 */

register_sidebar(array(
        'name' => 'Иконки соц.сетей в шапке',
        'id' => 'icons_header',
        'description' => 'Используйте виджет текст для добавление html кода иконок',
        'before_widget' => '',
        'after_widget' =>'',
    )
);



/**
 * Меню хедер
 */
register_nav_menus(array(
    'header_menu' => 'Меню в шапке',
    'footer_menu' => 'Меню в подвале'
));



/**
 * Слайдер на главной
 */
add_action('init', 'slider_index');
function slider_index(){
    register_post_type('slider',array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 100,
        'menu_icon' => admin_url() . 'images/media-button-2x.png',
        'labels' => array(
            'name' => 'Слайдеры',
            'all_items' => 'Все слайдеры',
            'add_new' => 'Новый слайдер',
            'add_new_item' => 'Добавить слайдер'

        )
    ));

}


/**
 * Поддержка миниатюр
 */
add_theme_support('post-thumbnails');































?>
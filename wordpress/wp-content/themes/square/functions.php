<?php

    add_filter('show_admin_bar', '__return_false');

    define('SQ_THEME_ROOT', get_template_directory_uri());
    define('SQ_CSS_DIR', SQ_THEME_ROOT.'/css');
    define('SQ_JS_DIR', SQ_THEME_ROOT.'/js');
    define('SQ_IMG_DIR', SQ_THEME_ROOT.'/img');

    add_action( 'wp_enqueue_scripts', 'connectAllForHome');

    function connectAllForHome() {
        wp_enqueue_style( 'basic', SQ_CSS_DIR.'/basic.css');
        wp_enqueue_style( 'header', SQ_CSS_DIR.'/header.css');
        wp_enqueue_style( 'home', SQ_CSS_DIR.'/home.css');
        wp_enqueue_style( 'slider', SQ_CSS_DIR.'/slider.css');
        wp_enqueue_style( 'footer', SQ_CSS_DIR.'/footer.css');
        wp_enqueue_style( 'theme', get_stylesheet_uri());
        
        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', SQ_JS_DIR.'/jquery-2.1.3.min.js');
        wp_enqueue_script( 'header-nav', SQ_JS_DIR.'/header-nav.js');
        wp_enqueue_script( 'slider', SQ_JS_DIR.'/slider.js');
        
        
    }


    add_action('init', function (){
        add_theme_support('post-thumbnails');
        
        register_post_type('actor', array(
            'labels'             => array(
                'name'               => 'Добавление в слайдер',
                'singular_name'      => 'Добавление в слайдер',
                'add_new'            => 'Добавить нового',
                'add_new_item'       => 'Добавить нового человека',
                'edit_item'          => 'Редактировать',
                'new_item'           => 'Новый человек',
                'view_item'          => 'Просмотреть информацию о человеке',
                'search_items'       => 'Найти человека',
                'not_found'          =>  'Не найдено',
                'not_found_in_trash' => 'В корзине не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Добавление в слайдер'

              ),
            'public'             => false,
            'show_ui'            => true,
            'menu_icon'          => 'dashicons-admin-users',
            'supports'           => array('title', 'thumbnail')
        ) );
    });


function getActors() {
        $posts = get_posts( array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'actor',
        ) );
        
        $actors = [];
        
        foreach(get_posts($args) as $post) {
            $actors = get_fields($post->ID);
            $actor['name'] = $post->post_title;
            $actors[] = $actor;
        }
        
        return $actors;
    }


    
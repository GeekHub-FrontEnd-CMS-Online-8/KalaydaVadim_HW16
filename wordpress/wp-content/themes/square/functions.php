<?php

    define('SQ_THEME_ROOT', get_template_directory_uri());
    define('SQ_CSS_DIR', SQ_THEME_ROOT.'/css');
    define('SQ_JS_DIR', SQ_THEME_ROOT.'/js');
    define('SQ_IMG_DIR', SQ_THEME_ROOT.'/img');

    add_action( 'wp_enqueue_scripts', 'connectAllForHome');

    function connectAllForHome() {
        wp_enqueue_style( 'basic', SQ_CSS_DIR.'/basic.css');
        wp_enqueue_style( 'header', SQ_CSS_DIR.'/header.css');
        wp_enqueue_style( 'theme', get_stylesheet_uri());
        
        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', SQ_JS_DIR.'/jquery-2.1.3.min.js');
        wp_enqueue_script( 'header-nav', SQ_JS_DIR.'/header-nav.js');
        wp_enqueue_script( 'slider', SQ_JS_DIR.'/slider.js');
        
    }
    


    register_nav_menus(array(
        'primary' => __('Primary Menu', 'square')
    ));
    
    add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
    function add_my_class_to_nav_menu( $classes, $item ){
        /* $classes содержит
        Array(
            [1] => menu-item
            [2] => menu-item-type-post_type
            [3] => menu-item-object-page
            [4] => menu-item-284
        )
        */
        $classes[] = 'header__left__nav-list';

        return $classes;
    }



    add_theme_support('post-thumbnails');



    function create_post_type_sq_carousel() {
          register_post_type( 'sq_carousel',
            array(
              'labels' => array(
                'name' => __( 'Carousel' ),
                'singular_name' => __( 'Carousel' ),
              ),
              'public' => true,
              'menu_icon'     => 'dashicons-image-rotate',
              'has_archive' => true,
              'supports'           => array('title','editor','thumbnail','excerpt')
            )
          );
        }
    add_action( 'init', 'create_post_type_sq_carousel' );




 
    add_filter("the_content", "plugin_myContentFilter");

    function plugin_myContentFilter($content)
    { 
        return mb_substr($content, 0, 120);
    }

    function create_post_type_sq_gallery() {
          register_post_type( 'sq_gallery-photo',
            array(
              'labels' => array(
                'name' => __( 'Gallery Photo' ),
                'singular_name' => __( 'Gallery Photo' ),
              ),
              'public' => true,
              'menu_icon'     => 'dashicons-format-gallery',
              'has_archive' => true,
              'supports'           => array('title','thumbnail')
            )
          );
        }
    add_action( 'init', 'create_post_type_sq_gallery' );

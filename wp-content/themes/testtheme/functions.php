<?php


function testtheme_theme_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_image_size('home-featured', 580, 300, array('center', 'center'));

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'testtheme')
    ));
}

add_action('after_setup_theme', 'testtheme_theme_setup');

function testtheme_style(){

        // wp_enqueue_style('style', get_stylesheet_uri());
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style( "main-css", get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'testtheme_style');

function testtheme_scripts(){

    // $version = wp_get_theme()->get('Version');
    wp_enqueue_script( "test-jquery-js", get_template_directory_uri() . "/assets/js/jquery.min.js", array(), '1.0', true);
    wp_enqueue_script( "test-droptron-js", get_template_directory_uri() . "/assets/js/jquery.dropotron.min.js", array(), '1.0', true);
    wp_enqueue_script( "test-browser-js", get_template_directory_uri() . "/assets/js/browser.min.js", array(), '1.0', true);
    wp_enqueue_script( "test-breakpoint-js", get_template_directory_uri() . "/assets/js/breakpoints.min.js", array(), '1.0', true);
    wp_enqueue_script( "test-util-js", get_template_directory_uri() . "/assets/js/util.js", array(), '1.0', true);
    wp_enqueue_script( "test-main-js", get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
  
}

add_action('wp_enqueue_scripts', 'testtheme_scripts');

function testtheme_widgets_init(){

        register_sidebar(array(
            'name' => __('Main sidebar', 'test-theme'),
            'id' => 'main-sidebar',
            'description' => 'Primary Right Sidebar',
            'before_widget' => '<section id="%1$s" class="box %2$s" >',
            'after_widget' => '</section>',
            'before_title' => '<header><h3 class="widget-title">',
            'after_title' => '</h3></header>'
        ));

        register_sidebar(array(
            'name' => __('Footer Widget 1', 'test-theme'),
            'id' => 'footer-widget-1',
            'description' => 'Footer Widget 1',
            'before_widget' => '<section id="%1$s" class="widget %2$s" >',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>'
        ));

        register_sidebar(array(
            'name' => __('Footer Widget 2', 'test-theme'),
            'id' => 'footer-widget-2',
            'description' => 'Footer Widget 2',
            'before_widget' => '<section id="%1$s" class="widget %2$s" >',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>'
        ));

        register_sidebar(array(
            'name' => __('Footer Widget 3', 'test-theme'),
            'id' => 'footer-widget-3',
            'description' => 'Footer Widget 3',
            'before_widget' => '<section id="%1$s" class="widget %2$s" >',
            'after_widget' => '</section>',
            'before_title' => '<header><h2 class="widget-title">',
            'after_title' => '</h2></header>'
        ));
}


add_action('widgets_init', 'testtheme_widgets_init');

//Add custom portfolio type

require get_template_directory().'/includes/portfolio.php';
// require get_template_directory().'/front-page.php';
?>



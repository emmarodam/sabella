<?php 
function sabella() {
    wp_register_style( 'custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_css' );
}
add_action( 'wp_enqueue_scripts', 'sabella' );

//function sabella_custom_menu () {
    register_nav_menu('header-menu',__('sabella Custom Menu', 'mycustommenu'));
//}
//add_action('init', 'sabella_custom_menu'); 

add_theme_support('post-thumbnails');

if (class_exists('WooCommerce')) {
    // Write snippets withing this blog
    

    function customtheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
     }
     add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support');


    // Remove WooCommerce Styles
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );

    add_filter( 'woocommerce_show_page_title', '__return_false' );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    }

?> 
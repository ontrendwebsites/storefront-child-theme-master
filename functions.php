<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


function ontrend_scripts_and_styles() {
  wp_register_script('ontrend_script', get_stylesheet_directory_uri() . '/library/js/ontrend.js', array(), '1.0', true);
  wp_enqueue_script('ontrend_script');

  wp_register_style('ontrend_style', get_stylesheet_directory_uri() . '/library/css/ontrend.css', array(), '1.0', false);
  wp_enqueue_style('ontrend_style');
}
  
add_action( 'wp_enqueue_scripts', 'ontrend_scripts_and_styles' );  

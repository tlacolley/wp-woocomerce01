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


 add_action( 'woocommerce_after_shop_loop_item', 'add_stock',9 );

 function add_stock() {
     wc_get_template_part('template_wc_stock' ,'template_wc_stock' );
 }



 add_filter( 'raw_woocommerce_price', 'wc_function_price' );
 function wc_function_price( $price ) {
 // Your code
     if ($price > 50) {

         $price = $price/1.2 ;
     }
     else if ($price >10) {
         $price = $price/1.1 ;
     }
     else {
         $price = $price/1.05 ;
     }

    return $price ;
}

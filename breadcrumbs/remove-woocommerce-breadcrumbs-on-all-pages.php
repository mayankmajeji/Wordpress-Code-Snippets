<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-woocommerce-breadcrumbs-wordpress/
*/ 

/**
 * Remove the WooCommerce breadcrumbs in WordPress 
 */
 function maverick_remove_woocommerce_breadcrumbs() {
     remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
 }
 add_action( 'init', 'maverick_remove_woocommerce_breadcrumbs' );


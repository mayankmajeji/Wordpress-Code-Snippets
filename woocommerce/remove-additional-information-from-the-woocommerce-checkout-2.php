<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-additional-information-from-woocommerce-checkout-page/
*/ 

/**
 * Remove WooCommerce Order Notes Field
 */
add_filter('woocommerce_enable_order_notes_field', '__return_false', 9999);


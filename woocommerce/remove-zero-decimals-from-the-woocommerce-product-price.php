<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-zero-decimals-in-woocommerce-product-price/
*/ 

/**
 * Remove Zero Decimals from Product Price in WooCommerce
 */
add_filter( ‘woocommerce_price_trim_zeros’, ‘__return_true’ );


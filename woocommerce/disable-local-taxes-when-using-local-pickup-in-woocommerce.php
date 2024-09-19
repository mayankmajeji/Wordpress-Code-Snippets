<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-local-taxes-when-using-local-pickup-woocommerce/
*/ 

/**
 * Disable Local Taxes when using Local Pickup in WooCommerce
 */
function maverick_disable_local_taxes_when_using_local_pickup(){
    add_filter( 'woocommerce_apply_base_tax_for_local_pickup', '__return_false' );
}
add_action('init','maverick_disable_local_taxes_when_using_local_pickup');


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/change-default-state-country-on-woocommerce-checkout/
*/ 

/**
 * Change the default country on the WooCommerce checkout page
 */
function maverick_change_default_checkout_country() {
    return 'XX'; // country code
}

add_filter( 'default_checkout_billing_country', 'maverick_change_default_checkout_country' );


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-rename-the-reviews-data-tab-in-woocommerce/
*/ 

/**
 * Remove WooCommerce Reviews Tab
 *
 * @param array $tabs
 * @return array $tabs
 */
function maverick_remove_woocommerce_reviews_tab($tabs)
{
    unset($tabs['reviews']);
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'maverick_remove_woocommerce_reviews_tab', 98);


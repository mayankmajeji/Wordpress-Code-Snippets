<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-rename-the-description-data-tab-in-woocommerce/
*/ 

/**
 * Remove WooCommerce Description Tab
 *
 * @param array $tabs
 * @return array $tabs
 */
function maverick_remove_woocommerce_description_tab($tabs)
{
    unset($tabs['description']);
    return $tabs;
}
add_filter('woocommerce_product_tabs', 'maverick_remove_woocommerce_description_tab', 98);


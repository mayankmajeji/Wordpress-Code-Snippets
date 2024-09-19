<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-rename-the-additional-information-tab-in-woocommerce/
*/ 

/**
 * Remove WooCommerce Additional Information Tab
 *
 * @param array $tabs
 * @return array $tabs
 */
function maverick_remove_woocommerce_additional_information_tab($tabs)
{
    unset($tabs['additional_information']);
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'maverick_remove_woocommerce_additional_information_tab', 98);


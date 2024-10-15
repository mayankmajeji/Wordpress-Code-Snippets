<?php

/** 
 * Author: UnmaskWP.com
 * GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
 * Post Link: https://unmaskwp.com/snippets/how-to-reorder-data-tabs-in-woocommerce-single-product-page/
 */

/**
 * Reorder product data tabs
 */
function maverick_reorder_woocommerce_single_product_tabs($tabs)
{

    // Set Reviews Tab first
    $tabs['reviews']['priority'] = 5;

    // Set Description Tab second
    $tabs['description']['priority'] = 10;

    // Set Additional information Tab third
    $tabs['additional_information']['priority'] = 15;

    return $tabs;
}

add_filter('woocommerce_product_tabs', 'maverick_reorder_woocommerce_single_product_tabs', 98);

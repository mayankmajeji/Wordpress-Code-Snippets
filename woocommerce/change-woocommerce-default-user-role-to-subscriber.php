<?php

/** 
 * Author: UnmaskWP.com
 * GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
 * Post Link: https://unmaskwp.com/snippets/how-to-change-woocommerce-default-user-role-to-subscriber/
 */

/**
 * Change WooCommerce default user role to "Subscriber"
 *
 * @param array $args
 * @return array $args
 */
function maverick_change_default_woocommerce_role($args)
{
    // Assign Subsciber role.
    $args['role'] = 'subscriber';

    return $args;
}

add_filter('woocommerce_new_customer_data', 'maverick_change_default_woocommerce_role', 10, 1);

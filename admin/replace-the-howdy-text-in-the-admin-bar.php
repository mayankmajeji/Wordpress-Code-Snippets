<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/change-howdy-text-wordpress-admin-bar/
*/ 

/**
 * Replace Howdy text in the Admin Bar
 *
 * @param object $wp_admin_bar
 * @return void
 */
function maverick_replace_admin_bar_howdy($wp_admin_bar)
{

    // Get 'my-account' node
    $my_account = $wp_admin_bar->get_node('my-account');

    // Replace 'Howdy,' in the below line with your desired text for the admin bar
    $new_title = str_replace('Howdy,', 'Welcome,', $my_account->title);

    // Add new node
    $wp_admin_bar->add_node([
        'id' => 'my-account',
        'title' => $new_title,
    ]);
}

add_filter('admin_bar_menu', 'maverick_replace_admin_bar_howdy', 25);


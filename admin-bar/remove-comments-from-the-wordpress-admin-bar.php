<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-comments-link-from-wordpress-admin-bar/
*/ 

/**
 * Remove Comments from WordPress admin bar
 */
function maverick_remove_comments_from_wordpress_admin_bar(){
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'maverick_remove_comments_from_wordpress_admin_bar' );


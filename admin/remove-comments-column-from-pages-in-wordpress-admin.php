<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-the-comments-column-from-pages-wordpress-admin/
*/ 

/**
 * Remove Comments Column from Pages in WordPress Admin
 */
function maverick_remove_pages_comments_columns_wp_admin($defaults) {
    unset($defaults['comments']);
    return $defaults;
}
add_filter('manage_pages_columns', 'maverick_remove_pages_comments_columns_wp_admin');


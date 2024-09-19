<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/add-post-id-to-posts-and-pages-admin-columns-in-wordpress/
*/ 

/**
 * Add Admin Column Name
 *
 * @param string[] $defaults
 * @return string[] $defaults
 */
function maverick_add_admin_column_name($defaults)
{
    $defaults['mvrk_post_id'] = __('ID');
    return $defaults;
}

add_filter('manage_posts_columns', 'maverick_add_admin_column_name', 5);
add_filter('manage_pages_columns', 'maverick_add_admin_column_name', 5);

/**
 * Display Post ID for Posts and Pages in Admin Column
 *
 * @param string $column_name
 * @param [type] $id
 */
function maverick_display_post_id_admin_column($column_name, $id)
{
    if ($column_name === 'mvrk_post_id') {
        echo $id;
    }
}

add_action('manage_posts_custom_column', 'maverick_display_post_id_admin_column', 5, 2);
add_action('manage_pages_custom_column', 'maverick_display_post_id_admin_column', 5, 2);


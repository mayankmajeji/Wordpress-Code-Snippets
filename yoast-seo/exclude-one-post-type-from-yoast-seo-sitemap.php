<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/exclude-post-types-from-yoast-seo-sitemap-wordpress/
*/ 

/**
 * Exclude One Post Type From Yoast SEO Sitemap
 *
 * @param string $value
 * @param string $post_type
 * @return boolean
 */
function maverick_sitemap_exclude_post_type($value, $post_type)
{
    // Check if post type is equal to custom post type slug
    if ($post_type == 'post_type_slug') {
        return true;
    }
}

add_filter('wpseo_sitemap_exclude_post_type', 'maverick_sitemap_exclude_post_type', 10, 2);


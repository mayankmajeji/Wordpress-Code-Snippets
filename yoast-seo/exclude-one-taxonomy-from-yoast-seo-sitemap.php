<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-exclude-taxonomies-from-yoast-seo-sitemap-wordpress/
*/ 

/**
 * Exclude One Taxonomy From Yoast SEO Sitemap
 *
 * @param string $value
 * @param string $taxonomy
 * @return boolean
 */
function maverick_sitemap_exclude_taxonomy($value, $taxonomy)
{
    // Check if taxonomy is equal to custom taxonomy slug
    if ($taxonomy == 'taxonomy_slug') {
        return true;
    }
}

add_filter('wpseo_sitemap_exclude_taxonomy', 'maverick_sitemap_exclude_taxonomy', 10, 2);


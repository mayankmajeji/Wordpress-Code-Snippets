<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/include-empty-taxonomies-yoast-seo-sitemap-xml/
*/ 

/**
 * Add empty taxonomies to Yoast SEO Sitemap.xml File in WordPress
 */
add_filter('wpseo_sitemap_exclude_empty_terms', '__return_false');


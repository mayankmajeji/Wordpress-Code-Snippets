<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/change-author-slug-base-in-wordpress/
*/ 

/**
 * Change Author URL Slug & Base in WordPress
 */
function maverick_change_author_slug_base()
{
    global $wp_rewrite;
    
    $author_slug = 'profile'; // change slug name
    
    $wp_rewrite->author_base = $author_slug;
}
add_action( 'init', 'maverick_change_author_slug_base' ); 


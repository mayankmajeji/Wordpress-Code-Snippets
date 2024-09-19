<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-post-revisions-wordpress/
*/ 

/**
 * Disable Post Revisions in WordPress
 */
function maverick_disable_post_revisions_wordpress()
{
    define('WP_POST_REVISIONS', false);
}
add_action('init', 'maverick_disable_post_revisions_wordpress');


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/limit-wordpress-post-revisions/
*/ 

/**
 * Limit the number of revisions per post.
 */
if (!defined('WP_POST_REVISIONS')) {
    define('WP_POST_REVISIONS', 5);
}


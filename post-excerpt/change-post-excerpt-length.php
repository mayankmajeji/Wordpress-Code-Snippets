<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/change-wordpress-post-excerpt-length/
*/ 

/**
 * Change Post Excerpt Length
 *
 * @param int $length
 * @return int
 */
function maverick_change_post_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'maverick_change_post_excerpt_length', 999);


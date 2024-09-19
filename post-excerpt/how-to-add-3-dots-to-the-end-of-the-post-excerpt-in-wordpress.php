<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/add-3-dots-to-the-end-of-the-post-excerpt-in-wordpress/
*/ 

/**
 * Add 3 Dots to the End of The Post Excerpt in WordPress
 */
function maverick_excerpt_more_text($more) {
    return '...';
}
add_filter('excerpt_more', 'maverick_excerpt_more_text');


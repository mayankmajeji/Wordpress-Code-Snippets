<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/add-read-more-permalink-to-the-end-of-the-excerpt/
*/ 

/**
 * Add Read More Permalink to the end of 'the_excerpt'
 */
function maverick_excerpt_readmore($more) {
    return '... <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'maverick_excerpt_readmore');


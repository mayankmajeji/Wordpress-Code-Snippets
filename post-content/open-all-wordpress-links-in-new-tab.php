<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/open-wordpress-post-links-in-new-tab/
*/ 

/**
 * Open all WordPress links in new tab
 *
 * @param string $text WordPress Post Content
 * @return string $text WordPress Post Content
 */
function maverick_target_blank($text)
{
    $return = str_replace('<a', '<a target = "_blank"', $text);
    return $return;
}

add_filter('the_content', 'maverick_target_blank');


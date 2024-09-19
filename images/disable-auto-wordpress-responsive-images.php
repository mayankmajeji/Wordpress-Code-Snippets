<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-disable-auto-wordpress-responsive-images/
*/ 

/**
 * Disable responsive images by removing 
 * the srcset attribute in WordPress
 *
 * @return bool
 */
function maverick_disable_responsive_images()
{
    return false;
}

add_filter('wp_calculate_image_srcset', 'maverick_disable_responsive_images');


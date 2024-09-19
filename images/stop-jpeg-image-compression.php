<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/stop-wordpress-from-compressing-jpeg-images/
*/ 

/**
 * Stop JPEG Image Compression in WordPress
 *
 * @return int
 */
function maverick_stop_jpeg_image_compression()
{
    return 100;
}
add_filter('jpeg_quality', 'maverick_stop_jpeg_image_compression');


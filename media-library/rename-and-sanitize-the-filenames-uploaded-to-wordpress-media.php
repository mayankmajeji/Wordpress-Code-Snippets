<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/rename-sanitize-filenames-uploaded-wordpress-media/
*/ 

/**
 * Sanitize Uploaded Filenames in WordPress
 *
 * @param string $filename
 * @return string $filename
 */
function maverick_sanitize_wordpress_upload_filenames($filename)
{
    // Convert filename to lowercase
    $filename['name'] = strtolower($filename['name']);

    // replace '_' to '-' in the filename
    $filename['name'] = str_replace('_', '-', $filename['name']);

    // replace ' ' to '-' in the filename
    $filename['name'] = str_replace(' ', '-', $filename['name']);

    return $filename;
}
add_filter('sanitize_file_name', 'maverick_sanitize_wordpress_upload_filenames', 10);


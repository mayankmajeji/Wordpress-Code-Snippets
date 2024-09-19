<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-allow-zip-file-uploads-in-wordpress/
*/ 

/**
 * Allow ZIP file upload in WordPress
 */
function maverick_allow_zip_mime_types($mimes)
{

    $mimes['zip'] = 'application/zip';

    return $mimes;
}

add_filter('upload_mimes', 'maverick_allow_docs_mime_types');


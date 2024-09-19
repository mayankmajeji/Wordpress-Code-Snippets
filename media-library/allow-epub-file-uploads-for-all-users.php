<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-allow-epub-file-uploads-in-wordpress/
*/ 

/**
 * Allow EPUB file upload in WordPress
 */
function maverick_allow_epub_file_mime_types($mimes)
{

    $mimes['epub'] = 'application/epub+zip';

    return $mimes;
}

add_filter('upload_mimes', 'maverick_allow_docs_mime_types');


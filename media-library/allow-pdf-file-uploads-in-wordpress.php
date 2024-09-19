<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-allow-pdf-file-uploads-in-wordpress/
*/ 

/**
 * Allow PDF file upload in WordPress
 */
function maverick_allow_pdf_file_mime_types($mimes)
{

    $mimes['pdf'] = 'application/pdf';

    return $mimes;
}

add_filter('upload_mimes', 'maverick_allow_docs_mime_types');


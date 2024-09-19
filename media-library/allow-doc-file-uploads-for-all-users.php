<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/allow-doc-file-uploads-in-wordpress/
*/ 

/**
 * Allow DOC file upload in WordPress
 */
function maverick_allow_docs_mime_types($mimes)
{

    $mimes['doc'] = 'application/msword';
    $mimes['docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';

    return $mimes;
}

add_filter('upload_mimes', 'maverick_allow_docs_mime_types');


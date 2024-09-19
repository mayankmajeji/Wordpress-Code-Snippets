<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/allow-contributors-to-upload-images/
*/ 

// If current user is contributor and doesn't have permission upload files
if (current_user_can('contributor') && !current_user_can('upload_files')){
    add_action('admin_init', 'maverick_allow_contributor_uploads');
}

/**
 * Allow Contributors to Upload Images
 */
function maverick_allow_contributor_uploads()
{
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}


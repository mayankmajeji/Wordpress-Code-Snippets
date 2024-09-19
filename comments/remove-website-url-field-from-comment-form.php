<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-website-url-field-from-wordpress-comment-form/
*/ 

/**
 * Remove Website Field From Comment Form
 *
 * @param array $fields
 * @return array $fields
 */
function maverick_remove_comment_website_field($fields)
{
    if (isset($fields['url']))
        unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'maverick_remove_comment_website_field');


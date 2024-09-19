<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-json-rest-api-wordpress/
*/ 

/**
 * Disable WordPress REST API
 */
function maverick_wordpress_disable_rest_api($access)
{
    return new WP_Error
        'rest_disabled',
        __('The WordPress REST API has been disabled.'),
        array(
            'status' => rest_authorization_required_code(),
        )
    );
}

add_filter('rest_authentication_errors', 'maverick_wordpress_disable_rest_api');


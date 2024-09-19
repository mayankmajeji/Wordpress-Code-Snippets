<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-jquery-migrate-js-from-wordpress-website/
*/ 

/**
 * Remove jQuery Migrate from WordPress website
 *
 * @param obj $scripts
 * @return obj $scripts
 */
function maverick_remove_jquery_migrate($scripts)
{
    // Don't remove jQuery Migrate for admin pages
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            array('jquery-migrate')
        );
    }
}

add_action('wp_default_scripts', 'maverick_remove_jquery_migrate');


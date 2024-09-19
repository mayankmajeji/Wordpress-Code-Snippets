<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-dashicons-frontend-wordpress/
*/ 

/**
 * Disable Dashicons on Front-end
 */
function marverick_disable_dashicons_frontend()
{
    if (!is_admin()) {
        wp_deregister_style('dashicons');
    }
}
add_action('wp_enqueue_scripts', 'marverick_disable_dashicons_frontend');


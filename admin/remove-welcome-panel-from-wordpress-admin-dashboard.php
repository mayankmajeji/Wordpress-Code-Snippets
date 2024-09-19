<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-the-welcome-panel-wordpress-admin-dashboard/
*/ 

/**
 * Remove the Welcome Panel from the WordPress Admin Dashboard
 *
 * @return void
 */
function maverick_remove_welcome_panel_wordpress()
{
    remove_action('welcome_panel', 'wp_welcome_panel');
}
add_action('admin_init', 'maverick_remove_welcome_panel_wordpress');


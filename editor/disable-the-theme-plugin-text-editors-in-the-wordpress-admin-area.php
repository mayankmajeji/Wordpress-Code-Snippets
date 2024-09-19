<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-theme-plugin-editors-from-wordpress-admin-panel/
*/ 

/**
 * Disable the theme / plugin text editors in WordPress Admin Area
 */
function maverick_display_theme_plugin_editors_wordpress()
{
    define('DISALLOW_FILE_EDIT', TRUE);
}
add_action('init', 'maverick_display_theme_plugin_editors_wordpress');


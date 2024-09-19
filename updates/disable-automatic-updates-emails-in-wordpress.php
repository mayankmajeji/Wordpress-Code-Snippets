<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-automatic-updates-emails-wordpress/
*/ 

// Disable auto-update emails for WordPress core.
add_filter('auto_core_update_send_email', '__return_false');

// Disable auto-update emails for WordPress plugins.
add_filter('auto_plugin_update_send_email', '__return_false');

// Disable auto-update emails for WordPress themes.
add_filter('auto_theme_update_send_email', '__return_false');


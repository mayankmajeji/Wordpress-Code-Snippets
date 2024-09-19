<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-wordpress-admin-bar/
*/ 

/**
 * Remove the admin bar from the front end
 */
add_filter('show_admin_bar', '__return_false');


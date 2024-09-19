<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-wordpress-admin-bar-for-all-users-except-administrators/
*/ 

// Remove the admin bar from the front end for non-administrator users
if (!current_user_can('administrator') && !is_admin()) {
  add_filter( 'show_admin_bar', '__return_false' );
}


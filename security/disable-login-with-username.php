<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-login-with-username-in-wordpress/
*/ 

/**
 * Disable Login With Username in WordPress
 */
remove_filter( 'authenticate', 'wp_authenticate_username_password', 20 );


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-login-with-email-address-in-wordpress/
*/ 

/**
 * Disable Login With Email Address in WordPress
 */
remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );


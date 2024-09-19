<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-language-switcher-wordpress-login/
*/ 

/**
 * Disable Language Dropdown on WordPress Login Page
 */
add_filter('login_display_language_dropdown', '__return_false');


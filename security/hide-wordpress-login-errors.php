<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/hide-login-errors-wordpress/
*/ 

/**
 * Hide WordPress Login Errors
 *
 * @return string
 */
function maverick_hide_wordpress_login_errors()
{
    return 'Oh ho! Something is wrong!';
}
add_filter('login_errors', 'maverick_hide_wordpress_login_errors');


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-breadcrumb-from-bbpress-forums/
*/ 

/**
 * Disable Breadcrumbs in BBPress Forums
 *
 * @param array $param
 * @return bool
 */
function maverick_bbp_no_breadcrumb($param)
{
    return true;
}
add_filter('bbp_no_breadcrumb', 'maverick_bbp_no_breadcrumb');


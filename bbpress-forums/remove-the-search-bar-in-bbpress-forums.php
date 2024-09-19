<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-search-bar-in-bbpress-forums/
*/ 

/**
 * Remove Search Bar in BBPress Forums
 *
 * @param array $param
 * @return bool
 */
function maverick_bbp_no_allow_search($param)
{
    return false;
}
add_filter('bbp_allow_search', 'maverick_bbp_no_allow_search');


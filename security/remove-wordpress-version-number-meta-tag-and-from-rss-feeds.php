<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-wordpress-version-number/
*/ 

/**
 * Remove WordPress Version Number Meta Tag and from RSS Feeds
 *
 * @return string WordPress version number
 */
function maverick_remove_wordpress_version() {
    return '';
}
add_filter('the_generator', 'maverick_remove_wordpress_version');


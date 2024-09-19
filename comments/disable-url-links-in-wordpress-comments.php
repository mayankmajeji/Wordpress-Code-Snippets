<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-url-links-wordpress-comments/
*/ 

/**
 * Disable URL Links in WordPress Comments
 */
remove_filter('comment_text', 'make_clickable', 9);


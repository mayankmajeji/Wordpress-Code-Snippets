<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-emojis-in-wordpress/
*/ 

/**
 * Remove Emojis Styles and Scripts From the Front-end. 
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 10 ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 


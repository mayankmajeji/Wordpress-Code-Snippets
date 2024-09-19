<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/enable-shortcodes-in-wordpress-text-widget/
*/ 

/**
* Enable Shortcode in Text Widget
*/
add_filter( 'widget_text', 'do_shortcode' );


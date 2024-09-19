<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-wlwmanifest-link-wordpress/
*/ 

/**
 * Disable wlwmanifestmanifest.xml in WordPress
 */
remove_action('wp_head', 'wlwmanifest_link');


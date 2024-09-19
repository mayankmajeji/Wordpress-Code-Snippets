<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-automatic-updates-wordpress/
*/ 

/**
 * Disable Automatic Updates via a WordPress Core Filter
 */
add_filter( 'automatic_updater_disabled', '__return_true' );


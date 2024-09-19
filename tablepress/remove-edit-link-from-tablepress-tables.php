<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-edit-link-from-tablepress-tables/
*/ 

/**
 * Remove Edit Link From TablePress Tables
 */
add_filter( 'tablepress_edit_link_below_table', '__return_false');


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-xml-rpc-wordpress/
*/ 

/**
 * Disable XML-RPC in WordPress
 */
add_filter( 'xmlrpc_enabled', '__return_false' );


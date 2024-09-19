<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-tablepress-resources-on-homepage/
*/ 

/**
 * Disable TablePress Resources
 */
function maverick_disable_tablepress_resources( $load ) {
    if ( is_front_page() ) {
        $load = false;
    }
    return $load;
}
add_filter( 'tablepress_use_default_css', 'maverick_disable_tablepress_resources' );


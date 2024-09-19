<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-all-embeds-wordpress/
*/ 

/**
 * Disable all embeds in WordPress
 */
function disable_wp_embeds()
{
    // Remove the REST API endpoint for oEmbed
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery
    add_filter('embed_oembed_discover', '__return_false');

    // Remove oEmbed discovery links from the header
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove the oEmbed-specific JavaScript from the front end
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Remove the oEmbed-specific JavaScript from the back end
    function maverick_remove_oembed_js($plugins)
    {
        return array_diff($plugins, array('wpembed'));
    }
    add_filter('tiny_mce_plugins', 'maverick_remove_oembed_js');

    // Remove all embeds handlers
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);

    // Disable embeds in content
    add_filter('embed_oembed_html', '__return_false', 10, 4);
    add_filter('embed_handler_html', '__return_false', 10, 4);
}
add_action('init', 'disable_wp_embeds');


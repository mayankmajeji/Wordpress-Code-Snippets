<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-rss-feeds-in-wordpress/
*/ 

/**
 * Disable RSS feeds in WordPress
 */
function unmaskwp_disable_feeds()
{
    wp_die(__('No feed available, please visit the <a href="' . esc_url(home_url('/')) . '">homepage</a>!'));
}

add_action('do_feed', 'unmaskwp_disable_feeds', 1);
add_action('do_feed_rdf', 'unmaskwp_disable_feeds', 1);
add_action('do_feed_rss', 'unmaskwp_disable_feeds', 1);
add_action('do_feed_rss2', 'unmaskwp_disable_feeds', 1);
add_action('do_feed_atom', 'unmaskwp_disable_feeds', 1);
add_action('do_feed_rss2_comments', 'unmaskwp_disable_feeds', 1);
add_action('do_feed_atom_comments', 'unmaskwp_disable_feeds', 1);


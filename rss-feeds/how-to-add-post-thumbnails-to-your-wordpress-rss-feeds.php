<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/add-post-thumbnails-to-wordpress-rss-feeds/
*/ 

/**
 * Add Post Thumbnails to RSS Feeds
 *
 * @param string[] $content
 * @return string[] $content
 */
function maverick_add_post_thumbnail_to_rss_feed($content)
{
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $content = '' . get_the_post_thumbnail($post->ID) . '' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'maverick_add_post_thumbnail_to_rss_feed');
add_filter('the_content_feed', 'maverick_add_post_thumbnail_to_rss_feed');


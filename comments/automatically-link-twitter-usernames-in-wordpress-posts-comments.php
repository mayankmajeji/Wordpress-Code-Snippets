<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/automatically-link-twitter-usernames-in-wordpress-posts-comments/
*/ 

/**
 * Automatically Link Twitter Usernames in WordPress Posts & Comments
 *
 * @param string $content
 * @return string
 */
function maverick_link_twitter_usernames_wordpress($content) {
    return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $content);
}

add_filter('the_content', 'maverick_link_twitter_usernames_wordpress');   
add_filter('comment_text', 'maverick_link_twitter_usernames_wordpress');


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/remove-website-url-from-comment-author-name/
*/ 

/**
 * Filters the comment author's link for display.
 *
 * @since 1.5.0
 * @since 4.1.0 The `$author` and `$comment_ID` parameters were added.
 *
 * @param string $return     The HTML-formatted comment author link.
 *                           Empty for an invalid URL.
 * @param string $author     The comment author's username.
 * @param int    $comment_ID The comment ID.
 */
function maverick_remove_comment_author_link($return, $author, $comment_ID)
{
    return $author;
}

add_filter('get_comment_author_link', 'maverick_remove_comment_author_link', 10, 3);


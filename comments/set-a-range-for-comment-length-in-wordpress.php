<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/limit-comment-length-wordpress/
*/ 

/**
 * Set a Range for Comment Length in WordPress
 *
 * @param string[] $comment
 * @return string[] $comment
 */
function maverick_set_comment_length_range($comment)
{
    $minimum_characters = 60;
    $maximum_characters = 4000;

    if (strlen($comment['comment_content']) > $maximum_characters) {
        wp_die('Comment is too long. The comment must be less than ' . $maximum_characters . ' characters');
    }
    if (strlen($comment['comment_content']) < $minimum_characters) {
        wp_die('Comment is too short. Please use at least ' . $minimum_characters . ' characters.');
    }
    return $comment;
}
add_filter('preprocess_comment', 'maverick_set_comment_length_range');


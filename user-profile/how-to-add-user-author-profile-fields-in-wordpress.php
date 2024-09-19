<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/add-author-profile-fields-wordpress/
*/ 

/**
 * Add Author Profile Fields 
 *
 * @param array $contactmethods
 * @return array $contactmethods
 */
function maverick_add_author_profile_fields($contactmethods)
{
    // Add Facebook
    $contactmethods['facebook'] = 'Facebook';

    // Add X (Previously Twitter)
    $contactmethods['twitter'] = 'X (Previously Twitter)';

    // Add Instagram
    $contactmethods['instagram'] = 'Instagram';

    // Add Linkedin
    $contactmethods['linkedin'] = 'Linkedin';

    // Add GitHub
    $contactmethods['github'] = 'GitHub';

    return $contactmethods;
}
add_filter('user_contactmethods', 'maverick_add_author_profile_fields', 10, 1);


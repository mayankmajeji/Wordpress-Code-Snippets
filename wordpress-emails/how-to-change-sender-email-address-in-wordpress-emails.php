<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/change-sender-name-email-address-wordpress-emails/
*/ 

/**
 * Change Sender Email Address in WordPress Emails
 *
 * @param string $original_email_address
 * @return string 
 */
function maverick_change_sender_email_address_wp_emails($original_email_address)
{
    // Store new email adress
    $original_email_address = 'john.doe@example.com';

    // Return new email address
    return $original_email_address;
}

add_filter('wp_mail_from', 'maverick_change_sender_email_address_wp_emails');


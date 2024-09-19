<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/disable-widget-blocks-wordpress-restore-classic-widgets/
*/ 

/**
 * Disable Widgets Block Editor (Restore Classic Widgets Editor)
 */
function maverick_disable_widgets_block_editor()
{
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'maverick_disable_widgets_block_editor');


<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/how-to-remove-yoast-seo-admin-columns/
*/ 

/**
 * Remove Yoast SEO Columns From Admin Area
 */
function maverick_remove_yoast_seo_admin_columns( $columns ) {
	/* remove the Yoast SEO columns */
	unset( $columns['wpseo-score'] );
	unset( $columns['wpseo-title'] );
	unset( $columns['wpseo-metadesc'] );
	unset( $columns['wpseo-focuskw'] );
	unset( $columns['wpseo-score-readability'] );
	unset( $columns['wpseo-links'] );
        unset($columns['wpseo-linked']);
	return $columns;
}

/* remove from posts */
add_filter ( 'manage_edit-post_columns', 'maverick_remove_yoast_seo_admin_columns' );
/* remove from pages */
add_filter ( 'manage_edit-page_columns', 'maverick_remove_yoast_seo_admin_columns' );
/* remove from woocommerce product post type */
add_filter ( 'manage_edit-product_columns', 'maverick_remove_yoast_seo_admin_columns' );

/**
 * can remove from custom post types too
 * add_filter ( 'manage_edit-{custom_post_type}_columns', 'maverick_remove_yoast_seo_admin_columns' );
 */


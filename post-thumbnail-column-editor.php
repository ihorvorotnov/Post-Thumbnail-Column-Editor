<?php
/*
Plugin Name: Post Thumbnail Column Editor
Plugin URI:  http://wordpress.org/plugins/post-thumbnail-column-editor
Description: Manage you post and custom post type thumbnails from post listing screen
Version:     0.1.0
Author:      Ihor Vorotnov
Author URI:  http://ihorvorotnov.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: ptce
*/

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Activate plugin
 */
function ptce_install() {

}
register_activation_hook( __FILE__, 'ptce_install' );

/**
 * Deactivate plugin
 */
function ptce_deactivation() {

}
register_deactivation_hook( __FILE__, 'ptce_deactivation' );

/**
 * Uninstall plugin
 */
function ptce_uninstall() {

}
register_uninstall_hook ( __FILE__, 'ptce_uninstall' );

/**
 * Add post column
 * @param  array $columns Array of current columns
 * @return array          Updated array with new column appended
 */
function ptce_add_thumb_column( $columns ) {
	return array_merge(
		$columns,
		array( 'post_thumbnail_column' => __( '<span class="dashicons dashicons-format-image"></span>', 'post_thumbnail_column' ) )
	);
}
add_filter( 'manage_posts_columns' , 'ptce_add_thumb_column' );

/**
 * Add linked icons to columns
 * @param  string $column  Current column name
 * @param  int    $post_id The ID of current post
 */
function ptce_render_thumb_column( $column, $post_id ) {
	if ( 'post_thumbnail_column' == $column ) {
		if ( has_post_thumbnail() ) {
			echo '<a href="#"><span class="dashicons dashicons-edit"></span></a>';
		} else {
			echo '<a href="#"><span class="dashicons dashicons-plus"></span></a>';
		}
	}
}
add_action( 'manage_posts_custom_column' , 'ptce_render_thumb_column', 10, 2 );

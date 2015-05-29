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
Text Domain: post-thumbnail-column
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
function ptc_install() {

}
register_activation_hook( __FILE__, 'ptc_install' );

/**
 * Deactivate plugin
 */
function ptc_deactivation() {

}
register_deactivation_hook( __FILE__, 'ptc_deactivation' );

/**
 * Uninstall plugin
 */
function ptc_uninstall() {

}
register_uninstall_hook ( __FILE__, 'ptc_uninstall' );

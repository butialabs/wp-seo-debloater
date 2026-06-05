<?php
/**
 * Plugin Name: 		WP SEO Debloater
 * Plugin URI:  		https://butialabs.com
 * Description:			Hide most of the bloat that the Yoast SEO plugin adds to your WordPress Dashboard
 * Version:     		1.0.1
 * Author:				Butiá Labs
 * Author URI:  		https://butialabs.com
 * License:    			GPL-3.0+
 * License URI:			http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: 		/languages
 * Text Domain: 		wp-seo-debloater
 * Network:     		true
 * GitHub Plugin URI:	https://github.com/butialabs/wp-seo-debloater
 */

// don't load the plugin file directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wp-seo-debloater.php' );
require_once( 'includes/class-wp-seo-debloater-settings.php' );

// Load separate remove class function
require_once( 'includes/remove-class.php' );

// Load plugin libraries
require_once( 'admin/class-wp-seo-debloater-admin-api.php' );

/**
 * Returns the main instance of WP_SEO_Debloater to prevent the need to use globals.
 *
 * @since  v2.0.0
 * @return object WP_SEO_Debloater
 */
function WP_SEO_Debloater () {
	$instance = WP_SEO_Debloater::instance( __FILE__, '1.0.1' );

	if ( null === $instance->settings ) {
		$instance->settings = WP_SEO_Debloater_Settings::instance( $instance );
	}

	return $instance;
}

WP_SEO_Debloater();

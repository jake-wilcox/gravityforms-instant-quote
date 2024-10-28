<?php
/**
 * Plugin Name: Gravityforms Instant Quote
 * Version: 1.0.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: gravityforms-instant-quote
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-gravityforms-instant-quote.php';
require_once 'includes/class-gravityforms-instant-quote-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-gravityforms-instant-quote-admin-api.php';
require_once 'includes/lib/class-gravityforms-instant-quote-post-type.php';
require_once 'includes/lib/class-gravityforms-instant-quote-taxonomy.php';

/**
 * Returns the main instance of Gravityforms_Instant_Quote to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Gravityforms_Instant_Quote
 */
function gravityforms_instant_quote() {
	$instance = Gravityforms_Instant_Quote::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Gravityforms_Instant_Quote_Settings::instance( $instance );
	}

	return $instance;
}

gravityforms_instant_quote();

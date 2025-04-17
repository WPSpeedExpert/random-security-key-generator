<?php
/**
 * Plugin Name:        Random Security Key Generator
 * Plugin URI:         https://github.com/WPSpeedExpert/random-security-key-generator
 * Description:        Generates random security keys for use in configuration files or as secure tokens. Use shortcode [random_security_key] to display a key anywhere.
 * Version:            1.0.0
 * Author:             OctaHexa
 * Author URI:         https://octahexa.com
 * Text Domain:        random-security-key-generator
 * License:            GPL-2.0+
 * License URI:        https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI:  https://github.com/WPSpeedExpert/random-security-key-generator
 * GitHub Branch:      main
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Generate a random alphanumeric key of a given length.
 *
 * @param int $length Length of the security key.
 * @return string Generated security key.
 */
function oh_generate_random_security_key( $length = 32 ) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $key = '';
    $max = strlen( $characters ) - 1;

    for ( $i = 0; $i < $length; $i++ ) {
        $key .= $characters[ random_int( 0, $max ) ];
    }

    return $key;
}

/**
 * Shortcode to display a random security key.
 * Usage: [random_security_key length=32]
 *
 * @param array $atts Shortcode attributes.
 * @return string Generated security key.
 */
function oh_random_security_key_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'length' => 32,
    ), $atts, 'random_security_key' );

    $length = max( 8, intval( $atts['length'] ) ); // Enforce minimum length of 8

    return esc_html( oh_generate_random_security_key( $length ) );
}
add_shortcode( 'random_security_key', 'oh_random_security_key_shortcode' );

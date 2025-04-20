<?php
/**
 * Plugin Name:        Random Security Key Generator
 * Plugin URI:         https://github.com/WPSpeedExpert/random-security-key-generator
 * Description:        Generates random security keys and displays them in a copy‑button code block with light/dark theme support.
 * Version:            1.0.4
 * Author:             OctaHexa
 * Author URI:         https://octahexa.com
 * Text Domain:        random-security-key-generator
 * Domain Path:        /languages
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
 * Load textdomain for translations.
 */
add_action( 'plugins_loaded', function() {
    load_plugin_textdomain( 'random-security-key-generator', false, dirname( plugin_basename(__FILE__) ) . '/languages' );
} );

/**
 * Enqueue our JS + CSS.
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'rskg-style',
        plugin_dir_url( __FILE__ ) . 'css/style.css',
        [],
        '1.0.2'
    );
    wp_enqueue_script(
        'rskg-copy',
        plugin_dir_url( __FILE__ ) . 'js/copy.js',
        [], // no dependencies
        '1.0.2',
        true
    );
} );

/**
 * Generate a random alphanumeric key.
 *
 * @param int $length Length of the security key.
 * @return string
 */
function rskg_generate_random_security_key( $length = 32 ) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $key   = '';
    $max   = strlen( $chars ) - 1;
    for ( $i = 0; $i < $length; $i++ ) {
        $key .= $chars[ random_int( 0, $max ) ];
    }
    return $key;
}

/**
 * Shortcode: [random_security_key length=32]
 *
 * @param array $atts
 * @return string
 */
function rskg_random_security_key_shortcode( $atts ) {
    $atts   = shortcode_atts( [ 'length' => 32 ], $atts, 'random_security_key' );
    $length = max( 8, intval( $atts['length'] ) );
    $key    = esc_html( rskg_generate_random_security_key( $length ) );

    ob_start(); ?>
    <div class="rskg-container">
      <pre class="rskg-code"><code><?php echo $key; ?></code></pre>
      <button class="rskg-copy-button" aria-label="<?php esc_attr_e( 'Copy security key', 'random-security-key-generator' ); ?>">
        <?php esc_html_e( 'Copy', 'random-security-key-generator' ); ?>
      </button>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'random_security_key', 'rskg_random_security_key_shortcode' );

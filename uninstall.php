<?php
/**
 * File: uninstall.php
 * Version: 1.0.2
 * Description: Cleanup logic fired when the plugin is uninstalled via WP Admin.
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

// Currently no options to clean up.
// If you introduce settings in future, delete_option() calls go here.

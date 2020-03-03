<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.kri8it.com
 * @since             1.0.0
 * @package           Fincon_Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Fincon For Woocommerce
 * Plugin URI:        fincon-woocommerce
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hilton Moore
 * Author URI:        https://www.kri8it.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fincon-woocommerce
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FINCON_WOOCOMMERCE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fincon-woocommerce-activator.php
 */
function activate_fincon_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce-activator.php';
	Fincon_Woocommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fincon-woocommerce-deactivator.php
 */
function deactivate_fincon_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce-deactivator.php';
	Fincon_Woocommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fincon_woocommerce' );
register_deactivation_hook( __FILE__, 'deactivate_fincon_woocommerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fincon_woocommerce() {

	$plugin = new Fincon_Woocommerce();
	$plugin->run();

}
run_fincon_woocommerce();

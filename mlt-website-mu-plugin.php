<?php
/**
 * Plugin Name: MLT Website MU Plugin
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: MathieuLamiot
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mltwebsitemuplugin
 * Domain Path: /languages
 */

use function MLTWebsiteMUPlugin\Dependencies\LaunchpadCore\boot;

defined( 'ABSPATH' ) || exit;


require __DIR__ . '/vendor-prefixed/wp-launchpad/core/inc/boot.php';

boot( __FILE__ );

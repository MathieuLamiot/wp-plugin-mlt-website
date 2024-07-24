<?php
namespace MLTWebsiteMUPlugin\Configs;

defined( 'ABSPATH' ) || exit;

$plugin_name = 'MLT Website MU Plugin'; // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

$plugin_launcher_path = dirname( __DIR__ ) . '/'; // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

return [
	'plugin_name'          => $plugin_name,
	'plugin_slug'          => sanitize_key( $plugin_name ),
	'plugin_version'       => '1.0.0',
	'plugin_launcher_file' => $plugin_launcher_path . '/' . basename( $plugin_launcher_path ) . '.php',
	'plugin_launcher_path' => $plugin_launcher_path,
	'plugin_inc_path'      => realpath( $plugin_launcher_path . 'inc/' ) . '/',
	'prefix'               => 'mlt_website_mu_plugin_',
	'translation_key'      => 'mltwebsitemuplugin',
	'is_mu_plugin'         => false,
];

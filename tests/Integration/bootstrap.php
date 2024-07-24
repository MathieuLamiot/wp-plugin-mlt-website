<?php
namespace MLTWebsiteMUPlugin\Tests\Integration;

define( 'MLT_WEBSITE_MU_PLUGIN_PLUGIN_ROOT', dirname( dirname( __DIR__ ) ) . DIRECTORY_SEPARATOR );
define( 'MLT_WEBSITE_MU_PLUGIN_TESTS_FIXTURES_DIR', dirname( __DIR__ ) . '/Fixtures' );
define( 'MLT_WEBSITE_MU_PLUGIN_TESTS_DIR', __DIR__ );
define( 'MLT_WEBSITE_MU_PLUGIN_IS_TESTING', true );

// Manually load the plugin being tested.
tests_add_filter(
    'muplugins_loaded',
    function() {
        // Load the plugin.
        require MLT_WEBSITE_MU_PLUGIN_PLUGIN_ROOT . '/mlt-website-mu-plugin.php';
    }
);

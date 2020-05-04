<?php
/*
Plugin Name: My Plugin
Description: test plugin
Version: 1.0.0
Author: truong.nq
Text Domain: my-plugin
Domain Path: /languages/
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'MYPLUGIN_VERSION', '1.0.0' );
define( 'MYPLUGIN__MINIMUM_WP_VERSION', '4.0' );
define( 'MYPLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MYPLUGIN_DELETE_LIMIT', 100000 );

require_once( MYPLUGIN__PLUGIN_DIR . 'database.php' );
require_once( MYPLUGIN__PLUGIN_DIR . 'plugin-rest-api.php' );

add_action( 'rest_api_init', array( 'Plugin_REST_API', 'init' ) );

register_activation_hook( __FILE__, 'jal_install' );
register_activation_hook( __FILE__, 'jal_install_data' );
register_deactivation_hook( __FILE__, 'jal_uninstall');

if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
    require_once( MYPLUGIN__PLUGIN_DIR . 'plugin-admin.php' );
    add_action( 'init', array( 'Plugin_Admin', 'init' ) );
}

add_action( 'plugins_loaded', 'myplugin_load_textdomain' );

function myplugin_load_textdomain() {
    $plugin_dir = basename( dirname( __FILE__ ) ) . '/languages';

    load_plugin_textdomain( 'my-plugin', false, $plugin_dir);
}
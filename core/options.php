<?php
// create custom plugin settings menu
add_action('admin_menu', 'scf_create_menu');

function scf_create_menu() {

	//create new top-level menu
	add_menu_page('Shortcode Factory Settings', 'Shortcode Factory', 'manage_options', __FILE__, 'scf_settings_page', SCF_IMGURL.'/icon-scfactory24x24.png');

	/**
	 * @since 2.5
	 */
	add_submenu_page( __FILE__, 'Shortcode Factory Settings', 'Settings', 'manage_options', 'admin.php?page=shortcode-factory/core/options.php' );

	//call register settings function
	add_action( 'admin_init', 'scf_register_settings' );
}

function scf_register_settings() {
	//register our settings
	register_setting('scf-settings', 'scf_options');
}

function scf_settings_page() {
	global $scf_builtin_shortcodes, $scf_shortcode_groups;

	include(SCF_UI."/options/default.php");
}

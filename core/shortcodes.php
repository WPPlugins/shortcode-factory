<?php
/*
 * File: /core/shortcodes.php
 *
 * Built-in short codes, provided by the plugin
 *
 * Notes:
 * 		- Each short code callback must start with scf_shortcode_
 */

/*
 * $scf_builtin_shortcodes
 *
 * This global array holds a register of all built-in short codes.
 * Format:
 * 		1. Short code Slug
 * 		2. Callback Function
 * 		3. Short code Title (Display Name) for UI
 * 		4. Short code Description for UI
 *		5. true=Short code has a UI for parameters; false=(default) Short code has no UI
 */
global $scf_builtin_shortcodes;
global $scf_shortcode_groups;
global $scf_html_tags_register;

$scf_shortcode_groups = array(
	'posts_pages' => array(__('Posts & Pages', 'shortcode-factory'), __('Short codes related to standard WordPress operations', 'shortcode-factory'), 'dashicons-format-aside'),
	'users_roles' => array(__('Users & Roles', 'shortcode-factory'), __('Short codes related to common user operations', 'shortcode-factory'), 'dashicons-groups'),
	'forms' => array(__('Forms', 'shortcode-factory'), __('General purpose HTML forms short codes', 'shortcode-factory'), 'dashicons-feedback'),
	'forms_html5' => array(__('HTML5 Form Elements', 'shortcode-factory'), __('Additional short codes for HTML5 form elements', 'shortcode-factory'), 'dashicons-index-card'),
	'ui_util' => array(__('UI & Utility', 'shortcode-factory'), __('General purpose utility short codes', 'shortcode-factory'), 'dashicons-layout'),
	/**
	 * @since 2.5
	 */
	'templates' => array(__('Templates', 'shortcode-factory'), __('Template short codes', 'shortcode-factory'), 'dashicons-index-card')
);

$scf_builtin_shortcodes = array();
$scf_html_tags_register = array();
$options = get_option('scf_options');
$active_shortcodes = $options["general"]["active_shortcodes"];

foreach ($scf_shortcode_groups as $group => $group_info) {
	if($active_shortcodes && in_array($group, $active_shortcodes)) {
		include('shortcodes/'.$group.'.php');
	}
}

// Register all short codes
add_action('init', 'scf_register_builtin_shortcodes');

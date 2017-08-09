<?php
/*
 * File: /core/shortcodes/users_roles.php
 *
 * Short codes related to Roles/Capabilities/User Permissions/Users
 */

global $scf_builtin_shortcodes;

// Short codes
$scf_builtin_shortcodes['users_roles'] = array(
	'scf-allow' => array('scf-allow', 'scf_shortcode_allow', __('Allow', 'shortcode-factory'), __('Allows content to specified roles.', 'shortcode-factory'), true),
	'scf-login-form' => array('scf-login-form', 'scf_login_form', __('Login Form', 'shortcode-factory'), __('Displays WordPress login form.', 'shortcode-factory'), false),
	'scf-login-link' => array('scf-login-link', 'scf_login_link', __('Login Link', 'shortcode-factory'), __('Displays a login link, or if a user is logged in, displays a logout link.', 'shortcode-factory'), false),
	'scf-register-link' => array('scf-register-link', 'scf_register_link', __('Register Link', 'shortcode-factory'), __('Displays either the Site Admin link if the user is logged in or Register link if the user is not logged in.', 'shortcode-factory'), false)
);

// Callbacks
/**
 * [scf-allow] returns the encapsulated content for specified roles only.
 *
 * This short code requires a closing. i.e. [scf-allow {params}]...[/scf-allow]
 *
 */
function scf_shortcode_allow($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"role" => ""	// comma separated list of roles
			),
			$atts, "scf_allow"
		)
	);

	$params = array(
		"role" => $role
	);

	return scf_allow($role, $content);
}

/**
 * [scf-login-form] displays the WordPress login form.
 *
 */
function scf_login_form() {
	return wp_login_form(array('echo' => false));
}

/**
 * [scf-login-link] Displays a login link, or if a user is logged in, displays a logout link.
 *
 */
function scf_login_link() {
	return wp_loginout(null, false);
}

/**
 * [scf-register-link] Displays either the "Site Admin" link if the user is logged in or "Register" link if the user is not logged in.
 *
 */
function scf_register_link() {
	return wp_register('', '', false);
}

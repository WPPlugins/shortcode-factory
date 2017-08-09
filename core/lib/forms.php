<?php
/*
 * File: /core/lib/forms.php
 *
 * Form functions.
 */

/**
 * [scf-form-*] Creates form structure and controls.
 *
 * This callback is used by scf-form-* short codes.
 *
 * @since 2.3
 * @see ../shortcodes/forms.php
 */
if(!function_exists('scf_shortcode_form')) {
	function scf_shortcode_form($atts, $content, $shortcode) {
		global $scf_html_tags_register;

		$tag = $scf_html_tags_register['forms'][$shortcode]['tag'];
		$enclosure = $scf_html_tags_register['forms'][$shortcode]['enclosure'];
		$params = shortcode_atts($scf_html_tags_register['forms'][$shortcode]['params'], $atts, $shortcode);

		return scf_html_tag($tag, $params, $content, $enclosure);
	}
}

/**
 * [scf-form-*] Creates HTML5 form controls.
 *
 * This callback is used by HTML5 scf-form-* short codes.
 *
 * @since 2.3
 * @see ../shortcodes/forms_html5.php
 */
if(!function_exists('scf_shortcode_form_html5')) {
	function scf_shortcode_form_html5($atts, $content, $shortcode) {
		global $scf_html_tags_register;

		$tag = $scf_html_tags_register['forms_html5'][$shortcode]['tag'];
		$enclosure = $scf_html_tags_register['forms_html5'][$shortcode]['enclosure'];
		$params = shortcode_atts($scf_html_tags_register['forms_html5'][$shortcode]['params'], $atts, $shortcode);

		return scf_html_tag($tag, $params, $content, $enclosure);
	}
}

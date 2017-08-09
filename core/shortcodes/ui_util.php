<?php
/*
 * File: /core/shortcodes/ui_util.php
 *
 * Short codes related to UI & Usability
 */

global $scf_builtin_shortcodes;

// Short codes
$scf_builtin_shortcodes['ui_util'] = array(
	'scf-table' => array('scf-table', 'scf_shortcode_table', __('Table', 'shortcode-factory'), __('Creates table structure.', 'shortcode-factory'), true),
	'scf-tr' => array('scf-tr', 'scf_shortcode_table_tr', __('Table Row', 'shortcode-factory'), __('Creates table row.', 'shortcode-factory'), true),
	'scf-td' => array('scf-td', 'scf_shortcode_table_td', __('Table Cell', 'shortcode-factory'), __('Creates table cell.', 'shortcode-factory'), true),
	'scf-container' => array('scf-container', 'scf_shortcode_container', __('Container', 'shortcode-factory'), __('Creates container with an HTML tag.', 'shortcode-factory'), true),
	'scf-countries' => array('scf-countries', 'scf_shortcode_countries', __('Countries', 'shortcode-factory'), __('Outputs list of countries.', 'shortcode-factory'), true),
	'scf-states' => array('scf-states', 'scf_shortcode_states', __('US States', 'shortcode-factory'), __('Outputs list of US states.', 'shortcode-factory'), true)
);

// Callbacks
/**
 * [scf-table] Creates table structure
 *
 * @since 2.0
 */
function scf_shortcode_table($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"class" => "scf-table",
				"border" => "",
				"cellpadding" => "",
				"cellspacing" => "",
				"bgcolor" => "",
				"align" => "",
				"width" => ""
			),
			$atts, "scf_table"
		)
	);

	$params = array(
		"id" => $id,
		"class" => $class,
		"border" => $border,
		"cellpadding" => $cellpadding,
		"cellspacing" => $cellspacing,
		"bgcolor" => $bgcolor,
		"align" => $align,
		"width" => $width
	);

	return scf_html_tag('table', $params, $content);
}

/**
 * [scf-tr] Creates table row
 *
 * @since 2.0
 */
function scf_shortcode_table_tr($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"class" => "scf-tr",
				"bgcolor" => "",
				"align" => "",
				"valign" => ""
			),
			$atts, "scf_tr"
		)
	);

	$params = array(
		"id" => $id,
		"class" => $class,
		"bgcolor" => $bgcolor,
		"align" => $align,
		"valign" => $valign
	);

	return scf_html_tag('tr', $params, $content);
}

/**
 * [scf-td] Creates table cell
 *
 * @since 2.0
 */
function scf_shortcode_table_td($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"class" => "scf-td",
				"bgcolor" => "",
				"align" => "",
				"valign" => "",
				"width" => "",
				"height" => "",
				"colspan" => "",
				"rowspan" => ""
			),
			$atts, "scf_td"
		)
	);

	$params = array(
		"id" => $id,
		"class" => $class,
		"bgcolor" => $bgcolor,
		"align" => $align,
		"valign" => $valign,
		"width" => $width,
		"height" => $height,
		"colspan" => $colspan,
		"rowspan" => $rowspan
	);

	return scf_html_tag('td', $params, $content);
}

/**
 * [scf-container] Creates container tag
 *
 * @since 2.0
 */
function scf_shortcode_container($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"class" => "scf-container",
				"output" => "div"
			),
			$atts, "scf_container"
		)
	);

	return scf_format_output(do_shortcode($content), $output, $class, array("id" => $id));
}

/**
 * [scf-countries] Outputs list of countries
 *
 * @since 2.3
 */
function scf_shortcode_countries($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"id" => "scf-countries",
				"class" => "scf-countries",
				"output" => "select",
				"format" => "",
				"template" => "%%NAME%%"
			),
			$atts, "scf_countries"
		)
	);

	$params = array(
		"id" => $id,
		"class" => $class
	);

	if(empty($format)) {
		switch($output) {
			case 'select':
				$format = 'dd-iso-name';
				break;

			case 'ul':
			case 'ol':
				$format = 'ul-name';
				break;

			case 'raw':
				$format = 'raw-line';
				break;
		}
	}

	return scf_countries($params, $output, $format, $template, 'countries');
}

/**
 * [scf-states] Outputs list of US states
 *
 * @since 2.3
 */
function scf_shortcode_states($atts, $content) {
	extract(
		shortcode_atts(
			array(
				"id" => "scf-states",
				"class" => "scf-states",
				"output" => "select",
				"format" => "",
				"template" => "%%NAME%%"
			),
			$atts, "scf_states"
		)
	);

	$params = array(
		"id" => $id,
		"class" => $class
	);

	if(empty($format)) {
		switch($output) {
			case 'select':
				$format = 'dd-iso-name';
				break;

			case 'ul':
			case 'ol':
				$format = 'ul-name';
				break;

			case 'raw':
				$format = 'raw-line';
				break;
		}
	}

	return scf_countries($params, $output, $format, $template, 'states');
}

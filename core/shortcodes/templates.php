<?php
/*
 * File: /core/shortcodes/templates.php
 *
 * Short codes related to Shortcode Templates
 *
 * @since 2.5
 */

global $scf_builtin_shortcodes;

// Short codes
$scf_builtin_shortcodes['templates'] = array(
	'scf-template' => array('scf-template', 'scf_shortcode_template', __('Shortcode Template', 'shortcode-factory'), __('Outputs shortcode template.', 'shortcode-factory'), true),
);

// Callbacks
/**
 * [scf-template] returns the output of the shortcode template.
 *
 */
function scf_shortcode_template($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"output" => "raw",
				"class" => "scf-template"
			),
			$atts, "scf_template"
		)
	);

	$ret = "";

	if(!empty($id)) {
		$template = get_post($id);
		wp_reset_postdata();
		$ret = apply_filters('the_content', $template->post_content);
		$ret = scf_format_output($ret, $output, $class);
	}

	return $ret;
}

// Helpers
function get_templates() {
	$data = array();
	$args = array(
		'post_type' => 'scf-templates',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'post_title',
		'order'   => 'ASC',
	);

	$scf_templates = new WP_Query($args);

	while($scf_templates->have_posts()) {
		$scf_templates->the_post();

		$data[get_the_ID()] = get_the_title();
	}

	wp_reset_postdata();

	return $data;
}
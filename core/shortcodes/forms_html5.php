<?php
/*
 * File: /core/shortcodes/forms_html5.php
 *
 * Short codes related to HTML forms.
 */

// Callbacks
require SCF_LIB.'/forms.php';

global $scf_builtin_shortcodes;

// Short codes
$scf_builtin_shortcodes['forms_html5'] = array(
	// Input types - HTML 5
	'scf-form-email' => array('scf-form-email', 'scf_shortcode_form_html5', __('Email', 'shortcode-factory'), __('Creates email input ßfield.', 'shortcode-factory'), true),
	'scf-form-tel' => array('scf-form-tel', 'scf_shortcode_form_html5', __('Telephone / Tel', 'shortcode-factory'), __('Creates phone number input field.', 'shortcode-factory'), true),
	'scf-form-url' => array('scf-form-url', 'scf_shortcode_form_html5', __('URL', 'shortcode-factory'), __('Creates URL input field.', 'shortcode-factory'), true),
	'scf-form-number' => array('scf-form-number', 'scf_shortcode_form_html5', __('Number', 'shortcode-factory'), __('Creates number input field.', 'shortcode-factory'), true),
	'scf-form-range' => array('scf-form-range', 'scf_shortcode_form_html5', __('Range', 'shortcode-factory'), __('Creates range input field.', 'shortcode-factory'), true),
	'scf-form-color' => array('scf-form-color', 'scf_shortcode_form_html5', __('Color', 'shortcode-factory'), __('Creates color input field.', 'shortcode-factory'), true),
	'scf-form-search' => array('scf-form-search', 'scf_shortcode_form_html5', __('Search', 'shortcode-factory'), __('Creates search input field.', 'shortcode-factory'), true),

	// Date / Time
	'scf-form-date' => array('scf-form-date', 'scf_shortcode_form_html5', __('Date', 'shortcode-factory'), __('Creates date input field.', 'shortcode-factory'), true),
	'scf-form-time' => array('scf-form-time', 'scf_shortcode_form_html5', __('Time', 'shortcode-factory'), __('Creates time input field.', 'shortcode-factory'), true),
	'scf-form-datetime' => array('scf-form-datetime', 'scf_shortcode_form_html5', __('Date Time', 'shortcode-factory'), __('Creates date-time input field.', 'shortcode-factory'), true),
	'scf-form-datetime-local' => array('scf-form-datetime-local', 'scf_shortcode_form_html5', __('Local Date Time', 'shortcode-factory'), __('Creates local date-time input field.', 'shortcode-factory'), true),
	'scf-form-week' => array('scf-form-week', 'scf_shortcode_form_html5', __('Week', 'shortcode-factory'), __('Creates week input field.', 'shortcode-factory'), true),
	'scf-form-month' => array('scf-form-month', 'scf_shortcode_form_html5', __('Month', 'shortcode-factory'), __('Creates month input field.', 'shortcode-factory'), true),
);

/**
 * Holds all HTML5 forms related tags and their respective/supported attributes for the plugin (and short code's GUI).
 *
 * Format: See below
 */
global $scf_html_tags_register;

$scf_html_tags_register['forms_html5'] = array(
	'scf-form-email' => array(				// Related short code
		'tag' => 'input',					// HTML Tag name
		'enclosure' => false,				// true = has a closing tag; false = Self closing
		'params' => array(					// Supported attributes
			'type' => 'email',
			'id' => '',
			'class' => 'scf-form-email',
			'name' => 'scf-form-email',
			'value' => '',
			'size' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-tel' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'tel',
			'id' => '',
			'class' => 'scf-form-tel',
			'name' => 'scf-form-tel',
			'value' => '',
			'size' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-url' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'url',
			'id' => '',
			'class' => 'scf-form-url',
			'name' => 'scf-form-url',
			'value' => '',
			'size' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-number' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'number',
			'id' => '',
			'class' => 'scf-form-number',
			'name' => 'scf-form-number',
			'value' => '',
			'size' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => '',
			'step' => ''
		)
	),

	'scf-form-range' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'range',
			'id' => '',
			'class' => 'scf-form-range',
			'name' => 'scf-form-range',
			'value' => '',
			'size' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),

	'scf-form-color' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'color',
			'id' => '',
			'class' => 'scf-form-color',
			'name' => 'scf-form-color',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-search' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'search',
			'id' => '',
			'class' => 'scf-form-search',
			'name' => 'scf-form-search',
			'value' => '',
			'size' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-date' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'date',
			'id' => '',
			'class' => 'scf-form-date',
			'name' => 'scf-form-date',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),

	'scf-form-time' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'time',
			'id' => '',
			'class' => 'scf-form-time',
			'name' => 'scf-form-time',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),

	'scf-form-datetime' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'datetime',
			'id' => '',
			'class' => 'scf-form-datetime',
			'name' => 'scf-form-datetime',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),

	'scf-form-datetime-local' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'datetime-local',
			'id' => '',
			'class' => 'scf-form-datetime-local',
			'name' => 'scf-form-datetime-local',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),

	'scf-form-week' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'week',
			'id' => '',
			'class' => 'scf-form-week',
			'name' => 'scf-form-week',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),

	'scf-form-month' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'month',
			'id' => '',
			'class' => 'scf-form-month',
			'name' => 'scf-form-month',
			'value' => '',
			'autocomplete' => '',
			'placeholder' => '',
			'min' => '',
			'max' => ''
		)
	),
);

<?php
/*
 * File: /core/shortcodes/forms.php
 *
 * Short codes related to HTML forms.
 */

// Callbacks
require SCF_LIB.'/forms.php';

global $scf_builtin_shortcodes;

// Short codes
$scf_builtin_shortcodes['forms'] = array(
	'scf-form' => array('scf-form', 'scf_shortcode_form', __('Form', 'shortcode-factory'), __('Creates form structure.', 'shortcode-factory'), true),
	'scf-form-submit' => array('scf-form-submit', 'scf_shortcode_form', __('Submit Button', 'shortcode-factory'), __('Creates form submit button.', 'shortcode-factory'), true),
	'scf-form-reset' => array('scf-form-reset', 'scf_shortcode_form', __('Reset Button', 'shortcode-factory'), __('Creates form reset button.', 'shortcode-factory'), true),
	'scf-form-button' => array('scf-form-button', 'scf_shortcode_form', __('Button', 'shortcode-factory'), __('Creates clickable button.', 'shortcode-factory'), true),

	// Input types
	'scf-form-text' => array('scf-form-text', 'scf_shortcode_form', __('Text Input', 'shortcode-factory'), __('Creates single line text input.', 'shortcode-factory'), true),
	'scf-form-textarea' => array('scf-form-textarea', 'scf_shortcode_form', __('Text Area', 'shortcode-factory'), __('Creates multiline text box.', 'shortcode-factory'), true),
	'scf-form-password' => array('scf-form-password', 'scf_shortcode_form', __('Password', 'shortcode-factory'), __('Creates password input.', 'shortcode-factory'), true),
	'scf-form-radio' => array('scf-form-radio', 'scf_shortcode_form', __('Radio Button', 'shortcode-factory'), __('Creates radio button.', 'shortcode-factory'), true),
	'scf-form-checkbox' => array('scf-form-checkbox', 'scf_shortcode_form', __('Checkbox', 'shortcode-factory'), __('Creates checkbox.', 'shortcode-factory'), true),

	// Select and related
	'scf-form-select' => array('scf-form-select', 'scf_shortcode_form', __('Drop-down List', 'shortcode-factory'), __('Creates drop-down list.', 'shortcode-factory'), true),
	'scf-form-select-optgroup' => array('scf-form-optgroup', 'scf_shortcode_form', __('Options Group', 'shortcode-factory'), __('Creates drop-down list options group.', 'shortcode-factory'), true),
	'scf-form-select-option' => array('scf-form-option', 'scf_shortcode_form', __('Option', 'shortcode-factory'), __('Creates drop-down list option.', 'shortcode-factory'), true),

	// Other
	'scf-form-label' => array('scf-form-label', 'scf_shortcode_form', __('Label', 'shortcode-factory'), __('Creates a caption for a field.', 'shortcode-factory'), true),
	'scf-form-fieldset' => array('scf-form-fieldset', 'scf_shortcode_form', __('Field Set', 'shortcode-factory'), __('Creates group of form fields.', 'shortcode-factory'), true),
	'scf-form-legend' => array('scf-form-legend', 'scf_shortcode_form', __('Legend', 'shortcode-factory'), __('Creates a caption for field set.', 'shortcode-factory'), true),
);

/**
 * Holds all forms related tags and their respective/supported attributes for the plugin (and short code's GUI).
 *
 * Format: See below
 */
global $scf_html_tags_register;

$scf_html_tags_register['forms'] = array(
	'scf-form' => array(					// Related short code
		'tag' => 'form',					// HTML Tag name
		'enclosure' => true,				// true = has a closing tag; false = Self closing
		'params' => array(					// Supported attributes
			'id' => '',
			'class' => 'scf-form',
			'name' => '',
			'action' => '',
			'method' => '',
			'autocomplete' => ''
		)
	),

	'scf-form-submit' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'submit',
			'id' => '',
			'class' => 'scf-form-submit',
			'name' => '',
			'value' => 'Submit'
		)
	),

	'scf-form-reset' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'reset',
			'id' => '',
			'class' => 'scf-form-reset',
			'name' => '',
			'value' => 'Reset'
		)
	),

	'scf-form-button' => array(
		'tag' => 'button',
		'enclosure' => true,
		'params' => array(
			'type' => 'button',
			'id' => '',
			'class' => 'scf-form-button',
			'name' => '',
			'value' => ''
		)
	),

	'scf-form-text' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'text',
			'id' => '',
			'class' => 'scf-form-text',
			'name' => 'scf-form-text',
			'value' => '',
			'size' => '',
			'maxlength' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-textarea' => array(
		'tag' => 'textarea',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-textarea',
			'name' => 'scf-form-textarea',
			'cols' => '',
			'rows' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-password' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'password',
			'id' => '',
			'class' => 'scf-form-password',
			'name' => 'scf-form-password',
			'value' => '',
			'size' => '',
			'maxlength' => '',
			'autocomplete' => '',
			'placeholder' => ''
		)
	),

	'scf-form-radio' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'radio',
			'id' => '',
			'class' => 'scf-form-radio',
			'name' => 'scf-form-radio',
			'value' => '',
			'checked' => ''
		)
	),

	'scf-form-checkbox' => array(
		'tag' => 'input',
		'enclosure' => false,
		'params' => array(
			'type' => 'checkbox',
			'id' => '',
			'class' => 'scf-form-checkbox',
			'name' => 'scf-form-checkbox',
			'value' => '',
			'checked' => ''
		)
	),

	'scf-form-select' => array(
		'tag' => 'select',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-select',
			'name' => 'scf-form-select',
			'multiple' => '',
			'size' => '',
			'autocomplete' => ''
		)
	),

	'scf-form-optgroup' => array(
		'tag' => 'optgroup',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-optgroup',
			'label' => ''
		)
	),

	'scf-form-option' => array(
		'tag' => 'option',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-option',
			'value' => '',
			'selected' => ''
		)
	),

	'scf-form-label' => array(
		'tag' => 'label',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-label',
			'for' => ''
		)
	),

	'scf-form-fieldset' => array(
		'tag' => 'fieldset',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-fieldset',
			'name' => ''
		)
	),

	'scf-form-legend' => array(
		'tag' => 'legend',
		'enclosure' => true,
		'params' => array(
			'id' => '',
			'class' => 'scf-form-legend'
		)
	),
);

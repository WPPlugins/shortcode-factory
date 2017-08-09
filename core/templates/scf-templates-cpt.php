<?php
/**
 * Shortcode Factory Templates Custom Post Type
 *
 * @since 2.5
 */

if ( ! function_exists('scf_register_templates_cpt') ) {
	/**
	 * Register templates custom post type
	 */
	function scf_register_templates_cpt() {
		$labels = array(
			'name'                => _x( SCF_FULLNAME . ' Templates', 'Post Type General Name', 'shortcode-factory' ),
			'singular_name'       => _x( SCF_FULLNAME . ' Template', 'Post Type Singular Name', 'shortcode-factory' ),
			'menu_name'           => __( SCF_FULLNAME . ' Templates', 'shortcode-factory' ),
			'all_items'           => __( 'Templates', 'shortcode-factory' ),
			'add_new_item'        => __( 'Add New Template', 'shortcode-factory' ),
			'add_new'             => __( 'Add New Template', 'shortcode-factory' ),
			'new_item'            => __( 'New Template', 'shortcode-factory' ),
			'edit_item'           => __( 'Edit Template', 'shortcode-factory' ),
			'update_item'         => __( 'Update Template', 'shortcode-factory' ),
			'view_item'           => __( 'View Template', 'shortcode-factory' ),
			'search_items'        => __( 'Search Templates', 'shortcode-factory' ),
			'not_found'           => __( 'Not found', 'shortcode-factory' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'shortcode-factory' ),
			'attributes'          => __( 'Template Attributes', 'shortcode-factory' ),
		);
		$args = array(
			'label'               => __( SCF_FULLNAME . ' Templates', 'shortcode-factory' ),
			'description'         => __( 'Defines a template entry.', 'shortcode-factory' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'author', 'revisions', 'page-attributes' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => 'shortcode-factory/core/options.php',
			//'menu_position'       => 99,
			'menu_icon'           => 'dashicons-media-document',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( 'scf-templates', $args );

	}
	add_action( 'init', 'scf_register_templates_cpt', 0 );

	// Add short code column to templates posts list
	function scf_templates_columns_head($defaults) {
		unset($defaults['date']);

		$defaults['short_code'] = __('Short Code');
		$defaults['date'] = __('Date');

		return $defaults;
	}
	function scf_templates_columns_content($column_name, $post_ID) {
		if ($column_name == 'short_code') {
			echo "<code>[scf-template id='{$post_ID}']</code>";
		}

		if($column_name == 'date') {
			echo get_the_date();
		}
	}
	add_filter('manage_scf-templates_posts_columns', 'scf_templates_columns_head', 10);
	add_action('manage_scf-templates_posts_custom_column', 'scf_templates_columns_content', 10, 2);
}
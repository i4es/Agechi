<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_theme_support' ) ) :
	function foundationpress_theme_support() {
		// Add language support
		load_theme_textdomain( 'foundationpress', get_template_directory() . '/languages' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Add menu support
		add_theme_support( 'menus' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
		add_theme_support( 'post-thumbnails' );

		// RSS thingy
		add_theme_support( 'automatic-feed-links' );

		// Add post formats support: http://codex.wordpress.org/Post_Formats
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

		// Additional theme support for woocommerce 3.0.+
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		add_theme_support( 'editor-styles' );

		add_editor_style( get_stylesheet_directory_uri() . '/dist/assets/css/editor.css' );

		// Add foundation.css as editor style https://codex.wordpress.org/Editor_Style
		// add_editor_style( 'dist/assets/css/' . foundationpress_asset_path( 'editor.css' ) );
	}

	add_action( 'after_setup_theme', 'foundationpress_theme_support' );
endif;

// OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// CUSTOM LOGO
add_theme_support( 'custom-logo', array(
	'height'      => '150',
	'flex-height' => true,
	'flex-width'  => true,
) );
function show_custom_logo( $size = 'medium' ) {
	if ( $custom_logo_id = get_theme_mod( 'custom_logo' ) ) {
		$attachment_array = wp_get_attachment_image_src( $custom_logo_id, $size );
		$logo_url         = $attachment_array[0];
	} else {
		$logo_url = get_stylesheet_directory_uri() . '/images/custom-logo.png';
	}
	$logo_image = '<img src="' . $logo_url . '" class="custom-logo" itemprop="siteLogo" alt="' . get_bloginfo( 'name' ) . '">';
	$html       = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="%2$s" itemscope>%3$s</a>', esc_url( home_url( '/' ) ), get_bloginfo( 'name' ), $logo_image );
	echo apply_filters( 'get_custom_logo', $html );
}

// CUSTOM POST TYPE JOBS
add_action('init', 'jobs_custom_init');
function jobs_custom_init(){
	register_post_type('jobs', array(
		'labels'             => array(
			'name'               => 'Jobs', // Основное название типа записи
			'singular_name'      => 'Job', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new job',
			'edit_item'          => 'Edit job',
			'new_item'           => 'New Job',
			'view_item'          => 'View job',
			'search_items'       => 'Search job',
			'not_found'          => 'Jobs now found',
			'not_found_in_trash' => 'No jobs in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Jobs',

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail'),
	) );
}
add_action('init', 'team_custom_init');
function team_custom_init(){
	register_post_type('team', array(
		'labels'             => array(
			'name'               => 'Team', // Основное название типа записи
			'singular_name'      => 'Team member', // отдельное название записи типа Book
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new member',
			'edit_item'          => 'Edit member',
			'new_item'           => 'New member',
			'view_item'          => 'View member',
			'search_items'       => 'Search job',
			'not_found'          => 'Members now found',
			'not_found_in_trash' => 'No members in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Team',

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','editor'),
	) );
}

// CUSTOM POST TYPE TAXONOMY
add_action( 'init', 'jobs_taxonomy' );
function jobs_taxonomy(){

	register_taxonomy( 'jobs_category', array('jobs'), [
		'label'                 => '',
		'labels'                => [
			'name'              => 'Jobs category',
			'singular_name'     => 'Category',
			'search_items'      => 'Search jobs category',
			'all_items'         => 'All categories',
			'view_item '        => 'View category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category Name',
			'menu_name'         => 'Category',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		'show_ui'								=> true,
		'show_admin_column'     => false,
		'show_in_naw_menu'			=> true,
	] );
}

add_action( 'init', 'team_taxonomy' );
function team_taxonomy(){

	register_taxonomy( 'team_category', array('team'), [
		'label'                 => '',
		'labels'                => [
			'name'              => 'Team category',
			'singular_name'     => 'Category',
			'search_items'      => 'Search team category',
			'all_items'         => 'All categories',
			'view_item '        => 'View category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category Name',
			'menu_name'         => 'Category',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		'show_ui'								=> true,
		'show_admin_column'     => false,
		'show_in_naw_menu'			=> true,
	] );
}

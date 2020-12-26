<?php

if ( ! function_exists( 'foundationpress_gutenberg_support' ) ) :
	function foundationpress_gutenberg_support() {

    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary Color', 'foundationpress' ),
            'slug' => 'primary',
            'color' => '#1779ba',
        ),
        array(
            'name' => __( 'Secondary Color', 'foundationpress' ),
            'slug' => 'secondary',
            'color' => '#767676',
        ),
        array(
            'name' => __( 'Success Color', 'foundationpress' ),
            'slug' => 'success',
            'color' => '#3adb76',
        ),
        array(
            'name' => __( 'Warning color', 'foundationpress' ),
            'slug' => 'warning',
            'color' => '#ffae00',
        ),
        array(
            'name' => __( 'Alert color', 'foundationpress' ),
            'slug' => 'alert',
            'color' => '#cc4b37',
        )
    ) );

	}

	add_action( 'after_setup_theme', 'foundationpress_gutenberg_support' );
endif;

if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}
function register_acf_block_types(){
	acf_register_block_type(array(
		'name'              => 'intro',
		'title'             => __('Intro'),
		'description'       => __('Custom intro block.'),
		'render_template'   => 'template-parts/blocks/section-intro.php',
		'category'          => 'formatting',
		'keywords'					=> array('acf', 'intro'),
	));

	acf_register_block_type(array(
		'name'              => 'about',
		'title'             => __('About'),
		'description'       => __('Custom about block.'),
		'render_template'   => 'template-parts/blocks/section-about.php',
		'category'          => 'formatting',
		'keywords'					=> array('acf', 'about'),
		'enqueue_style' => get_template_directory_uri() . '/dist/assets/css/app.css'
	));

	acf_register_block_type(array(
		'name'              => 'jobs',
		'title'             => __('Jobs'),
		'description'       => __('Custom jobs block.'),
		'render_template'   => 'template-parts/blocks/section-jobs.php',
		'category'          => 'formatting',
		'keywords'					=> array('acf', 'jobs'),
	));
}

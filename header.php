<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
<?php endif; ?>

<header class="ag-header">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">

			<div class="ag-header__inner">
				<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
					<div class="title-bar-left">
						<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					</div>
				</div>

				<div class="top-bar-left">
					<div class="ag-logo">
						<div class="ag-logo__circle"></div>
						<?php show_custom_logo(); ?>
					</div>
				</div>

				<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
					<div class="top-bar-right">
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</nav>

				<div class="site-in-touch">
					<a class="site-in-touch__link" href="#">Get in touch</a>
				</div>
			</div>

		</div>
	</div>
</header>

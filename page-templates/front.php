<?php
/*
Template Name: Front-page
*/
get_header(); ?>


	<main class="ag-main mainbag">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php get_template_part('template-parts/sections/section', 'jobs') ?>
				<?php get_template_part('template-parts/sections/section', 'team') ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="ag-popup-get-in-touch" style="display: none;" id="ag-get-in-touch">
			<div class="grid-container">

				<div class="ag-logo">
					<div class="ag-logo__circle"></div>
					<?php show_custom_logo(); ?>
				</div>

				<div class="ag-popup-get-in-touch__inner">
					<div class="grid-x grid-margin-x">

						<div class="cell small-12 medium-4 large-offset-2 large-4">
							<div class="ag-popup-get-in-touch-left-content">
								<?php if( get_field('contact_info_title', 'option') ): ?>
									<h2 class="ag-popup-get-in-touch-left-content__title"><?php the_field('contact_info_title', 'option'); ?></h2>
								<?php endif; ?>

								<?php if( get_field('contact_info_address', 'option') ): ?>
									<span class="ag-popup-get-in-touch-left-content__addr"><?php the_field('contact_info_address', 'option'); ?></span>
								<?php endif; ?>

								<?php if( get_field('contact_info_phone', 'option') ): ?>
									<a class="ag-popup-get-in-touch-left-content__phone" href="tel:<?php the_field('contact_info_phone',
										'option'); ?>"><?php the_field('contact_info_phone', 'option'); ?></a>
								<?php endif; ?>

								<?php if( get_field('contact_info_mail', 'option') ): ?>
									<a class="ag-popup-get-in-touch-left-content__mail" href="mailto:<?php the_field('contact_info_mail',
										'option'); ?>"><?php the_field('contact_info_mail',	'option'); ?></a>
								<?php endif; ?>

								<?php if( have_rows('add_contact_social', 'option') ): ?>
									<ul class="ag-popup-get-in-touch-left-content__social-list" class="ag-get-in-touch-social-list">
										<?php while( have_rows('add_contact_social', 'option') ): the_row(); ?>
											<li class="ag-get-in-touch-social-list__item">
												<a href="<?php the_sub_field('contact_social_link', 'option'); ?>"><?php the_sub_field('contact_social_icon', 'option');
													?></a>
											</li>
										<?php  endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>

						<div class="cell small-12 medium-6 large-6">
							<?php echo do_shortcode('[contact-form-7 id="128" title="Get in touch popup form"]'); ?>
						</div>
				</div>

				</div>
			</div>
			<img class="ag-popup-get-in-touch__img-red-circle-blur" src="<?php bloginfo('template_url'); ?>/src/assets/images/red-circle-blur.png" alt="Red circle blur">
			<img class="ag-popup-get-in-touch__img-yellow-circle-blur" src="<?php bloginfo('template_url'); ?>/src/assets/images/yellow-blur.png" alt="Yellow circle blur">
			<img class="ag-popup-get-in-touch__img-red-circle" src="<?php bloginfo('template_url'); ?>/src/assets/images/red-circle.png" alt="Red circle">
			<img class="ag-popup-get-in-touch__green" src="<?php bloginfo('template_url');
			?>/src/assets/images/popup_right-green.png" alt="Green">
			<img class="ag-popup-get-in-touch__green-blur" src="<?php bloginfo('template_url');
			?>/src/assets/images/popup_right_green_blur.png" alt="Green-blur">
		</div>
		<!--	/.ag-popup-get-in-touch	-->
	</main>

<?php get_footer();

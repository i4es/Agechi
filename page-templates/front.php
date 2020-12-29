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
		<div style="display: none;" id="ag-get-in-touch">

		</div>
	</main>

<?php get_footer();

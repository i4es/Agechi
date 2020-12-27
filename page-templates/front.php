<?php
/*
Template Name: Front-page
*/
get_header(); ?>


	<main class="ag-main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php get_template_part('template-parts/sections/section', 'jobs') ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>

<?php get_footer();

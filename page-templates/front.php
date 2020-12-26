<?php
/*
Template Name: Front-page
*/
get_header(); ?>


	<main class="ag-main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php get_template_part('template-parts/blocks/section', 'jobs') ?>
	</main>

<?php get_footer();

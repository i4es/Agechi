<?php

$className = 'ag-jobs';
if (!empty($block['className'])) {
	$className .= '' . $block['className'];
}

if (!empty($block['align'])) {
	$className	.=	' align' . $block['align'];
}

?>

<section class="<?php echo esc_attr($className); ?>">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<?php
			$args = array(
				'posts_per_page' => 5,
				'orderby' => 'comment_count',
				'post_type' => 'jobs'
			);

			$query = new WP_Query( $args );
			?>

			<?php if ( $query->have_posts() ) : ?>

			<div class="ag-jobs-list">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="ag-jobs-list__item">
				<h2><?php the_title(); ?></h2>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'No post match your criteria.' ); ?></p>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>

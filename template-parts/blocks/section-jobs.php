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
			<?php
			$args = array(
				'orderby' => 'comment_count',
				'post_type' => 'jobs'
			);

			$query = new WP_Query( $args );
			?>

			<?php if ( $query->have_posts() ) : ?>
			<div class="ag-jobs-list">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php
					$cur_terms = get_the_terms(get_the_id(), 'jobs_category');
					if(is_array($cur_terms)){
						foreach ($cur_terms as $cur_term){
							$tax_slug = $cur_term->slug;
							$tax_name = $cur_term->name;
						}
					}
					?>

					<div class="ag-jobs-list__item cell small-12 medium-4 large-4" id="post-<?php the_id();?>">
						<?php the_post_thumbnail();?>
						<span><?php echo $tax_name ?></span>
						<h4><?php the_title(); ?></h4>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php else : ?>
				<p><?php esc_html_e( 'No posts' ); ?></p>
			<?php endif; ?>
			</div>
	</div>
</section>

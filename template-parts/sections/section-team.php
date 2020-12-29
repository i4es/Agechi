<section class="ag-team-section mainview" data-section-name="Teams" vs-anchor="teams">
	<div class="grid-container">
		<h2 class="ag-team-section__title">Excellent teams</h2>

		<?php
		$args = array(
			'post_type' => 'team'
		);

		$query = new WP_Query( $args );
		?>

		<?php if ( $query->have_posts() ) : ?>
			<div class="ag-team-list">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
						$cur_terms = get_the_terms(get_the_id(), 'team_category');
						if(is_array($cur_terms)){
							foreach ($cur_terms as $cur_term){
							$tax_slug = $cur_term->slug;
							$tax_name = $cur_term->name;
						}
					}
			?>

				<div class="ag-team-list__item cell small-12.medium-4 large-4" id="post-<?php the_id();?>">
					<div class="ag-team-list__visible-content">
						<?php the_post_thumbnail();?>
						<span><?php echo $tax_name ?></span>
						<h4><?php the_title(); ?></h4>
					</div>

					<div class="ag-team-list__hidden-content ag-hidden">
						<?php the_content(); ?>

						<?php if( have_rows('social_list') ): ?>
							<ul class="ag-social-list">
								<?php while( have_rows('social_list') ): the_row(); ?>
									<li class="ag-social-list__item">
										<a href="<?php the_sub_field('add_social_link'); ?>"><?php the_sub_field('add_social_icon'); ?></a>
									</li>
								<?php  endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
		<!--	/.ag-team-list	-->

			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts' ); ?></p>
		<?php endif; ?>
	</div>
</section>

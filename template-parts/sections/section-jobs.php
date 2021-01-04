<section class="ag-jobs mainview" vs-anchor="jobs" data-section-name="Jobs">
	<div class="grid-container">
		<div class="cell small-12">
			<h2 class="ag-jobs__title">The best jobs</h2>
		</div>
	</div>
	<div class="grid-container">
			<?php
			$args = array(
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

					<div class="ag-jobs-list__item" id="post-<?php the_id();?> ">
						<?php the_post_thumbnail();?>
						<span><?php echo $tax_name ?></span>
						<h4><?php the_title(); ?></h4>

						<div class="ag-full-job-link">
							<a  data-fancybox data-src="#jobs-info-<?php the_id();?>" href="javascript:;">+</a>
						</div>

						<div class="ag-popup-jobs"  data-fancybox="gallery"  id="jobs-info-<?php the_id();?>" style="display:
						none;">
							<div class="grid-container">
								<div class="ag-logo">
									<div class="ag-logo__circle"></div>
									<?php show_custom_logo(); ?>
								</div>
								<div class="ag-jobs-full-info-item" id="post-<?php the_id();?>">
									<div class="grid-x grid-margin-x">
										<div class="cell small-12 medium-6 large-8">
											<?php
											$image = get_field('job_image');
											if( !empty( $image ) ): ?>
												<img class="ag-jobs-full-info-item__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php
												echo esc_attr
												($image['alt']); ?>" />
											<?php endif; ?>
										</div>

										<div class="cell small-12 medium-6 large-4">

											<span class="ag-jobs-full-info-item__taxname"><?php echo $tax_name ?></span>

											<h2 class="ag-jobs-full-info-item__title"><?php the_title(); ?></h2>

											<div class="ag-jobs-full-info-item__date">
												<div class="ag-jobs-full-info-item__date-start">
													<?php if( get_field('job_start_date') ): ?>
														<span>Start:</span>
														<p><?php the_field('job_start_date'); ?></p>
													<?php endif; ?>
												</div>

												<div class="ag-jobs-full-info-item__date-end">
													<?php if( get_field('job_complate_fate') ): ?>
														<span>Complate:</span>
														<p><?php the_field('job_complate_fate'); ?></p>
													<?php endif; ?>
												</div>
											</div>
											<!-- /.ag-jobs-full-info-item__date -->

											<div class="ag-jobs-full-info-item__location">
												<?php if( get_field('job_location') ): ?>
													<span>Location:</span>
													<p><?php the_field('job_location'); ?></p>
												<?php endif; ?>
											</div>
											<!-- /.ag-jobs-full-info-item__location -->

											<div class="ag-jobs-full-info-item__services">
												<?php if( get_field('job_services') ): ?>
													<span>Services:</span>
													<p><?php the_field('job_services'); ?></p>
												<?php endif; ?>
											</div>
											<!-- /.ag-jobs-full-info-item__services -->

											<div class="ag-jobs-full-info-item__description">
												<?php if( get_field('job_description') ): ?>
													<?php the_field('job_description'); ?>
												<?php endif; ?>
											</div>
											<!-- /.ag-jobs-full-info-item__services -->

										</div>
									</div>
									<!--	/.grid-container	-->
								</div>
								<!--	/.ag-jobs-full-info-list__item	-->
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php esc_html_e( 'No posts' ); ?></p>
				<?php endif; ?>
	</div>
</section>

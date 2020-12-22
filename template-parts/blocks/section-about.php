<?php

$className = 'ag-about';
if (!empty($block['className'])) {
	$className .= '' . $block['className'];
}

if (!empty($block['align'])) {
	$className	.=	' align' . $block['align'];
}

$aboutBlockTitle = get_field('about_block_title');
$aboutSectionTitle = get_field('about_section_title');
$aboutContent = get_field('about_content');
$aboutPartnerTitle = get_field('partner_title');
$solutionsTitle = get_field('solutions_title');

?>

<section class="<?php echo esc_attr($className); ?> mainview" vs-anchor="secondview">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-2 large-2">
				<div class="ag-about__title">
					<h3><?php echo $aboutBlockTitle ?></h3>
				</div>
			</div>

			<div class="cell small-12 medium-5 large-5">
				<div class="ag-about__content">
					<h2><?php echo $aboutSectionTitle ?></h2>

					<div><?php echo $aboutContent ?></div>

					<div class="ag-about__partners">
						<span><?php echo $aboutPartnerTitle ?></span>

						<?php if( have_rows('partners') ): ?>
							<ul>
								<?php while( have_rows('partners') ) : the_row(); ?>
									<?php $partnersIcon = get_sub_field('partners_icon'); ?>
									<li>
										<?php if ( !empty( $partnersIcon ) ): ?>
											<img src="<?php echo esc_url($partnersIcon['url']); ?>" alt="<?php echo esc_attr($partnersIcon['alt']); ?>" />
										<?php endif; ?>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>

					</div>
				</div>
			</div>

			<div class="cell small-12 medium-5 large-5">
				<div class="ag-about__solutions">
					<h3><?php echo $solutionsTitle ?></h3>

					<?php if( have_rows('add_solution') ): ?>
						<ul class="ag-about__solutions-list">
							<?php while( have_rows('add_solution') ) : the_row(); ?>
								<?php $solutionsDescription = get_sub_field('solution_description') ?>
								<li>

									<?php $solutionsIcon = get_sub_field('solution_icon');
									if ( !empty( $solutionsIcon ) ): ?>
										<img src="<?php echo esc_url($solutionsIcon['url']); ?>" alt="<?php echo esc_attr($solutionsIcon['alt']); ?>" />
									<?php endif; ?>

									<span><?php echo $solutionsDescription ?></span>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<img class="ag-about__img-red-circle-blur" src="<?php bloginfo('template_url'); ?>/src/assets/images/red-circle-blur.png" alt="Red circle blur">
	<img class="ag-about__img-yellow-circle-blur" src="<?php bloginfo('template_url'); ?>/src/assets/images/yellow-blur.png" alt="Yellow circle blur">
	<img class="ag-about__img-big-green" src="<?php bloginfo('template_url'); ?>/src/assets/images/big-green.png" alt="Big green">
	<img class="ag-about__img-small-green" src="<?php bloginfo('template_url'); ?>/src/assets/images/small-green.png" alt="Small green">
</section>

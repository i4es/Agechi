<?php

$className = 'ag-intro';
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
			<div class="ag-intro__content">
				<h1><?php the_field('intro_title'); ?></h1>
				<p><?php the_field('intro_subtitle'); ?></p>
			</div>
		</div>
	</div>
	<img class="ag-intro__img-pink" src="<?php bloginfo('template_url'); ?>/src/assets/images/pink.png" alt="Pink">
	<img class="ag-intro__img-orange" src="<?php bloginfo('template_url'); ?>/src/assets/images/orange.png" alt="Orange">
	<img class="ag-intro__img-red-circle" src="<?php bloginfo('template_url'); ?>/src/assets/images/red-circle.png" alt="Red circle">
	<img class="ag-intro__img-red-circle-blur" src="<?php bloginfo('template_url'); ?>/src/assets/images/red-circle-blur.png" alt="Red circle blur">
	<img class="ag-intro__img-yellow-circle-blur" src="<?php bloginfo('template_url'); ?>/src/assets/images/yellow-blur.png" alt="Yellow circle blur">
</section>

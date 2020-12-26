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

<section class="<?php echo esc_attr($className); ?>">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-2 large-2">

			</div>

			<div class="cell small-12 medium-5 large-5">

			</div>

			<div class="cell small-12 medium-5 large-5">

			</div>
</section>

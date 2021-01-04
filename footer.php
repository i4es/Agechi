<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="ag-footer">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-8 medium-6 large-6">
				<div class="ag-footer-contacts">
					<?php
					$footerEmail = get_field('footer_email','options');
					$footerCopy = get_field('footer_copy', 'options');
					?>

					<div class="ag-footer-contacts__form">
						<?php if( get_field('footer_email_icon', 'option') ): ?>
							<a href="mailto:<?php echo $footerEmail?>"><?php the_field('footer_email_icon', 'option'); ?></a>
						<?php endif; ?>

					</div>

					<div class="ag-footer-contacts__email">
						<span>Email:</span>
						<a href="mailto:<?php echo $footerEmail ?>"><?php echo $footerEmail ?></a>
					</div>
				</div>

				<div class="ag-footer__copy">
					<p><?php echo $footerCopy ?></p>
				</div>
			</div>

			<div class="cell small-4 medium-6 large-6">
				<div class="ag-section-counter">
					<img class="ag-section-counter__mouse" src="<?php bloginfo('template_url'); ?>/src/assets/images/mouse.png"
							 alt="Mouse">
					<div class="ag-section-counter__inner">
						<div class="ag-section-counter__number">
							01
						</div>
						<span></span>
						<h3 class="ag-section-counter__title"></h3>
					</div>
				</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

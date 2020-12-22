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
			<div class="cell small-12 medium-6 large-6">
				<div class="ag-footer-contacts">
					<?php
					$footerEmail = get_field('footer_email','options');
					$footerCopy = get_field('footer_copy', 'options');
					?>

					<div class="ag-footer-contacts__form">
						<a href="#"></a>
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
			<div class="cell small-12 medium-6 large-6">

			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

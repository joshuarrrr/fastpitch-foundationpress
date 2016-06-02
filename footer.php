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

		
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<div class="footer-widgets">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
				<div class="site-info">
					<span class="copyright">Copyright © 2016 Erica Westly</span> | 
					<span class="design-credit">Site design: Josh Romero</span>
				</div><!-- .site-info -->
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
		</section>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>

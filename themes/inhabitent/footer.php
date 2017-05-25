<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div id="footer-sidebar" class="secondary">
						<?php
						if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
						}
						?>
					</div>
					<div class="site-logo">
						<a href="<?php echo get_site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/inhabitent-logo-text.svg" alt="Inhabitent logo"></a>
					</div><!-- .site-info -->
				</div>
				<p class="footer-copyright">Copyright &copy; 2016 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

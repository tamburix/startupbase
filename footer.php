<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</div><!-- .wrap -->
	</div><!-- #layout -->
</div><!-- #wrapper -->
<div id="footer">
	<div class="wrap">

		<div id="facebook-like">
			<iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FStartupBase&amp;width=960&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" style="border:none; overflow:hidden; width:960px; height:258px;"><!-- fb --></iframe>
		</div>

		<div class="sections clearfix">
			<div class="sitemap section">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'box-content' ) ); ?>
			</div>
			<div class="social section">
				<a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to&amp;su=<?php wp_title(); ?>&amp;body=http%3A%2F%2Fwww.startupbase.rs&amp;ui=2&amp;tf=1&amp;shva=1" class="mail">Email</a>
				<a href="http://www.facebook.com/share.php?u=http%3A%2F%2Fwww.startupbase.rs" class="fb">Facebook</a>
				<a href="https://twitter.com/intent/tweet?text=Looks%20Better%20on%20Women%20-%20http%3A%2F%2Fwww.startupbase.rs" class="tw">Twitter</a>
			</div>
			<div class="about section">
				<h5><?php _e( 'O nama', 'twentytwelve' ); ?></h5>
				<div class="box-content">
					<p>
						<?php _e( 'Startupbase je baza startapa iz srbije, poslovi, konkursi za startap akceleratore', 'twentytwelve' ); ?>
					</p>
				</div>
			</div>
		</div>

	</div>
</div><!-- end #footer -->


<?php wp_footer(); ?>
</body>
</html>
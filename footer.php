<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * This theme was generated with Lubith - The Wordpress Theme Generator: http://www.lubith.com
 * It is based on Twenty Ten (Wordpress 3.x default theme).
 *
 */
?>
	<div class="main-content-end"></div>
	
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

			<div id="site-info">
				<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">
					Wordpress
				</a>
				 theme built with 
				<a href="http://www.lubith.com/" title="Wordpress Theme Generator" rel="generator">
					Lubith
				</a>
				
			</div><!-- #site-info -->
			
		</div><!-- #colophon -->
	</div><!-- #footer -->
	
	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>

<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * This theme was generated with Lubith - The Wordpress Theme Generator: http://www.lubith.com
 * It is based on Twenty Ten (Wordpress 3.x default theme).
 */

get_header(); ?>

	<div class="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
				<div class="entry-footer"></div>
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- .container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
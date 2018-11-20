<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * This theme was generated with Lubith - The Wordpress Theme Generator: http://www.lubith.com
 * It is based on Twenty Ten (Wordpress 3.x default theme).
 *
 */
?>

	<div class="container">

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
			
			<li id="search" class="widget-container widget_search">
				<h3 class="widget-title"><?php _e( 'Search', 'twentyten' ); ?></h3>
				<?php get_search_form(); ?>
			</li>
			<div class="widget-footer"></div>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>
			<div class="widget-footer"></div>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
			<div class="widget-footer"></div>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->
		
	</div><!-- .container -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
	
	<div class="container">

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->
		
	</div><!-- .container -->

<?php endif; ?>

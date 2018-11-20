<?php
/**
 * Template Name: Members only, no comments
 *
 */

get_header(); ?>

		<div class="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
					<?php if (is_user_logged_in()): ?>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					<?php else: ?>
						<p>You must be logged in to view this page.</p>
					<?php endif; ?>
					</div><!-- .entry-content -->
					<div class="entry-footer"></div>
				</div><!-- #post-## -->
				
				

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- .container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

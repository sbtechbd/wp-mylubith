<?php
/**
 * The template for displaying Category Archive pages.
 *
 * This theme was generated with Lubith - The Wordpress Theme Generator: http://www.lubith.com
 * It is based on Twenty Ten (Wordpress 3.x default theme).
 *
 */

get_header(); ?>

		<div class="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

			</div><!-- #content -->
		</div><!-- .container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

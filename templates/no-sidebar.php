<?php
/**
 Template Name: No Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UNKNWN
 */

 get_header(); ?>

 <div id="primary" class="content-area">
 	<main id="main" class="site-main">

 		<?php
 		while ( have_posts() ) : the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
	 			<?php
	 			the_content();

	 			wp_link_pages( array(
	 				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unknwn' ),
	 				'after'  => '</div>',
	 			) );
	 			?>
	 		</div><!-- .entry-content -->

	 		<?php if ( get_edit_post_link() ) : ?>
	 			<footer class="entry-footer">
	 				<?php
	 				edit_post_link(
	 					sprintf(
	 						wp_kses(
	 							/* translators: %s: Name of current post. Only visible to screen readers */
	 							__( 'Edit <span class="screen-reader-text">%s</span>', 'unknwn' ),
	 							array(
	 								'span' => array(
	 									'class' => array(),
	 								),
	 							)
	 						),
	 						get_the_title()
	 					),
	 					'<span class="edit-link">',
	 					'</span>'
	 				);
	 				?>
	 			</footer><!-- .entry-footer -->
 		<?php endif; ?>
	 	</article>

	 	<?php
 		// If comments are open or we have at least one comment, load up the comment template.
 		if ( comments_open() || get_comments_number() ) :
 		comments_template();
 		endif;

 		endwhile; // End of the loop.
 		?>

 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();

<?php
/**
 * The template for displaying articles in the loop with full content
 *
 * @package Tortuga
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			
			<?php tortuga_post_image_archives(); ?>
		
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			
			<?php tortuga_entry_meta(); ?>

		</header><!-- .entry-header -->

		<div class="entry-content clearfix">
			
			<?php the_content( esc_html__( 'Continue reading &raquo;', 'tortuga' ) ); ?>
		
		</div><!-- .entry-content -->


	</article>
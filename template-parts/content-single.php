<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humescores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php humescores_the_category_list(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo '<h4>' . CFS()->get( 'intro' ) . '</h4>';
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>


		<div class="entry-meta">
			<?php humescores_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php 
	if ( has_post_thumbnail(  ) ) : ?>
	<figure class="featured-image full-bleed">
		<?php the_post_thumbnail( 'humescores-full-bleed' ); ?>
	</figure>
	<?php 
	endif; ?>

	<section class="post-content">
		<div class="post-content__wrap">
			<div class="post-content__body">
				<div class="entry-content">
					<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'humescores' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'humescores' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php humescores_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div><!--post-content__body-->
		</div><!--post-content__wrap-->


		<?php 

			humescores_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->

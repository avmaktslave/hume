<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humescores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php 
	if ( has_post_thumbnail(  ) ) : ?>
	<figure class="featured-image full-bleed">
		<?php the_post_thumbnail( 'humescores-full-bleed' ); ?>
	</figure>
	<?php 
	endif; ?>

	<div class="entry-content post-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'humescores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content .post-content -->


</article><!-- #post-<?php the_ID(); ?> -->

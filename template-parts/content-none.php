<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humescores
 */

?>

<header class="page-header">
	<h1 class="page-title">
		<?php
		if ( is_404() ) {
			esc_html_e( 'Page not available', 'humescores' );
		} else if ( is_search() ) {
			/* translators: %s = search query */
			printf( esc_html__( 'Nothing found for &ldquo;%s&rdquo;', 'humescores' ), '<span>' . get_search_query() . '</span>');
		} else {
			esc_html_e( 'Nothing Found', 'humescores' );
		}
		?>
	</h1>
</header><!-- .page-header -->

<section id="primery" class="content-area <?php if ( is_404() ) { echo 'error-404'; } else { echo 'no-results'; } ?> font-found">
	<main id="main" class="site-main" role="main">
		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php
					printf(
						wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'humescores' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
				?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'humescores' ); ?></p>
				<?php
					get_search_form();

			else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'humescores' ); ?></p>
				<?php
					get_search_form();

			endif; ?>
		</div><!-- .page-content -->

		<?php 
		if ( is_404() || is_search() ) : ?>
			<h2 class="page-title secondary-title"><?php esc_html_e( 'Most recent post:', 'humescores' ); ?></h2>
			<?php 
			//Get the 6 latest posts
			$args = array(
				'posts_per_page' => 6
			);
			$latest_posts_query = new WP_Query( $args );
			//The loop
			if ( $latest_posts_query->have_posts() ) {
				while ( $latest_posts_query->have_posts() ) {
					$latest_posts_query->the_post();
					//Get the standart index page content
					get_template_part( 'template-parts/content', get_post_format() );
				}
			}
			wp_reset_postdata();
		endif;
		?>
	</main><!-- .site-main -->
</section><!-- .content-area -->

<?php 
get_sidebar();
get_footer();
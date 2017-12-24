<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humescores
 */

?>

	</div><!-- #content -->

	<?php
	if ( is_single() ) {
		get_sidebar( 'footer' ); 
	} ?>

	<footer id="colophon" class="site-footer">
		<nav class="social-menu">
			<ul class="menu">
				<li>
					<a href="https://twitter.com/4tharraofdagon">
						<?php echo humescores_get_svg( array( 'icon' => 'twitter' ) ); ?>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/leshic">
						<?php echo humescores_get_svg( array( 'icon' => 'facebook' ) ); ?>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/alexeykaydash/">
						<?php echo humescores_get_svg( array( 'icon' => 'instagram' ) ); ?>
					</a>
				</li>
				<li>
					<a href="https://github.com/avmaktslave">
						<?php echo humescores_get_svg( array( 'icon' => 'github' ) ); ?>
					</a>
				</li>
			</ul>
		</nav><!-- .social-menu -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'humescores' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'humescores' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'humescores' ), 'humescores', '<a href="https://twitter.com/4tharraofdagon">Leshic</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

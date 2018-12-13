<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<!-- <a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php //printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?> -->
	<!-- </a> -->
	<div class="bottom-info"><p>PHONE NUMBER (TEXT OR CALL): <a href="tel:250-287-6660">250-287-6660</a>
	<br>
EMAIL: <a href="mailto:alyssa_willis@hotmail.com" target="_top">ALYSSA_WILLIS@HOTMAIL.COM</a></p>
<br></p></div>
</div><!-- .site-info -->

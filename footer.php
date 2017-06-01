<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inde_2016
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="row">
            <div class="col-md-offset-4 col-md-8">
                <div class="site-info">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'inde2016' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'inde2016' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'inde2016' ), 'inde2016', '<a href="http://indeplatforma.org" rel="designer">hankey</a>' ); ?>
                </div><!-- .site-info -->
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

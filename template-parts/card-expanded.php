<?php
/**
 * Template part for displaying expanded cards on the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inde_2016
 */

?>

<div class="col-md-8">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="card-minimizer">
				<i class="fa fa-compress" aria-hidden="true"></i>
			</div>
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} 
				
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
		</header><!-- .entry-header -->

		<div class="card-content">
			<?php
				/*
				the_content( sprintf(
					translators: %s: Name of current post. 
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'inde2016' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
				*/
				the_content();
			?>
		</div><!-- .entry-content -->

		<footer>
			<?php
			if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php inde2016_front_page_card_meta(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif;
			?>
			<!--<?php inde2016_entry_footer(); ?>-->
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
	
</div>
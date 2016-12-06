<?php
/**
 * The front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inde_2016
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="section group latest-cards">
					
		<?php
			/* display the 3 latest posts */
			
			$args = array( 'posts_per_page' => 3);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :
				setup_postdata($post); 			
				get_template_part( 'template-parts/front-page-card');
			endforeach;
					
			wp_reset_postdata();
		?>

		</div>
		
		<div class="section group">
			<div class="col span_1_of_3">
				<?php dynamic_sidebar( 'fp-calendar-widgets' ); ?>
			</div>
			
			<div class="col span_2_of_3">
				<?php
					$deps   = array_merge( array( 'jquery' ), Tribe__Events__Template_Factory::get_vendor_scripts() );
					$path   = Tribe__Events__Template_Factory::getMinFile( tribe_events_resource_url( 'tribe-events.js' ), true );
					wp_enqueue_script( $path, $deps );
					
				?>
				
				<div id="tribe-events-pg-template">
					<?php tribe_events_before_html(); ?>
					<?php tribe_get_view(); ?>
					<?php tribe_events_after_html(); ?>
				</div> <!-- #tribe-events-pg-template -->
			</div>
		</div>
		
		<div class="section group">
			<div class="col span_2_of_3">
			<h3>NE OBLAST, TEMVEČ MOČ</h3>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ullamcorper elit quis tristique ultrices. Duis in cursus erat. Nam placerat blandit urna, sit amet feugiat sapien. Sed sed sagittis enim. Aliquam egestas lorem varius dictum ultrices. Sed ullamcorper sem a est fringilla condimentum. Nullam non consequat diam. Duis aliquet, augue nec iaculis mollis, nibh urna iaculis elit, non viverra lorem dui ut lacus. Aliquam erat volutpat. Vestibulum elementum maximus nibh ut bibendum. Nullam sodales justo nec ipsum congue tincidunt.

			Nunc bibendum laoreet bibendum. Fusce pretium, sapien eu sollicitudin volutpat, massa velit porttitor lorem, eu condimentum mauris libero in nulla. Ut lobortis tellus lacus, sed molestie mi euismod vel. Duis eu metus id ante commodo ultrices. Suspendisse potenti. Nunc eget ex et metus malesuada elementum. Aenean sit amet auctor nisl. Donec nec lectus tincidunt, pellentesque urna nec, consequat est. Phasellus at sagittis sapien. Nunc lobortis pharetra ex, iaculis vestibulum metus vehicula et. Praesent bibendum maximus justo, cursus gravida nulla luctus sit amet.
			</div>
			<div class="col span_1_of_3">
				<h3>O U.P.I.</h3>
				<ul>
					<li>PISMA</li>
					<li>IZJAVA ZA MEDIJE</li>
					<li>SS SOLIDARNA SREDA</li>
					<li>KAFETERIJA ANARHIJA</li>
					<li>CIKLUS PREDAVANJ</li>
					<li>KONTAKT</li>
				</ul>
			</div>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*
get_sidebar();
*/
get_footer();

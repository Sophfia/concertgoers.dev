<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Acme Themes
 * @subpackage AcmePhoto
 */
global $acmephoto_customizer_all_values;
?>

<div class="venueNav"><!--.displays the nav bar-->
	<?php get_header(); ?>
</div>

<header class="venue-main-header"><!--.displays the title/name of the venue post-->
	<div class="venue-container">
		<?php the_title( '<h1 class="venue-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="venueMap"><!--.Displays the google map of the venue-->
	<?php echo types_render_field("venue-map", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				//this method gets all the content of the venue post(this is what displays all the information for the post venue)
				get_template_part( 'template-parts/content-venue', 'single-venue' );

				the_post_navigation( array(
					'prev_text'                  => __( '<span class="nav-title prev">'.__('Previous','acmephoto').'</span>' ),
					'next_text'                  => __( '<span class="nav-title next">'.__('Next','acmephoto').'</span>' )
				) );

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar( 'left' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

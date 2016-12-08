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

<div class="venueNav">
<?php
get_header(); 
?>
</div>


<header class="venue-main-header">
	<div class="venue-container">
		<?php the_title( '<h1 class="venue-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="venueMap">
	<?php
	echo types_render_field("venue-map", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));
	?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content-venue', 'single-venue' );


				the_post_navigation( array(
					'prev_text'                  => __( '<span class="nav-title prev">'.__('Previous','acmephoto').'</span>' ),
					'next_text'                  => __( '<span class="nav-title next">'.__('Next','acmephoto').'</span>' )


				) );

				// $url = "http://maps.google.com/?q="+ types field="venue-street";
				// [googlemap width="400" height="300" ]
				// echo googlemap(array("argument1"=>"400","argument2"=>"300","argument3"=>"http://maps.google.com/?q=1050 Hill St, Los Angeles, CA 90015"));

				//echo googlemap($array = array('src' => , );'http://maps.google.com/?q=1050 Hill St, Los Angeles, CA 90015');
				//echo googlemap(array('src' => 'http://maps.google.com/?q=1050 Hill St, Los Angeles, CA 90015'));
				//googlemap("400","300","http://maps.google.com/?q=1050 Hill St, Los Angeles, CA 90015");
				//echo "[googlemap width="200" height="200" src= 'http://maps.google.com/?q=1050 Hill St, Los Angeles, CA 90015']";
				//echo googlemap();

			endwhile; // End of the loop.
			?>
			<div id="venue-content-area">
				<div class="venue_contact_info">
					<?php echo types_render_field("venue-street", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
					<?php echo types_render_field("venue-csz", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
					<br>
					<?php echo types_render_field("venue-pnum", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
				</div>
				<div class="venue_images">
					<?php echo types_render_field("venue-image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?> 
				</div>
				<div class="venue_description">
					<?php echo types_render_field("venue-description", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>

				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar( 'left' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Acme Themes
 * @subpackage AcmePhoto
 */
global $acmephoto_customizer_all_values;?>

<div class="venueNav"><!--.displays the nav bar-->
	<div class="banner-search"> <!--displays the search bar-->
         <?php get_search_form()?>
    </div>
	<?php get_header(); ?>
</div>

<header class="artist-main-header"><!--.displays the title/name of the artist post-->
	<div class="artist-container">
		<?php the_title( '<h1 class="artist-main-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

	<div id="primary" class="content-area" style="width: 100%">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
			//this method gets all the content of the artist post(this is what displays all the information for the post artist)
				get_template_part( 'template-parts/content-artist', 'single-artist' );

				the_post_navigation( array(
					'prev_text'                  => __( '<span class="nav-title prev">'.__('Previous','acmephoto').'</span>' ),
					'next_text'                  => __( '<span class="nav-title next">'.__('Next','acmephoto').'</span>' )
				) );

				/**
				 * acmephoto_related_posts hook
				 * @since AcmePhoto 1.0.0
				 *
				 * @hooked acmephoto_related_posts_below -  10
				 */
				do_action( 'acmephoto_related_posts' ,get_the_ID() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar( 'left' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

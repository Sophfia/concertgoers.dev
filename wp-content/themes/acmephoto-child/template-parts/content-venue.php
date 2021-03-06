<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Acme Themes
 * @subpackage AcmePhoto
 */
$no_image ='';
if( !has_post_thumbnail() ){
	$no_image = 'acme-no-image';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($no_image); ?>>
	<!--post thumbnal options-->
	<?php
	if( has_post_thumbnail() ){
		?>
		<div class="single-feat clearfix">
			<figure class="single-thumb single-thumb-full">
				<?php
				$thumbnail = 'full';
				the_post_thumbnail( $thumbnail );
				?>
			</figure>
			<div class="singe-content-wrapper">
				<div class="at-overlay">
					<div class="acme-col-2">
						<div class="entry-data">
							<?php if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php acmephoto_posted_on( 1, 1 ); ?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</div>
					</div>
					<div class="acme-col-2 float-right">
						<footer class="entry-footer">
							<?php acmephoto_entry_footer(1, 0, 1, 0); ?>
						</footer><!-- .entry-footer -->
					</div>
				</div>
			</div>
		</div><!-- .single-feat-->
	<?php
	}
	?>
	
	<?php
	if( !has_post_thumbnail() ){
		?>
		<div class="no-thumbnail">
			<div class="entry-data">
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php acmephoto_posted_on( 1, 1 ); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
		</div>
		<?php
	}
	?>
	<div class="entry-content">
		<?php the_content(); ?>
		<!-- the follwoing echo types_render_field(s) print the customfields that were created for the venue post-->
		<div id="venue-content-area">
			<div class="venue_content_col">
				<div class="venue_images">
					<!--.Displays images of the venue-->
					<?php echo types_render_field("venue-image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?> 
				</div>
				<div class="venue_contact_info">
					<!--Displays the street, city, state zipcode of the venue breakline phone number-->
					<ul>
						<li>
							<?php echo types_render_field("venue-street", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
							<?php echo types_render_field("venue-csz", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
						</li>
						<li>
							<?php echo types_render_field("venue-pnum", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
						</li>
					</ul>
				</div>
			</div>

			<div class="venue_description">
				<!--.Display description of the venue-->
				<?php echo types_render_field("venue-description", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));?>
			</div>
		</div><!--.entry venue area-->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'acmephoto' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php
	if( !has_post_thumbnail() ){
		?>
		<div class="no-thumbnail">
			<footer class="entry-footer">
				<?php acmephoto_entry_footer(1, 0, 1, 0); ?>
			</footer><!-- .entry-footer -->
		</div>
		<?php
	}
	?>
</article><!-- #post-## -->


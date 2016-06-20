<?php
/**
 *	The template for displaying the front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */


get_header();


if( get_option( 'show_on_front' ) == 'posts' ): ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<section id="blog">
					<?php do_action( 'mtl_above_content_after_header' ); ?>
					<?php
					if( have_posts() ):
						while( have_posts() ):
							the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					<?php do_action( 'mtl_after_content_above_footer' ); ?>
				</section><!--/#blog-->
			</div><!--/.col-sm-7-->
			<?php get_sidebar(); ?>
		</div><!--/.row-->
	</div><!--/.container-->

<?php
else:

	$sections_order_first_section = get_theme_mod( 'illdy_general_sections_order_first_section', 1 );
	$sections_order_second_section = get_theme_mod( 'illdy_general_sections_order_second_section', 2 );
	$sections_order_third_section = get_theme_mod( 'illdy_general_sections_order_third_section', 3 );
	$sections_order_fourth_section = get_theme_mod( 'illdy_general_sections_order_fourth_section', 4 );
	$sections_order_fifth_section = get_theme_mod( 'illdy_general_sections_order_fifth_section', 5 );
	$sections_order_sixth_section = get_theme_mod( 'illdy_general_sections_order_sixth_section', 6 );
	$sections_order_seventh_section = get_theme_mod( 'illdy_general_sections_order_seventh_section', 7 );
	$sections_order_eighth_section = get_theme_mod( 'illdy_general_sections_order_eighth_section', 8 );

	if( $sections_order_first_section ):
		illdy_sections_order( $sections_order_first_section );
	endif;

	if( $sections_order_second_section ):
		illdy_sections_order( $sections_order_second_section );
	endif;

	if( $sections_order_third_section ):
		illdy_sections_order( $sections_order_third_section );
	endif;

	if( $sections_order_fourth_section ):
		illdy_sections_order( $sections_order_fourth_section );
	endif;

	if( $sections_order_fifth_section ):
		illdy_sections_order( $sections_order_fifth_section );
	endif;

	if( $sections_order_sixth_section ):
		illdy_sections_order( $sections_order_sixth_section );
	endif;
	
	if( $sections_order_seventh_section ):
		illdy_sections_order( $sections_order_seventh_section );
	endif;

	if( $sections_order_eighth_section ):
		illdy_sections_order( $sections_order_eighth_section );
	endif;
endif;

get_footer(); ?>
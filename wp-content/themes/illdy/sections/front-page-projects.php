<?php
/**
 *	The template for displaying the projects section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$general_title = get_theme_mod( 'illdy_projects_general_title', esc_html__( 'Projects', 'illdy' ) );
$general_entry = get_theme_mod( 'illdy_projects_general_entry', esc_html__( 'You\'ll love our work. Check it out!', 'illdy' ) );
?>
<section id="projects" class="front-page-section" style="<?php if( !$general_title && !$general_entry ): echo 'padding-top: 0;'; endif; ?>">
	<?php if( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo illdy_sanitize_html( $general_title ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<p><?php echo illdy_sanitize_html( $general_entry ); ?></p>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container-fluid">
			<div class="row">
				<?php
				if( is_active_sidebar( 'front-page-projects-sidebar' ) ):
					dynamic_sidebar( 'front-page-projects-sidebar' );
				else:
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-3 col-xs-6 no-padding widget_illdy_project">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Project', 'title='. __( 'Project 1', 'illdy' ) .'&image='. esc_url( '/layout/images/front-page/front-page-project-1.jpg' ) .'&url='. esc_url( '#' ), $the_widget_args );
					the_widget( 'Illdy_Widget_Project', 'title='. __( 'Project 2', 'illdy' ) .'&image='. esc_url( '/layout/images/front-page/front-page-project-2.jpg' ) .'&url='. esc_url( '#' ), $the_widget_args );
					the_widget( 'Illdy_Widget_Project', 'title='. __( 'Project 3', 'illdy' ) .'&image='. esc_url( '/layout/images/front-page/front-page-project-3.jpg' ) .'&url='. esc_url( '#' ), $the_widget_args );
					the_widget( 'Illdy_Widget_Project', 'title='. __( 'Project 4', 'illdy' ) .'&image='. esc_url( '/layout/images/front-page/front-page-project-4.jpg' ) .'&url='. esc_url( '#' ), $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-fluid-->
	</div><!--/.section-content-->
</section><!--/#projects.front-page-section-->
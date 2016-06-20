<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
?>

<div id="getting_started" class="illdy-tab-pane active">

	<div class="illdy-tab-pane-center">

		<h1 class="illdy-welcome-title"><?php _e('Welcome to Illdy!', 'illdy'); ?> <?php if( !empty($illdy_lite['Version']) ): ?> <sup id="illdy-theme-version"><?php echo esc_attr( $illdy_lite['Version'] ); ?> </sup><?php endif; ?></h1>

		<p><?php esc_html_e( 'Our most popular free one page WordPress theme, Illdy!','illdy'); ?></p>
		<p><?php esc_html_e( 'We want to make sure you have the best experience using Illdy and that is why we gathered here all the necessary information for you. We hope you will enjoy using Illdy, as much as we enjoy creating great products.', 'illdy' ); ?>

	</div>

	<hr />

	<div class="illdy-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'illdy' ); ?></h1>

		<h4><?php esc_html_e( 'Customize everything in a single place.' ,'illdy' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'illdy' ); ?></p>
		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'illdy' ); ?></a></p>

	</div>

	<hr />

	<!--
	<div class="illdy-tab-pane-center">

		<h1><?php esc_html_e( 'FAQ', 'illdy' ); ?></h1>

	</div>

	<div class="illdy-tab-pane-half illdy-tab-pane-first-half">

		<h4><?php esc_html_e( 'Create a child theme', 'illdy' ); ?></h4>
		<p><?php esc_html_e( 'If you want to make changes to the theme\'s files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.', 'illdy' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( 'http://docs.machothemes.com/article/34-how-to-create-a-child-theme' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'illdy' ); ?></a></p>

		<hr />
		<?php /* ?>
		<h4><?php esc_html_e( 'Build a landing page with a drag-and-drop content builder', 'illdy' ); ?></h4>
		<p><?php esc_html_e( 'In the below documentation you will find an easy way to build a great looking landing page using a drag-and-drop content builder plugin.', 'illdy' ); ?></p>
		<p><a href="<?php echo esc_url( 'http://docs.themeisle.com/article/219-how-to-build-a-landing-page-with-a-drag-and-drop-content-builder' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'illdy' ); ?></a></p>

		<hr />
		<?php */ ?>

		<h4><?php esc_html_e( 'Translate illdy', 'illdy' ); ?></h4>
		<p><?php esc_html_e( 'In the below documentation you will find an easy way to translate illdy into your native language or any other language you need for you site.', 'illdy' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( 'http://docs.themeisle.com/article/80-how-to-translate-illdy' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'illdy' ); ?></a></p>

	</div>

	<div class="illdy-tab-pane-half">

		<h4><?php esc_html_e( 'Link Menu to sections', 'illdy' ); ?></h4>
		<p><?php esc_html_e( 'Linking the frontpage sections with the top menu is very simple, all you need to do is assign section anchors to the menu. In the below documentation you will find a nice tutorial about this.', 'illdy' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( 'http://docs.machothemes.com/article/30-faq-common-issues#linkmenu' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'illdy' ); ?></a></p>

		<hr />

		<h4><?php esc_html_e( 'Change the page template', 'illdy' ); ?></h4>
		<p><?php esc_html_e( 'illdy has three page templates available, two for the blog and one for full width pages. To make sure you take full advantage of those page templates, make sure you read the documentation.', 'illdy' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( 'http://docs.themeisle.com/article/32-how-to-change-the-page-template-in-wordpress' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'illdy' ); ?></a></p>


	</div>


	<div class="illdy-clear"></div>

	<hr />

	<div class="illdy-tab-pane-center">

		<h1><?php esc_html_e( 'View full documentation', 'illdy' ); ?></h1>
		<p><?php esc_html_e( 'Need more details? Please check our full documentation for detailed information on how to use illdy.', 'illdy' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( 'http://docs.machothemes.com/category/106-illdy' ); ?>" class="button button-primary"><?php esc_html_e( 'Read full documentation', 'illdy' ); ?></a></p>

	</div>

	<hr />
	<div class="illdy-clear"></div>
	-->

</div>

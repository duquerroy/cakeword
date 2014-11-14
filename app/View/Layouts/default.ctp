<?php
// define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( 'wordpress/wp-blog-header.php' );
// require_once('wordpress/wp-load.php');
get_header(); 
?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>


		</div><!-- #content -->
	</div><!-- #primary -->
	<?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
?>
<?php
/**
*This is  a slugged page template for the home page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<!-- added the site-content-wide class to expant to 100% and is in the styles.css -->
	<div id="primary" class="site-content,site-content-wide">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<!--ing a new template notitle-page.php to load content on page -->
				<?php get_template_part( 'notitle', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<!-- Commented out the sidebar -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
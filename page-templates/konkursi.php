<?php
/**
 * Template Name: Konkursi Template
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

<?php get_search_form(); ?>



	<div id="content">
		<?php twentytwelve_content_nav( 'nav-below' ); ?>
		<div id="jobs-list" role="main" class="clearfix">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'konkursi' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #jobs-list -->
		<?php twentytwelve_content_nav( 'nav-below' ); ?>
	</div><!-- #content -->

<?php get_footer(); ?>




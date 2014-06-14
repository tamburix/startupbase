<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>-->
	<div class="post">
		<div class="post-image">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<?php the_post_thumbnail( 'wpbs-featured' ); ?>
		</div>
		<div class="post-title indented">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-date">
				<span><?php the_date(); ?></span>
			</div>
		</div>
		<div class="box-content">
			<div class="indented">
				<p>
					<?php the_excerpt(); ?>
				</p>
			</div>
		</div>
	</div>


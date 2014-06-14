<?php
/**
 * The full width template for displaying content. Used for full width page.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<div id="investors" class="clearfix">
	
		<div class="investor">
			<div class="description">
				<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
				<span class="company">Lorem &amp; Co.</span>
				<span class="slogan">Futogue am Main</span>
			</div>
			<div class="lead">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div><!-- end .investor -->

	</div>
<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="sidebar" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>			
			<div class="widget">
				<div class="box-title">
					<h3>Wordpress plugin</h3>
				</div>
				<div class="box-content">
					<h4 class="plugin-title">Classic Plugin Title</h4>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
					</p>
				</div>
			</div>
			
			<div class="widget widget-categories">
				<div class="box-title">
					<h3>Categories</h3>
				</div>
				<div class="box-content">
					<ul>
						<?php wp_list_categories('show_count=1&title_li=&show_option_none='); ?>
					</ul>
				</div>
			</div>

		</div><!-- #sidebar -->
	<?php endif; ?>
				<div id="sidebar">
				

					<div id="search">
						<form action="/" method="get" >
							<input type="text" name="s" class="input-text" placeholder="Type in your search" value="<?php the_search_query(); ?>" />
							<a href="#" class="search"><img src="<?php bloginfo('template_directory');?>/img/search-icon.png" alt="" /></a>
							<div class="results">
								<?php //printf( __( 'Search returned: %s' ), '<span>' . get_search_query() . '</span>'); ?> <!--results -->
							</div>
						</form>
					</div><!-- end #search -->

					<!--<div id="search-filter">
						<h3>Refine search</h3>
						<div class="select-text">
							<span class="take-text"></span>
							<span class="drop-arrow"><img src="<?php bloginfo('template_directory');?>/img/select-arrow.png" alt="" /></span>
							<select class="input-select" name="filter-time" id="filter-time">
								<option value="1">Two days ago</option>
								<option value="2">A week ago</option>
								<option value="3">One month ago</option>
								<option value="4">Year ago</option>
							</select>
						</div>
						<div class="select-text">
							<span class="take-text"></span>
							<span class="drop-arrow"><img src="<?php bloginfo('template_directory');?>/img/select-arrow.png" alt="" /></span>
							<select class="input-select" name="filter-location" id="filter-location">
								<option value="1">Beograd</option>
								<option value="2">Novi Sad</option>
								<option value="3">Subotica</option>
							</select>
						</div>
						<div class="select-text">
							<span class="take-text"></span>
							<span class="drop-arrow"><img src="<?php bloginfo('template_directory');?>/img/select-arrow.png" alt="" /></span>
							<select class="input-select" name="filter-position" id="filter-position">
								<option value="1">Film Developer</option>
								<option value="2">Cuvar na pijaci</option>
								<option value="3">Profesionalni gurman</option>
							</select>
						</div>
					</div><!-- end #search-filter -->

					<div class="sponsors">
						<a href="#"><img src="<?php bloginfo('template_directory');?>/images/sponsor.jpg" alt="" /></a>
					</div>
				</div>
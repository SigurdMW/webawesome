<?php get_header(); ?>

				<div class="post-box" style="padding-top:1em;">
				<div class="row">
					<h1 class="headertext404">404</h1>
					<h1 class="headertextpnf">Page not found</h1>
					<div class="col-md-8 col-md-offset-2">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			
			<div class="row" style="margin-bottom:2em;">
				<div class="col-md-6 col-sm-6">
					<div class="wa-divider">	
						<span id="menu">Menu</span>
					</div>
					<nav class="main-nav" style="margin-bottom:2em;">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="wa-divider">	
						<span id="menu">Categories</span>
					</div>
					<div class="category-section">
								<?php //the_category_valid( ' ' ); ?>
								 <?php
									$args = array(
									'show_option_all'    => '',
									'orderby'            => 'name',
									'order'              => 'ASC',
									'style'              => '',
									'show_count'         => 0,
									'hide_empty'         => 1,
									'use_desc_for_title' => 1,
									'child_of'           => 0,
									'feed'               => '',
									'feed_type'          => '',
									'feed_image'         => '',
									'exclude'            => '',
									'exclude_tree'       => '',
									'include'            => '',
									'hierarchical'       => 1,
									'title_li'           => __( 'Categories' ),
									'show_option_none'   => __( 'No categories' ),
									'number'             => null,
									'echo'               => 1,
									'depth'              => 0,
									'current_category'   => 0,
									'pad_counts'         => 0,
									'taxonomy'           => 'category',
									'walker'             => null
									);
									wp_list_categories( $args );
								?>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="post-box">
						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					</div>
				</div>
			</div>
					
<?php get_footer(); ?>

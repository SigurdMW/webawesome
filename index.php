<?php get_header(); ?>
<?php 
$i = 1;
if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-8">
                <div class="frontpage-posts">
                    <div class="frontpage-single-post material-box">
                        <span class="post-category">Posted in <?php the_category_valid(); ?></span>
                        <h2 class="post-title"><?php the_title(); ?></h2>
                      
                        <div class="post-author">
                            <div class="css-table-cell">
                                <div class="post-author-image">
                                </div>
                            </div>
                            <div class="post-author-name">
                                <small>Posted <?php the_time('j F Y G:i'); ?> by</small><br>
                                <!--<a href="">--><?php the_author(); ?><!--</a>-->
                            </div>
                        </div>
                      
                       <?php the_content(); ?>
                        <!--<p><a href="
									<?php //the_permalink(); ?>">Read more>></a></p>-->
                    </div>
                </div><!--/frontpage-posts-->
                
           <?php 
            /*
            <!--  style sheet -->
            <h1>Heading 1</h1>
            <p>Dummy text for display.</p>
            <h2>Heading 2</h2>
            <p>Dummy text for display.</p>
            <h3>Heading 3</h3>
            <p>Dummy text for display.</p>
                <blockquote>
                    <p>Blockquote</p>
                </blockquote>
            <div class="link-link">Link link</div>
                <div class="visited-link">Visited link</div>
                <div class="hover-link">Hover link</div>
                <div class="active-link">Active link</div>
            <!-- /style sheet -->*/
            ?>
            </div>
            <div class="col-md-4">
                <!--<div class="material-box">
                    <h2>Categories</h2>
                    <ul>
                        <li>adas</li>
                    </ul>
                </div>-->
            </div>
        </div>
			


										<?php $i++; ?>
									<?php endwhile; ?>
									
					<?php else : ?>
						<p><?php _e( 'Touch luck! Nothing has been posted yet' ); ?></p>
					<?php endif; ?>
					
			
								<?php /*wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						
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
						
						<?php get_sidebar(); */?>
				
<?php get_footer(); ?>

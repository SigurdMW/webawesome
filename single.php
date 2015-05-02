<?php get_header(); ?>
<div class="row">
    <div class="col-md-8">
	<?php while ( have_posts() ) : the_post(); ?>
	    <div class="frontpage-posts">
            <div class="frontpage-single-post material-box">
                <span class="post-category">Posted in <?php the_category_valid(); ?></span>
                <h1 class="post-title"><?php the_title(); ?></h1>

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
        

				            
							<?php /*the_title(); ?>
                            <?php the_author(); ?>
						
							<?php the_content(); ?>
							
							<?php the_modified_date( 'j F Y G:i' );*/ ?>
							
				
		

		<?php/*
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();*/
			endif;
		?>

	<?php endwhile; // end of the loop. ?>
    </div><!--/col-md-8-->
</div><!--/row-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

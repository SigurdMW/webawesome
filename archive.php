<?php

get_header(); ?>
	
	<div class="row archive-page">	
	
		<div class="col-md-12">

			<?php if ( have_posts() ) : ?>

			<!--page title and desc-->
					<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					
				<h1 class="archive-title">Category: <span><?php single_cat_title(); ?></span></h1>
				<?php
					the_archive_description( '<p class="category-description">', '</p>' );
				?>
				

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="archive-page-a">
						<h2><?php the_title();?></h2>
					</a>
						
				<?php endwhile; ?>

			

			<?php else : ?>

				<p class="lead">There are no posts in this category.</p>

			<?php endif; ?>
		
		</div>
	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

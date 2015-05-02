<?php get_header(); ?>

			<div class="row">
				
				<div class="col-md-12">
					<header class="page-header">
						<h1 class="page-title text-center"><?php printf( __( 'Search Results for: %s', 'webawesome' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->
				</div>

				<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

							<div class="col-md-6 col-sm-6">
								<a href="<?php the_permalink(); ?>" class="post-box-a">
									<h2 class="postTitleArch"><?php the_title(); ?></h2>
								</a>
								<p>Written by: <?php the_author(); ?> | <?php the_time('j F Y G:i'); ?></p>
								<?php foreach((get_the_category()) as $category) {
									$cat = $category->cat_name;
									if(empty($cat) ){ } else { ?>
										<p>Category: <?php echo $cat; ?></p>
									<?php }} ?>
								<hr />
							</div>
					<?php $i++; ?>

				<?php endwhile; ?>

				<?php else : ?>
				
					<p class="lead text-center">Sorry, nothing matched your search criterea.</p>

				<?php endif; ?>
			
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

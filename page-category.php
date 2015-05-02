<?php
/*
Template Name: Category page
*/
?> 
<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	
	<?php the_title(); ?>
	<?php the_content(); ?>
	
<?php 
    /*$categories = get_categories();//wp_list_categories( $args ); 
	
	foreach( $categories as $category) { 
		$catCount = 0;
		foreach( get_the_category() as $post-category) { 
			$post-cat = $post-category->cat_name;
			
			if ($category == $post-cat) {
				echo '<h3>' . the_title() . '</h3>'
			}
			$catCount++;
		} 
	}*/
	
?>
				
<?php endwhile; ?>		
<?php else : ?>
	<p><?php _e( 'Touch luck! Nothing has been posted yet' ); ?></p>
<?php endif; ?>

<?php //wp_dropdown_categories(array('hide_empty' => 1)); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>

<div>
	<?php while(have_posts()) : the_post();?>

		<h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>

		<?php echo get_the_author_link(); ?>
		<?php the_content(); ?>

	<?php endwhile; ?>
</div>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
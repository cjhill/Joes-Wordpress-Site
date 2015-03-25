<?php get_header(); ?>

<div class="jumbotron">
	<h1>Blog List</h1>
</div>

<div id="blog-list">
	<?php while(have_posts()) : the_post()?>

		<h2 class="blog_entry_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
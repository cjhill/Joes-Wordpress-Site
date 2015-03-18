<?php get_header(); ?>
<section id="single-blog">

	<div class="container">
		<?php while(have_posts()) : the_post()?>
		<h2><?php the_title(); ?></h2>
		<span><?php the_time('F j, Y'); ?></span>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php comments_template('', true); ?>
	</div>
</section>
<?php get_footer(); ?>
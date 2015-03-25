<?php get_header(); ?>
<?php while(have_posts()) : the_post()?>
<div class="jumbotron" id="single-jumbotron">
	<div class="container">
		<div class="group">
	
		</div>
		
	</div>
	
</div>
<section id="single-blog">
	<div class="container">
		<h1 class="section_title"><?php the_title(); ?></h1>
		<br>
		<div class="blog_time"><?php the_time('F j, Y'); ?></div>
		<div class="section_paragraph"><?php the_content(); ?></div>
		<?php endwhile; ?>
		<?php comments_template(); ?>
	</div>
</section>
<?php get_footer(); ?>
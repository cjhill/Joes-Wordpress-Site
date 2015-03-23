<section id="blog">
	<div class="container">

		<!-- <h1>Recent Blogs</h1> -->
		
		<div class="row">
			
			<?php
			$args = array(
				'posts_per_page'   => 3,
				'orderby'          => 'post_date'
			);
			$recent_posts = get_posts($args);
			$count = 0;
			foreach ($recent_posts as $post)  :
				setup_postdata($post);
				$count++;
					echo '<div class="col-xs-12 col-md-4 all number' . $count . '">';
				?>
				
				<div class="group">
					<h1 class="blog_entry_title"><?php the_title(); ?></h1>
					<br>
					<div class="blog_time"><?php the_time('F j, Y'); ?></div>
					<span class="blog_excerpt"><?php the_excerpt(); ?></span>
		
					<a href="<?php the_permalink(); ?>" class="blog_entry_read_more">Read More</a>
				</div>
				
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
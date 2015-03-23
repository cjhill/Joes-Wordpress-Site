<section id="blog">
	
	<div class="row">
		
		<?php
		$args = array(
			'posts_per_page'   => 2,
			'orderby'          => 'post_date'
		);
		$recent_posts = get_posts($args);
		$count = 0;
		foreach ($recent_posts as $post)  :
			setup_postdata($post);
			$count++;
				echo '<div class="col-xs-12 col-md-6 all number' . $count . '">';
				?>
				<div class="container">
					<div class="group">
						<h1 class="blog_entry_title"><?php the_title(); ?></h1>
						<br>
						<span class="blog_excerpt"><?php the_excerpt(); ?></span>
						
						<br><br>
						<a href="<?php the_permalink(); ?>" class="blog_entry_read_more">Read More</a>
					</div>
				</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
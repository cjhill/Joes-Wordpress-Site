<section id="videos">
	
	<div class="container">

		<?php 

			$videoPage = new WP_Query('pagename=videos');

			if($videoPage->have_posts()) :
				while($videoPage->have_posts()) : $videoPage->the_post(); ?>
		
		<div class="row">
			
			<div class="col-sm-6 all one">
				
				<!-- <iframe class="youtube_video" src="https://www.youtube.com/embed/7hqASYKW29c?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe> -->

			</div>

			<div class="col-sm-6 col-md-offset-1 all two">

				<h1 class="section_title"><?php the_title(); ?></h1>
				<br><br>
				<div class="section_paragraph"><?php the_content(); ?></div>
				<br><br>
				<a href="https://www.youtube.com/channel/UCFput_SBm2dzbe_nwi1ZUvg/videos" class="more_videos_btn">More Videos</a>

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			</div>

		</div>

	</div>
	
	
</section>
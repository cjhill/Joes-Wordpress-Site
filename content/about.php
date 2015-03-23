<div class="box"></div>

<section id="about">
	
	<div class="container">

		<div class="row">

			<?php 

			$aboutPage = new WP_query('pagename=my-story');

			if($aboutPage->have_posts()) : 
				while($aboutPage->have_posts()) : $aboutPage->the_post(); ?>

			<div class="col-xs-offset-4 col-xs-4 col-md-offset-5 col-md-2 all two">
				
					<img src="<?php bloginfo('template_url') ?>/img/joe/joe-dim-square.JPG" alt="">	

			</div> 
			

			

		</div>

		<div class="row">

			<div class="all one">
				
				<h1 class="section_title"><?php the_title(); ?></h1>

				<div class="section_paragraph"><?php the_content(); ?></div>

			</div>	

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			

	

		</div>
		

	</div>
</section>
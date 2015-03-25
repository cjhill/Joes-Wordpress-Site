<div class="box"></div>

<section id="about">
	
	<div class="container">

		<div class="row">

			<?php 

			$aboutPage = new WP_query('pagename=my-story');

			if($aboutPage->have_posts()) : 
				while($aboutPage->have_posts()) : $aboutPage->the_post(); ?>

			
			

			<div class="col-sm-5  all one">
				
				<h1 class="section_title"><?php the_title(); ?></h1>

				<br>

				<div class="section_paragraph"><?php the_content(); ?></div>

				<br>

				<div id="contact-info">
					<ul>
						<li>419-566-0238</li>
						<li><a href="#">Email</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
					</ul>
				</div>

			</div>

			<div class="col-sm-6 col-sm-offset-1 all two">
				
					<img src="<?php bloginfo('template_url') ?>/img/joe/joe-dim.JPG" alt=""> 	

			</div> 	

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			

	


		</div>

	</div>
</section>
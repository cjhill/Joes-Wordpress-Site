<div class="box"></div>

<section id="about">
	
	<div class="container">

		<div class="row">

			<?php 

			$aboutPage = new WP_query('pagename=my-story');

			if($aboutPage->have_posts()) : 
				while($aboutPage->have_posts()) : $aboutPage->the_post(); ?>

			
			

			<div class="col-md-5  all one">
				
				<h1 class="section_title">Joe Bridenbaugh</h1>

				<br>

				<div class="section_paragraph"><?php the_content(); ?></div>

				<br>

				<div id="contact-info">
					<ul>
						<li><a href="tel:14195658431">4195658431</a></li>
						<li><a href="mailto:jbride@willard-oh.com">Email</a></li>
						<li><a href="https://www.facebook.com/joe.bridenbaugh.7">Facebook</a></li>
						
					</ul>
				</div>

			</div>

			<div class="col-md-6 col-md-offset-1 all two">
				
					<img src="<?php bloginfo('template_url') ?>/img/joe/joe-dim.png" alt=""> 	

			</div> 	

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			

	


		</div>

	</div>
</section>
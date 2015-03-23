<div class="box"></div>

<section id="about">
	
	<div class="container">

		<div class="row">

			<?php 

			$aboutPage = new WP_query('pagename=my-story');

			if($aboutPage->have_posts()) : 
				while($aboutPage->have_posts()) : $aboutPage->the_post(); ?>
			

			<div class="col-md-6 col-lg-5 all one">
				
				<h1 class="section_title"><?php the_title(); ?></h1>

				<br><br>

				<div class="section_paragraph"><?php the_content(); ?></div>

				<br><br>

				<ul class="hidden-sm">
					<li><i class="fa fa-facebook-official"></i> <a href="">Facebook</a></li>
					<li><i class="fa fa-envelope"></i> <a href="" title="">cjhill0216@gmail.com</a></li>
					<li><i class="fa fa-phone-square"></i> <a href="">419-566-0238</a></li>
				</ul>

			</div>	

			<div class="col-md-6 col-lg-6 col-lg-offset-1 all two">
				
					<img src="<?php bloginfo('template_url') ?>/img/joe/joe-dim.JPG" alt="">	

			</div> 

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			</div>

		</div>
		

	</div>
</section>
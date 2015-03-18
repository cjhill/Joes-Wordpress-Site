<section id="gallery">
	
		
		<?php 

	$images = get_field('images_field', 2);

	if( $images ): ?>
	    <div id="slider" class="flexslider">
	        <ul class="slides">
	            <?php foreach( $images as $image ): ?>
	                <li>
	                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                    <p><?php echo $image['caption']; ?></p>
	                </li>
	            <?php endforeach; ?>
	        </ul>
	    </div>
	<?php endif; ?>

	
	
</section>
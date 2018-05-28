<section class="sekcija4">

	<div class="konteineris4">

		<div class="sekcija4text clearfix">

			<div class="community">
				<a class="fotikas" href="#"><img alt="camera" src="<?php echo get_field('cs_community_logo')['url']; ?>"></a>



				<h2 class="sectionheading"><?php the_field('cs_community_heading'); ?></h2>

				<p>
					<?php the_field('cs_community_content'); ?>
				</p>
			</div>
			


			<?php 

			$images = get_field('cs_community_gallery');
			$size = 'large'; // (thumbnail, medium, large, full or custom size)

			if( $images ): ?>
			    	<div class="nuotraukos">
						<div class="owl-carousel owl-theme">
				        <?php foreach( $images as $image ): ?>
				        	
				            <div class="item">
				            	<a href="<?php echo $image['sizes']['carousel']; ?>">
				            		<img class="image" alt="bus" src="<?php echo $image['sizes']['carousel'];  ?>">
				            	</a>
				            </div>

				        <?php endforeach; ?>
				    	</div>
			    	</div>
			<?php endif; ?>




			<!-- <div class="nuotraukos">
				<div class="owl-carousel owl-theme">
					<div class="item"><a href="../images/masina.jpg"><img class="image" alt="bus" src="<?php  ?>"></a></div>
					<div class="item"><a href="../images/lapai.jpg"><img class="image" alt="leaves" src="assets/images/lapai.jpg"></a></div>
					<div class="item"><a href="../images/retroman.jpg"><img class="image" alt="retroman" src="assets/images/retroman.jpg"></a></div>
					<div class="item"><a href="../images/retrocars.jpg"><img class="image" alt="retrocars" src="assets/images/retrocars.jpg"></a></div>
				</div>
			</div> -->
			
		</div>

	</div>

</section>
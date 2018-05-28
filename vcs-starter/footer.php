<footer class="sekcija6">

	<div class="konteineris6 flex">

		<div class="sekcija6text">

				<ul class="list">
				

				<?php

				// check if the repeater field has rows of data
				if( have_rows('fs_footer_button_repeater') ):
				 	// loop through the rows of data
				    while ( have_rows('fs_footer_button_repeater') ) : the_row();
				        // display a sub field value
				        // the_sub_field('sub_field_name');
				        $link = get_sub_field('fs_button');
				        ?>
				        
							<li>
								<a href="<?php echo $link["url"] ?>"<?php if($link["target"] !=''){ echo ' target="'.$link['target'].'"';} ?>><?php echo $link["title"]; ?></a>
							</li>
						
				        <?php
				    endwhile;
				endif;
				?>

				</ul>
			<!-- <ul class="list"> -->

				<!-- <li><a href="#">Credits</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Our teams</a></li> -->

			</ul>

			<p>
			<?php the_field('fs_footer_content'); ?>
			</p>

		</div>

		<div>
			<a href="#"><img alt="camera" src="<?php echo get_field('fs_footer_logo')['url']; ?>"></a>
		</div>

	</div>

</footer>

<?php wp_footer(); ?>

<script>

	jQuery(document).ready(function(){
		jQuery('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        701:{
		            items:2
		        },
		    }
		});
	});

</script>
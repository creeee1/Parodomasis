<section id="photoapp" class="sekcija2 flex" style="background-image: url(<?php echo get_field('pa_background_image')["sizes"]["large"]; ?>)">

	<div class="konteineris">

		<div class="sekcija2text">

			<h2 class="sectionheading">
				<?php the_field('pa_photoapp_heading'); ?>
			</h2>

			<p>
			<?php the_field('pa_photoapp_content'); ?>
			</p>

			<!-- <a class="get" href="#">Get started</a> -->


			<?php

			// check if the repeater field has rows of data
			if( have_rows('pa_photoapp_button_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('pa_photoapp_button_repeater') ) : the_row();
			        // display a sub field value
			        // the_sub_field('sub_field_name');
			        $link = get_sub_field('pa_button');
			        ?>

			        <a class="<?php the_sub_field('pa_button_style'); ?>" 
			        	href="<?php echo $link["url"] ?>"
			        	<?php if($link["target"] !=''){ echo ' target="'.$link['target'].'"';} ?>><?php echo $link["title"]; ?>
			        </a>

			        <?php
			    endwhile;
			endif;
			?>

		</div>

	</div>

</section>
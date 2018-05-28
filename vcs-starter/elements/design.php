<section id="design" class="sekcija3" style="background-image: url(<?php echo get_field('ds_background_image')["sizes"]["large"]; ?>)">
	
	<div class="konteineris2 flex">
		
		<div class="sekcija3text">
			
			<h2 class="sectionheading"><?php the_field('ds_design_heading'); ?></h2>

			<p>
				<?php the_field('ds_design_content'); ?>
			</p>


			<?php

			// check if the repeater field has rows of data
			if( have_rows('ds_design_button_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('ds_design_button_repeater') ) : the_row();
			        // display a sub field value
			        // the_sub_field('sub_field_name');
			        $link = get_sub_field('ds_button');
			        ?>

			        <a class="<?php the_sub_field('ds_button_style'); ?>" 
			        	href="<?php echo $link["url"] ?>"
			        	<?php if($link["target"] !=''){ echo ' target="'.$link['target'].'"';} ?>><?php echo $link["title"]; ?>
			        </a>

			        <?php
			    endwhile;
			endif;
			?>

			<!-- turetu buti kazkoks scrolleris-->
		</div>

	</div>

</section>
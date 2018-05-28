<section id="download" class="sekcija5">

	<div class="konteineris5 flex">

		<div class="sekcija5text">

			<div class="download">

				<h2 class="sectionheading"><?php the_field('dsg_download_heading'); ?></h2>

				<p>
					<?php the_field('dsg_download_content'); ?>
				</p>

			</div>

			<div class="foo">


				<?php

				// check if the repeater field has rows of data
				if( have_rows('dsg_download_button_repeater') ):
				 	// loop through the rows of data
				    while ( have_rows('dsg_download_button_repeater') ) : the_row();
				        // display a sub field value
				        // the_sub_field('sub_field_name');
				        $link = get_sub_field('dsg_button');
				        ?>

				        <a class="store" 
				        href="<?php echo $link["url"]; ?>"<?php if($link["target"] !=''){ echo ' target="'.$link['target'].'"';} ?>>
				        	<span><?php echo $link["title"]; ?></span><i class="fab <?php the_sub_field('dsg_button_style'); ?>"></i></a>
				        <?php
				    endwhile;
				endif;
				?>

			</div>

		</div>

	</div>

</section>
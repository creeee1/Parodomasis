<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700&amp;subset=latin-ext" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
	<body>
		<section class="sekcija1 flex" style="background-image: url(<?php echo get_field('h_background_image')["sizes"]["large"]; ?>)">
			<nav class="navi">
			<?php
				$nav_args = [
			    'theme_location' => 'primary-navigation',
			    'container' => false,
			    'menu_class' => 'meniu',
			];
			?>
			

				

				<?php wp_nav_menu($nav_args); ?>
				<!-- <ul class="meniu"> -->
		
					<!-- <li class="mygtukas"><a href="#">home</a></li>
					<li class="mygtukas"><a href="#photoapp">photoapp</a></li>
					<li class="fotikas">
						<a class="fotikas-foto" href="../images/fotikas.png"></a>
					 </li>
					<li class="mygtukas"><a href="#design">design</a></li>
					<li class="mygtukas"><a href="#download">download</a></li> -->

				<!-- </ul> -->
			</nav>

			<div>
				<h1 class="life">
					<?php the_field('h_hero_heading'); ?>
				</h1>

				<p class="life2">
					<?php the_field('h_hero_subtitle') ?>
				</p>

				<?php

				// check if the repeater field has rows of data
				if( have_rows('h_hero_button_repeater') ):
				 	// loop through the rows of data
				    while ( have_rows('h_hero_button_repeater') ) : the_row();
				        // display a sub field value
				        // the_sub_field('sub_field_name');
				        $link = get_sub_field('h_button');
				        ?>

				        <a class="<?php the_sub_field('h_button_style'); ?>" 
				        	href="<?php echo $link["url"] ?>"
				        	<?php if($link["target"] !=''){ echo ' target="'.$link['target'].'"';} ?>><?php echo $link["title"]; ?>
				        </a>

				        <?php
				    endwhile;
				endif;
				?>

			</div>

				<ul class="ikoneles flex">

				<?php
				// check if the repeater field has rows of data
				if( have_rows('h_social_menu_repeater') ):
				 	// loop through the rows of data
				    while ( have_rows('h_social_menu_repeater') ) : the_row();
				        // display a sub field value
				        // the_sub_field('sub_field_name');
				        $link = get_sub_field('h_link');


				        ?>

					       <li> 
					       	<a href="<?php echo $link['url']; ?>" 
					       		<?php echo ($link['target'] ? 'target="'.$link['target'].'"' : ''); ?>>
					       		<img alt="<?php echo $link['title']; ?>" src="<?php echo get_sub_field('h_social_icon')['sizes']['thumbnail']; ?>">
					       	</a>
					       </li>

				        <?php
				    endwhile;
				endif;

?>

				</ul>

		</section>
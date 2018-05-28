<?php get_header(); ?>
<?php 
if ( have_posts()):
	while ( have_posts()):
		the_post(); 
?>

		<!-- banner Page
		    ==========================================-->

		<div id="page-banner" style="background-image: url(<?php
               the_post_thumbnail_url('large'); ?>);">
		  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
		    <div class="container">
		      <h1><?php the_title(); ?></h1>
		    </div>
		  </div>
		</div>

		<!--blog body-->

		<div id="Blog-post"> 
		  
		  <!-- banner Page
		    ==========================================
		  -->
		  <div class="container">
		    <div class="row wow fadeInUp"> 
		      <!--blog posts container-->
		      <div class="col-sm-12 single-post">
		        <article class="post"> 
		          
		          
		          
		          <?php the_content(); ?>

		        </article>
		        <div class="clearfix"></div>
		      </div>
		      <!--blog posts container-->
		      <div class="clearfix"></div>
		    </div>
		  </div>
		</div>
<?php	
	endwhile;//end while
endif;//end if
?>
<?php get_footer(); ?>




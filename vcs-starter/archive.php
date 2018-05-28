<?php get_header(); ?>
		<?php $category = get_queried_object(); ?>
		<div id="page-banner" style="background-image: url(<?php echo get_field('ci_image', $category)["sizes"]["large"]; ?>);">
		  <div class="content wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
		    <div class="container">
		      <h1><?php echo $category->name; ?></h1>
		    </div>
		  </div>
		</div>

		<!--blog body-->
		<div id="Blog-post">
		  <div class="container">
		    <div class="row"> 
		      <!--blog posts container-->
		      <div class="col-sm-12 single-post"> 

<?php 
if ( have_posts() ):
	while ( have_posts() ):
		the_post();

		// var_dump($post);
		?>
		
		        
		        <!--article-->
		        <article class="col-md-12 wow fadeInUp">
		          <header class="entry-header">
		           <span class="date-article">
		           	<i class="fa fa-calendar-o"></i> 
		           		<?php echo get_the_date('F j Y'); ?>
		           </span> 
		           <a href="<?php the_permalink(); ?>">
		           	<img src="<?php the_post_thumbnail_url('large'); ?>" class="img-responsive">
		           </a>
		            <span class="byline">
		            	<span class="author vcard">
		            			<a href="<?php echo get_author_posts_url($post->post_author); ?>">
		            				<i class="fa fa-user-o"></i> <?php echo get_the_author(); ?>
		            			</a> 
		            	</span>
		            </span> 
		            <a href="<?php the_permalink(); ?>">
		            	<h2><?php the_title(); ?></h2>
		            </a>
		          </header>
		          <p><?php the_excerpt(); ?></p>
		          <a class="btn  readmore-btn" href="<?php the_permalink(); ?>"><?php _e('READ MORE');?> </a> </article>
		        <!--/article--> 
		        </article>


<?php
	endwhile;
endif;
?>


		        <div class="clearfix"></div>
		        
		        <!--portfolio page nav-->
		        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">

		        	<?php $args = array(
						'prev_next'          => true,
						'prev_text'          => '<i class="fa fa-chevron-left"></i>',
						'next_text'          => '<i class="fa fa-chevron-right"></i>',
						'type'				 => 'list'
					); 

		        	echo paginate_links($args);


					?>

		          
		        </nav><!--/portfolio page nav-->
		      </div>
		      <!--blog posts container--> 
		      <div class="clearfix"></div>
		    </div>
		  </div>
		</div>



<?php get_footer(); ?>
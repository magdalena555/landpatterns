<?php

/*
	Template Name:home, No Sidebar
*/

get_header();  ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<section class="main-container">
    		<div class="bxslider-home">	
    		
    			<?php if( have_rows('home-slider') ): ?>

    			 	<!-- This makes a image variable -->
    			    <?php while ( have_rows('home-slider') ) : the_row();
    			 		$image = get_sub_field('home-image');
    			 	?>
    			 
    				 	 	<div class=" hero-gallery" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
    				 		
    				 	 		
    				 	 		<div class="home-slider-titles">
    				 	 			<h1><?php the_sub_field('home-title'); ?></h1>
    				 	 			<a class="button" href="#home-work">
										<p>
											<?php the_sub_field('home-button-text'); ?>
										</p>
    				 	 			</a>
    				 	 		
    				 	 		</div>
    				 	 						 	 		
    				 	 	</div>

    				 	 										 		

    			 	<?php endwhile; ?> 

    			<?php endif; ?>

    		</div>
    		<div class="arrows">
    			<p><span id="slider-prev"></span> <span id="slider-next"></span></p>
    		</div>

    	</section>
    	<section class="home-work" id="home-work">
    	
			<div class="home-work-intro intro">
				<h1><?php the_field('work-intro'); ?></h1>
				<p><?php the_field('work-intro-content'); ?></p>
			</div>

			<!-- start of work page container -->
			 <div class="work-container">
			 	<div class="body-wrapper">
			 		<div class="work-wrapper">
	 				     <?php 
	 				         $params = array(
	 				             'posts_per_page' => -1,
	 				             'post_type' => 'work', 
	 				             'orderby' => 'date'
	 				             );
	 				         // this passes the parameter
	 				         $onePageQuery = new WP_Query($params);
	 				         // This is a custom query loop
	 				         if($onePageQuery->have_posts()) while($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
	 				         
	 				             
	 				             <a href="<?php the_field('work-link'); ?>">
	 				                 
	 				                 <?php $image = get_field('work-featured-image'); ?>
	 			                     <div class="home-work-image" style="background-image: url('<?php echo $image['sizes'] ['work-thumb'] ; ?>');">

	 			                     </div>
	 			                     <p class=""><?php the_title(); ?></p>
	 				             </a>

	 				     <?php endwhile ?>
	 				     <?php wp_reset_postdata(); ?>

						<?php $image = get_field('featured-image'); ?>
						<?php $page_id = 13; ?>
						<a class="featured-link" href="<?php echo get_permalink( $page_id ); ?>">
							<div class="featured-image-home" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
								<p><?php the_field('featured-title'); ?></p>
							</div>
						</a>
						
			 		</div>
			 	</div>
			 </div>
			 <!-- end of work page container -->
    	</section>
		
    <?php endwhile; // end the loop?>


<?php get_footer(); ?>
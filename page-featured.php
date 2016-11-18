<?php

/*
	Template Name:featured, No Sidebar
*/

get_header();  ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    	<div class="feature">
    		<?php $image = get_field('featured-image'); ?>
    		<div class="hero-feature" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
    		</div>
    		<div class="feature-title intro">
    		    <div class="wrapper">
    		        <h1><?php the_field('featured-title'); ?></h1>
    		        <hr>
    		        <p><?php the_field('featured-date'); ?></p>
    		    </div>
    		</div>
			<div class="feature-main">
				<div class="featured-text">
					<div class="body-wrapper">
						<p><?php the_field('featured-text'); ?></p>
					</div>

				</div>
				<div class="body-wrapper">
					<div class="featured-images">
						<?php if( have_rows('featured-images') ): ?>

						    <!-- This makes a image variable -->
						    <?php while ( have_rows('featured-images') ) : the_row();
						        $image = get_sub_field('featured-image');
						    ?>
					
					            <div class="featured-image" style="background-image: url('<?php echo $image['sizes'] ['single-work'] ; ?>');">
					            </div>
						            
						    <?php endwhile; ?> 

						<?php endif; ?>
						<hr>
					</div>
				</div>
				
				<div class="sign-up">
					<p class="sign-up-title"><?php the_field('sign-up'); ?></p>
					<div class="sign-up-wrapper">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="share">
					<p><?php the_field('share'); ?>						
					</p>
					<div class="share-buttons">
						<?php echo do_shortcode('[ssba]'); ?>
					</div>
				</div>
			</div>
    		

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>
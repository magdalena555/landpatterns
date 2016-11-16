<?php

/*
	Template Name:careers, No Sidebar
*/

get_header();  ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php $image = get_field('careers-hero'); ?>
		<div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
		</div>
		<div class="work-single-title intro">
		    <div class="wrapper">
		        <h1 ><?php the_field('careers-title'); ?></h1>
		        <hr>
		        <?php the_field('careers-subtitle'); ?>
		    </div>
		</div>
		<section class="careers">

			<?php if( have_rows('positions') ): ?>
				<div class="body-wrapper">
				    <div class="careers-wrapper">
				        <?php while(the_repeater_field('positions')): ?>

						<div class="position-item">
				           <p class="text"><?php the_sub_field('position'); ?></p>
				           <a class="button" href="">
				           		<p>apply</p>
				           </a>
						</div>
				     
				           
				        <?php endwhile; ?> 
				    </div>
				</div>
			<?php endif; ?>

			<?php echo do_shortcode('[ssba]'); ?>
			
		</section>      

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>
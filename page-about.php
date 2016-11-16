<?php

/*
	Template Name:about, No Sidebar
*/

get_header();  ?>


	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php $image = get_field('about-hero'); ?>
		<div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
		</div>
		<section class="about">
			<div class="intro">
				<div class="body-wrapper">
					<h1><?php the_field('about-intro-title'); ?></h1>
					<hr>
					<p><?php the_field('about-intro-content'); ?></p>
				</div>

			</div>
			<div class="about-main">
				<div class="about-wrapper">
					<div class="about-content">
						<h2><?php the_field('about-title'); ?></h2>
						<hr>
						<p><?php the_field('about-content'); ?></p>
					</div>
					<div class="about-images">
						 <?php $image = get_field('about-image-one'); ?>
	                    <img width="360" src="<?php echo $image['sizes'] ['about'] ; ?>" alt="<?php echo $image['alt'] ?>" />
						 <?php $image = get_field('about-image-two'); ?>
	                    <img class="about-image-two" width="360"  src="<?php echo $image['sizes'] ['about'] ; ?>" alt="<?php echo $image['alt'] ?>" />
					</div>
				</div>
			</div>
			<div class="team">
				<div class="body-wrapper">
					<div class="team-content">
						<h2><?php the_field('team-title'); ?></h2>
						<hr>
						<p><?php the_field('team-content'); ?></p>
					</div>
					<?php $counter = 0; ?>
					<?php if( have_rows('team-images') ): ?>
					    <div class="team-images-container">
					        <?php while(the_repeater_field('team-images')): ?>
					        <?php $counter ++; ?>
							<section class="team-images" data-parent="counter-<?php echo $counter; ?>">
					            <?php $image = get_sub_field('image'); ?>
					            <div class="team-innerwrapper">
            	                    <img src="<?php echo $image['sizes'] ['team'] ; ?>" alt="<?php echo $image['alt'] ?>" />
            			            <p><?php the_sub_field('image-title'); ?></p>
					            </div>
					            <section class="team-description hide-on-desktop" data-child="counter-<?php echo $counter; ?>">
					                 <?php the_sub_field('team-description'); ?>
					            	</section>
								</section>
					        <?php endwhile; ?> 
						</div>

				        <?php $counter = 0; ?>
				        <?php while(the_repeater_field('team-images')): ?>
				        <?php $counter ++; ?>
						
						<div class="this_one hide-on-mobile">
							<section class="team-description" data-desktop-child="counter-<?php echo $counter; ?>">
				            <?php the_sub_field('team-description'); ?>
				       	</section>
						</div>
				       	

				        <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
				
		</section>      

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>
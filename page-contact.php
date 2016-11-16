<?php

/*
	Template Name:contact, No Sidebar
*/

get_header();  ?>



    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<section class="contact">
			<?php $image = get_field('contact-hero'); ?>
			<div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
			</div>
			<div class="work-single-title intro">
			    <div class="wrapper">
			        <h1 ><?php the_field('contact-title'); ?></h1>
			        <hr>
			        <?php the_field('contact-subtitle'); ?>
			    </div>
			</div>
			<div class="contact-form">
				<div class="body-wrapper">
					<div class="contact-form-wrapper">
						<?php the_content(); ?>
					</div>
				</div>
			</div>


		</section>      

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>
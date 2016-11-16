<?php

/*
	Template Name:blog, No Sidebar
*/

get_header();  ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<section class="blog">
			
		</section>      

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>
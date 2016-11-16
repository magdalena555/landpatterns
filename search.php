<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<div class="search">
			<?php $image = get_field('blog-single-hero', 'options'); ?>
		    <div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
		    </div>
		    <div class="intro">
		  		<h3>Search Results for: <?php echo get_search_query(); ?></h3>
		    </div>

				<?php get_template_part( 'loop', 'search' ); ?>

				<?php else : ?>

					<h2>Nothing Found</h2>
					<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
					<?php get_search_form(); ?>
		
		</div>
		

	<?php endif; ?>


<?php get_footer(); ?>

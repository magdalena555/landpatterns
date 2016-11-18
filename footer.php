<section class="get-started">
	<p><?php the_field('get-started', 'option' ); ?></p>
	<a href="<?php the_field('get-started-link', 'option'); ?>">
		<span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> 
	</a>
</section>
<footer>
	<div class="footer-container">
		<p><?php the_field('footer-content', 'option'); ?></p>
		<div class="social">
			<?php if( have_rows('social', 'option') ): ?>

				<?php while(the_repeater_field('social', 'option')): ?>

					<?php $image = get_sub_field('icon', 'option'); ?>
				    <a href="<?php get_sub_field('link', 'option'); ?>">
				    	<img src="<?php echo $image['sizes'] ['team'] ; ?>" alt="<?php echo $image['alt'] ?>" />
				    </a>
				  

			    <?php endwhile; ?> 

			<?php endif; ?>
		</div>

	</div>

</footer>


<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
	<?php $image = get_field('blog-hero', 'options'); ?>
	<div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
	</div>
	<div class="intro">
		<div class="body-wrapper">
			<h3>BLOG</h3>
			<hr>
			<div class="cat">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>
	<section class="blog-main">
		<?php get_template_part( 'loop', 'index' );	?>
	</section>

<?php get_footer(); ?>
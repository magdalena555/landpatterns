<?php get_header(); ?>

    <?php $image = get_field('blog-single-hero', 'options'); ?>
    <div class="category">
        <div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
        </div>
        <div class="intro">
            <h3>Category Archives: <?php single_cat_title(); ?></h3>
        </div>
        <div class="category-main">
            <?php
                $category_description = category_description();
                if ( ! empty( $category_description ) )
                    echo '' . $category_description . '';
               get_template_part( 'loop', 'category' );
            ?>
        </div>
   
    </div>



<?php get_footer(); ?>
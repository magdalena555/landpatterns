<?php get_header();  ?>

   

            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php $image = get_field('work-hero'); ?>
                <div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
                </div>

                <div class="work-single-title intro">
                    <div class="wrapper">
                        <h1 ><?php the_title(); ?></h1>
                        <hr>
                        <?php the_field('work-subtitle'); ?>
                    </div>
                </div>

                <div class="work-item-container">
                    <div class="body-wrapper">
                        <div class="work-item-wrapper">
                            <?php if( have_rows('work-item') ): ?>

                                <!-- This makes a image variable -->
                                <?php while ( have_rows('work-item') ) : the_row();
                                    $image = get_sub_field('work-item-image');
                                ?>
                                    <div class="work-item">
                                        <div class=" work-item-image" style="background-image: url('<?php echo $image['sizes'] ['single-work'] ; ?>');">
                                        </div>
                                        
                                        <div class="work-item-content">
                                            <h1><?php the_sub_field('work-item-title'); ?></h1>
                                            <hr>
                                            <p><?php the_sub_field('work-item-content'); ?></p>
                                        </div>
                                    </div>    

                                <?php endwhile; ?> 

                            <?php endif; ?>
                        </div>
                    </div>                                             
                </div>
                <div class="work-portfolio">
                    <div class="work-portfolio-wrapper">
                        <div class="bxslider-work"> 
                            <?php if( have_rows('work-gallery') ): ?>

                            <!-- This makes a image variable -->
                            <?php while ( have_rows('work-gallery') ) : the_row();
                                $image = get_sub_field('work-gallery-image');
                            ?>
                                <div class="portfolio-content">
                                    <div class=" work-portfolio-image" style="background-image: url('<?php echo $image['sizes'] ['work-gallery'] ; ?>');">
                                        
                                    </div>
                                    <div class="portfolio-text">
                                        <h1><?php the_sub_field('work-gallery-title'); ?></h1>
                                        <hr>
                                        <p><?php the_sub_field('work-gallery-description'); ?></p>
                                        
                                    </div>
                                </div>
 
                            <?php endwhile; ?> 

                            <?php endif; ?>
                            
                        </div>
                        <?php if( have_rows('work-gallery') ): ?>

                        <!-- This makes a image variable -->
                        <?php while ( have_rows('work-gallery') ) : the_row();
                        ?>
                                                                           
                        <?php endwhile; ?> 

                        <?php endif; ?>
                        
                        <div class="arrows-work">
                            <p><span id="slider-prev"></span> <span id="slider-next"></span></p>
                        </div>
                    </div>
                  
                  
                </div>
              <?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
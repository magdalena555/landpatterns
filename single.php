<?php get_header(); ?>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="single-blog">

                 <?php $image = get_field('blog-single-hero', 'options'); ?>
                 <div class="hero-small" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
                 </div>
                 <div class="intro">
                 </div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="blog-single-image" style="background-image: url('<?php the_post_thumbnail_url('blog-page'); ?>');">
                                                
                    </div> 
                    <div class="single-blog-main">
                          <h2 class="entry-title"><?php the_title(); ?></h2>

                          <div class="entry-meta">
                          <h5><?php the_date('F j Y'); ?></h5>
                         
                          </div><!-- .entry-meta -->

                          <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages(array(
                              'before' => '<div class="page-link"> Pages: ',
                              'after' => '</div>'
                            )); ?>
                          </div><!-- .entry-content -->

                          <div class="entry-utility">
                            <p>
                                <?php hackeryou_posted_in(); ?>
                            </p>
                            
                            <?php echo do_shortcode("[share]" ); ?> 
                          
                          </div><!-- .entry-utility -->
                        </div><!-- #post-## -->

                        <div id="nav-below" class="blog-navigation">
                            <?php previous_post_link('%link', '&larr; %title'); ?>
                            <?php next_post_link('%link', '%title &rarr;'); ?>
                        </div><!-- #nav-below -->

                    </div>
                     
                </div> <!-- /.content -->
       </section>

    <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
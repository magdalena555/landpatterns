<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="https://use.fontawesome.com/641d5efb29.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Roboto" rel="stylesheet">
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<header class="">

        <!-- header-wrapper -->
        <div class="header-wrapper">

                <!-- menu container -->
            <div id="menu-container">
            
                <?php $image = get_field('logo', 'option'); ?>
                <?php $page_id = 11; ?>
                <div class="logo-desktop">
                    <a href="<?php echo get_permalink( $page_id ); ?>"> 
                        <img width="200" src="<?php echo $image ['sizes']['logo'] ?>"> 
                    </a>
                </div>
                
                <!-- left nav -->
                <nav class="desktop-nav ">
                    
                    <?php wp_nav_menu( array(
                      'container' => false,
                      'theme_location' => 'primary'
                    )); ?>

                </nav>
                <nav class="mobile ">
                    <?php wp_nav_menu( array(
                      'container' => false,
                      'theme_location' => 'mobile'
                    )); ?>
                   
                </nav>
             
                
                <!-- hamburger menu -->
                <a href="#" class="mobileNavIcon">
                    <img src="<?php bloginfo("template_url")?>/images/hamburger.png">
                </a>
         <!--        <a href="#" class="mobileNavIcon"><i class="fa fa-bars"></i>
                </a> -->
            </div>   
            
        </div> <!-- header wrapper -->
</header><!--/.header-->


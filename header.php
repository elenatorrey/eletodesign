<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="utf-8">
   <title>eletodesign</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
   <?php wp_head(); ?>
   <?php get_theme_mod( 'wpeleto_logo' )?>

 </head>
 <body>
   <div class="container">
      <nav class="navbar fixed-nav-bar navbar-inverse">
       <div class="navbar-inner"> 
       <div class="navbar-header" >
       <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="nav-logo navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img class="wpeleto_logo" src="<?php echo get_theme_mod( 'wpeleto_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
      </a>
      <div class="primary-menu nav-collapse collapse" id="myNavbar">

            <?php
              wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => '',
               'container_class'   => '',
               'container_id'      => 'menu-top-menu',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               'walker'            => new WP_Bootstrap_Navwalker()
            ));
            ?>
            </div><!--nav-collapse-->
	</div><!--navbar-header-->
      </div><!--navbar-inner-->
    </nav>
  </div><!--container-->

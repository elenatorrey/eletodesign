<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="utf-8">
   <title>eletodesign</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
   <script src="wp-content/themes/wpeleto/bootstrap/js/bootstrap.js"></script>

   <?php wp_head(); ?>
   <?php get_theme_mod( 'wpeleto_logo' )?>
     <!-- <div class="page-header"> -->
     <style>
         .showcase{
           background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
         }
       </style>
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
        <ul id="menu-top-menu" class="navbar-nav nav navbar-right">
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#who" class="menu-image-title-after"><span class="menu-image-title">Lobby</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#what" class="menu-image-title-after"><span class="menu-image-title">Services</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#work" class="menu-image-title-after"><span class="menu-image-title">Portfolio</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#testimonials" class="menu-image-title-after"><span class="menu-image-title">Testimonials</span></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#contactme" class="menu-image-title-after"><span class="menu-image-title">Say Hello</span></a></li>
        </ul>
      </div><!--nav-collapse-->
</div><!--navbar-header-->
      </div><!--navbar-inner-->
    </nav>
  </div><!--container-->

 <div id="who" class="container front-who">
    <div class="who">
    <!--<img src="wp-content/themes/wpeleto/bootstrap/img/me.jpg" alt="eleto_face">-->
    <div  class=' front-tagline'><span class="who-title">WELCOME! </span><br/><hr><p>

<span class="front_who_first_par">Need to create a website from scratch? Or customize an existing template?<br>

<br></span>Eleto Design focuses on creating <span style="text-transform: uppercase; color:#f7882f;">impactful websites</span> that help you convert traffic. It’s one thing to get people to your website; it’s another thing to keep them interested and engaged once they get there.
<br> Eleto Design can <span style="text-transform: uppercase; color:#f7882f;">plan, design, build, and optimize</span> your website.

You’ve got the great idea, the innovative product, or portfolio, and we’ve got the coding skills to help you tell your story online. We can help you create an engaging online experience for your customers as they interact with your brand.
</p>

    </div><!--ol-lg-8 front-tagline-->
  </div> <!--who-->
  </div><!--front-who-->

  <div id="what" class='container front-what'>
    <div class='tagline-2'>
      <span class="what-title">SERVICES <br><hr></span><br><br>
      <br>
      <p> Our web development skills
      can help you create the website you always wanted. We are well versed in HTML, CSS, Javascript and PHP.
    After we create the bare-bones, we can craft the look and feel of the website with our graphic design skills.
  Lastly, we can help you reach new and existing customers with email marketing. </p>
  <form>
    <input id="services_more_btn" type="button" value="More" onclick="window.location.href='/services'" />
  </form>
    </div><!--tagline-2-->
    <br/>

    <div class="container what-services-list">
      <div class="row">
        <div class="col-md-4 grapfic"><img src="wp-content/themes/wpeleto/bootstrap/img/graphic.jpg" height="150" width ="150"><br/><br/>GRAPHIC DESIGN</div>
        <div class="col-md-4 web-dev"><img src="wp-content/themes/wpeleto/bootstrap/img/web_dev_icon.jpg" height="150" width ="150"><br/><br/>WEB DESIGN & DEVELOPMENT</div>
        <div class="col-md-4 emarketing"><img src="wp-content/themes/wpeleto/bootstrap/img/email_marketing.jpg" height="150" width ="150"><br/><br/>EMAIL MARKETING</div>
    </div>
  </div>
  </div><!--front-what-->

<div id="work" class='container front-work'>
  <div class='tagline-3'>
    <span class="work-title">OUR WORK <br><hr></span>

    <p>We've worked with clients whose website presence is crucial <br> for their business. Angel's Truck Stop, for example,
    relies on online <br>book sales for its revenue. We built the e-commerce system in order to allow customers to
  purchase directly from the website as well as on Amazon. With the analytics from the site, we were able to
remarket to website visitors through customized email marketing. We have also worked on a number of portfolio websites
for solopreneurs and freelancers.</p>
<form>
  <input id="services_more_btn" type="button" value="More" onclick="window.location.href='/portfolio'" />
</form>
  </div><!--tagline-3-->
  <br/>
  <div class="row portfolio">
    <div class="col-md-4"><a href="http://www.animatethis.tv" target="_blank"><img src="wp-content/themes/wpeleto/bootstrap/img/animatethis.png" width="300px"></a></div>
    <div class="col-md-4"><a href="http://www.angelstruckstop.com" target="_blank"><img src="wp-content/themes/wpeleto/bootstrap/img/angelstruckstop.png" width="300px"></a></div>
    <div class="col-md-4"><a href="http://www.cateyesdesign.com" target="_blank"><img src="wp-content/themes/wpeleto/bootstrap/img/cateyesdesign.png" width="300px"></a></div>
  </div>
</div><!--front-work-->


<div id="testimonials" class='container testimonials'>
    <div class='tagline-4'>
        <div><span style="font-style: italic; text-align: center;">“When I first made contact with Elena, I was taken with the ‘can-do’ attitude towards our entire project (it was a big one),
          and their willingness to meet our needs – both creative and budgetary! We had a fairly intense approval process on our end, but
          the Eleto always made working together easy; from new needs popping up, to last minute changes,
          the overall approach was hard-working but always positive. Even post-launch, the team has continued to be helpful and interactive,
           making it easy to solve any issues quickly and resolutely. Thank you, Eleto!”</span><br><br> <span style="float:right;">Sam T., CEO of AnimateThis</span></div> <br><br>
<div><span style="font-style: italic; text-align: center;">Elena maintains my website and was instrumental in designing a streamlined payment system for customers to purchase my book. She is efficient, thorough and timely. An excellent trait that she has is she asks questions to clarify and ensure that instructions are communicated properly. She is a pleasure to work with. I would recommend her without reservation.</span><br><br> <span style="float:right;">Angelica 'Angel' Pilato, Lt. Col. USAF (Ret.), Ph.D., Author</span></div>
    </div><!--tagline3-->
</div><!--testimonials-->

<div id="last_image" class='container lastimage'>
</div><!--lastimage-->

<div class="container front-contact-form" id="contactme">
  <div class="contact-title">Get In Touch<p><hr></p></div>
<?php echo do_shortcode( '[contact-form-7 id="57" title="Contact form 1"]' ); ?>
</div>
  
<?php get_footer(); ?>

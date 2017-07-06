<div class="footer-line"><hr></div>

      <footer>
        <div class="centered-footer">
        <nav class="navbar navbar-default">
          <div class="container">
               <!-- <ul class="nav navbar-nav navbar-left"> -->
                 <?php
                   wp_nav_menu( array(
                    'menu'              => 'footer',
                    'theme_location'    => 'footer',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'nav navbar-nav navbar-left',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                 ));
                 ?>
               </div>
             </nav>
        <p>&copy; <?php bloginfo('name');?> <?php echo Date('Y'); ?></p>
      </div><!--centered-footer-->
      </footer>
      </div><!--page-header-->
  </body>
</html>

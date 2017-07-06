
  <?php get_header(); ?>


  <div class="main_content">
    <div class="container">
    <?php
    		if (have_posts()) :
    			while (have_posts()) : {
    					the_post();
    				        // the_title();
    					echo( '<br />' );
    					the_content();
    					echo( '<br />' );
    				}
    			endwhile;
    		endif;
    ?>
  </div>
  </div>
  </body>

<?php get_footer(); ?>

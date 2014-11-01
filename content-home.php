<?php
/**
 * @package makewp005
 */

?>

      <!--features-->
      <div class="feature-row">
        <div class="container row">
          <div class="list-wrap clear">
						<?php $my_posts = get_posts(array("post_type" => "conthome")); ?>
            <?php foreach($my_posts as $post): setup_postdata($post); ?> 
            <div class="col-4 col mobile-full feature-box">
              <h3 class="clear"><span class="icon-location"></span><a href=""><?php the_title(); ?></a></h3>
              <div class="feature-box"><p><?php the_content(); ?></p>
              </div>
            </div>
            <?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
            
          </div>
        </div>
      </div>
      <!--features END-->
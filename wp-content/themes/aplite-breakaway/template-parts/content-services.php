<section class="our_services tb-space">
    <div class="container">
        <div class="heading heading2 text-center animated fadeInRight">
           <h5><?php the_field('services_main_heading'); ?></h5>
           <h4 class="innerbanner2-w50"><?php the_field('services_sub_heading'); ?></h4>
        </div>
        <div class="sevices_multiple_box fadeInUp animated">
        <?php 
              $args = array(
                   'post_type' => 'service', 
                   'posts_per_page' =>-1, 
                   'orderby' => 'DESC'
              );
              $our_services = new WP_Query($args);
            if($our_services->have_posts()):
            ?>
          <ul class="row">
           <?php  while($our_services->have_posts()):$our_services->the_post(); ?>
            <li class="col-12 col-sm-6 col-md-6 col-lg-3 wow fadeInLeft boxdeatils animated bounceIn">
              <div class="inner">
                <div class="service_img">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
                <h5><?php the_title(); ?></h5>
                <p><?php the_excerpt(); ?></p>
              </div>  
            </li>

            <?php endwhile;
            wp_reset_postdata(); 
            ?>
          </ul>
          <?php endif; ?>
        </div>
    </div>
  </section>
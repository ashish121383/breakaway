<?php 
/*
Template Name: Services
*/
get_header(); 

get_template_part( 'template-parts/content', 'banner' );

if(have_posts()):
    while(have_posts()):the_post();
?>
<section class="our_services tb-space">
    <div class="container">
        <div class="heading heading2 text-center animated fadeInRight">
           <h5><?php the_title(); ?></h5>
           <h4 class="innerbanner2-w50"><?php the_sub_field('page_sub_field'); ?></h4>
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
    <section class="main_contact_section cu_space">
    <div class="container">
      <div class="cta-section cta2-section clearfix">
      <p><?php the_field('transport_description','option'); ?></p>
          <a class="secondbtn" href="<?php the_field('transport_page_link','option'); ?>"><?php the_field('transport_button_title','option'); ?></a>
        </div>
    </div>
  </section>



<?php 
endwhile;
endif;
get_footer(); ?>
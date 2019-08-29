<section class="second_banner">
      <div class="container">
         <div class="row">
           <div class="col-12 col-md-5">
             <div class="second-banner_heading innerbanner2">
               <h2><?php the_field('client_review_heading','option'); ?></h2>
                <p><?php the_field('client_description','option'); ?></p>
               <a class="firstbtn" href="<?php the_field('client_button_link','option'); ?>"><?php the_field('client_button_text','option'); ?></a>
             </div>
           </div>
           <div class="col-12 col-md-7">
             <div class="right_section">
               <div class="slider">
                <?php 
                    $args = array(
                        'post_type' =>'testimonial',
                        'posts_per_page' => -1, 
                        'order_by' => 'DESc'

                    );
                    $testimonial = new WP_Query($args);

                    if($testimonial->have_posts()):
                        while($testimonial->have_posts()):$testimonial->the_post();
                ?>

               <div class="single-item">
                     <div class="slider_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assests/img/quote.png" alt="">
                     </div>
                      <p><?php echo wp_trim_words( get_the_content(), 10, '...' );  ?></p>
                      <div class="mark">
                        <span class="rating-input">
                          <?php $counter = get_field('rating_counter');
                            $i=1;
                            while($i<=$counter){                            
                          ?>
                          <i class="fa fa-star" aria-hidden="true"></i>
                            <?php $i++; 
                        } ?>
                          
                        </span>
                        - <?php the_title(); ?>
                    </div>
               </div>         
                    <?php endwhile; 
                    wp_reset_postdata();
                        endif;
                    ?>
             </div>
             <div class="inner_section">
             <?php if(have_rows('package_repeater','option')): ?>
               <ul class="row">
                <?php while(have_rows('package_repeater','option')):the_row();
                    $package_image = get_sub_field('package_image','option');
                    $package_name = get_sub_field('package_name','option');
                
                ?>
                  <li class="col-md-4 wow fadeInUp">
                    <div class="innerList">
                        <img src="<?php echo $package_image['url']; ?>" alt="<?php echo $package_image['alt']; ?>">
                    </div>
                    <h5><?php echo $package_name; ?></h5>
                  </li>
                    <?php endwhile; ?>
                   
               </ul>
                <?php endif;?>
             </div>
             </div>
           </div>
         </div>
      </div>
  </section>
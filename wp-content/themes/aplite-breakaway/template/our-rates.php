<?php
/*
Template Name: Our Rates 
*/
get_header(); 


get_template_part( 'template-parts/content', 'banner' );

 if(have_posts()):
    while(have_posts()):the_post(); ?>
?>
 <section class="wrapper">
      <div class="contact_page">
        <div class="container">
        
            <div class="heading text-center">
              <h5><?php the_title();  ?></h5>
              <h4 class="innerbanner2-w50"><?php the_field('page_sub_heading'); ?></h4>
            </div>
           </div>
           <?php if(have_rows('rates_info')):?>
            <ul class="ourrates_inner">
            <?php while(have_rows('rates_info')):the_row();
                $custom_rate_heading = get_sub_field('custom_rate_heading');
                $rates_service_image = get_sub_field('rates_service_image');
                $rates_description = get_sub_field('rates_description');
                $rates_button_link = get_sub_field('rates_button_link');
                $rates_button_text = get_sub_field('rates_button_text');
               
            ?>
              <li class="ourrates_list">
                <div class="container">
                  <div class="ourrates_inner_L">
                    <img src="<?php echo $rates_service_image['url']; ?>" alt="<?php echo $rates_service_image['url']; ?>">
                  </div>
                  <div class="ourrates_inner_R review_main">
                    <h5><?php echo $custom_rate_heading; ?></h5>
                    <?php echo $rates_description;?>
                    <a class="firstbtn" href="<?php echo $rates_button_link; ?>"><?php echo $rates_button_text; ?></a>
                  </div>
                </div>
              </li>
 <?php endwhile; 
  ?>
              
            </ul>
        <?php endif; ?>
      </div>
  </section>

 <?php endwhile;  
 endif; 
 ?>
    <section class="main_contact_section cu_space">
    <div class="container">
    <?php get_template_part('template-parts/content', 'transport' );  ?>
    </div>
  </section>


<?php get_footer(); ?>
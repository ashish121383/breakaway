<section class="industries tb-space">
    <div class="container">
        <div class="heading heading2 text-center">
           <h5><?php the_field('industry_heading'); ?></h5>
           <h4><?php the_field('industries_subheading'); ?></h4>
        </div>
        <div class="industries_box boxdeatils">
            <?php
                $args = array(
                    'post_type'=> 'industry',
                    'posts_per_page' => -1,
                    'orderby' => 'DESC'
                ); 
                $industry = new WP_Query( $args );
                 if($industry->have_posts()):  
            ?>
             <ul class="row">
             <?php while($industry->have_posts()):$industry->the_post(); ?>
                 <li class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="media">
                        <img class="align-self-center mr-5" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0"><?php the_title(); ?></h5>
                          <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                 </li>
                 <?php endwhile;
                    wp_reset_postdata(); 
                 ?>
             </ul>
                 <?php endif; ?>
        </div>

        <?php get_template_part('template-parts/content', 'transport' );  ?>
        
    </div>
  </section>
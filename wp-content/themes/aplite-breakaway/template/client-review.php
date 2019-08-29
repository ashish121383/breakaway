<?php 
/* Template Name: Client Review */ 
get_header(); 

get_template_part('template-parts/content','testimonial');
?>
<section class="wrapper">
     <div class="client_review client_review2">
      <?php 
        $args = array(
               'post_type' =>'testimonial',
               'posts_per_page'=> -1,
               'oreder_by' =>'DESC'

        );
    $query = new WP_Query($args);
        if($query->have_posts()):
      ?>
        <ul>
            <?php            
            while($query->have_posts()):$query->the_post(); ?>
           <li class="cleint_code">
              <div class="container">
                   <div class="review_main clearfix">
                      <div class="review_f">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                         <span>Lukas</span>
                      </div>
                      <div class="review_s">
                        <h5 class="review_i"><?php the_title(); ?></h5>
                          <p><?php echo get_the_content();  ?></p>
                      </div>
                    </div>
              </div>
            </li>
        <?php endwhile;
            wp_reset_postdata(); 
        ?>
            
        </ul>
        <?php endif;  ?>
     </div>
  </section>

<?php 
 get_footer(); ?>
<?php 
    /*
    Template Name: Industries 
    */

    get_header(); 

    get_template_part( 'template-parts/content', 'banner' );

    if(have_posts()):
        while(have_posts()):the_post();
?>
 <section class="industries industries-page tb-space">
    <div class="container">
        <div class="heading heading2 text-center">
           <h5><?php the_title(); ?></h5>
           <h4><?php the_field('industries_sub_field'); ?></h4>
        </div>
        <div class="industries_box boxdeatils">
             <ul class="row">
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
    </div>
  </section>
  <section class="healtcare bg-color2">
    <div class="container">
      <div class="healtinner">
        <?php the_content();  ?>
        <?php if(have_rows('advertising_info')):?>
        <ul>
        <?php while(have_rows('advertising_info')):the_row();
            $advertising_image = get_sub_field('advertising_image');
            $advertising_link = get_sub_field('advertising_link');
            $advertising_link_title = get_sub_field('advertising_link_title');
            $advertising_content = get_sub_field('advertising_content');
        ?>
          <li>
            <span class="mr-3"><img src="<?php echo $advertising_image['url']; ?>" alt="<?php echo $advertising_image['alt']; ?>" /></span>
            <a href="<?php echo $advertising_link; ?>"><?php echo $advertising_link_title; ?></a> <?php echo $advertising_content; ?></li>
                 <?php endwhile; ?>
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
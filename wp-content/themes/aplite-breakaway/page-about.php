<?php 
get_header();

get_template_part( 'template-parts/content', 'banner' );
?>

<section class="tb-space about_second_section ">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
             <div class="heading3 ab-r underline">
               <h4><?php the_field('breakaway_heading'); ?></h4>
               <?php the_field('breakaway_description'); ?>
             </div>
            <div class="heading3 ab-l">
               <h4><?php the_field('tag_headline_heading'); ?></h4>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <div class="video-icon">
            <a href="https://www.youtube.com/watch?v=<?php the_field('custom_video_id');  ?>" class="video-view">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_third_section">
    <div class="container">
    <?php 
        if(have_rows('package_repeater')):
         ?>   
      <div class="row">
         <?php while(have_rows('package_repeater')): the_row(); 
             $package_name = get_sub_field('package_name');
             $package_image = get_sub_field('package_image');
             $package_counter = get_sub_field('package_counter');
             $package_description=  get_sub_field('package_description');
         ?>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
          <div class="about_icon">
             <div class="icon">
               <img src="<?php echo $package_image['url'];  ?>" alt="<?php echo $package_image['alt'];  ?>">
             </div>
             <p><?php echo $package_counter;  ?></p>
             <title><?php echo $package_name;  ?></title>
             <span><?php echo $package_description;  ?> </span>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    </div>
  </section>
  <?php 
    if(have_rows('career_repeater')):
  ?>
  <section class="tb-space twosection">
    <div class="container">
      <ul class="row">
        <?php while(have_rows('career_repeater')):the_row();
            $explore_career_name = get_sub_field('explore_career_name');
            $description = get_sub_field('description');
            $image = get_sub_field('image');
            $button_text = get_sub_field('button_text');
            $button_link = get_sub_field('button_link');
            
        ?>
        <li>
          <div class="Right_s">
            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
          </div>
          <div class="Left_s">
              <div class="heading3 underline">
                 <h4><?php echo $explore_career_name; ?></h4>
              </div>
                <p><?php echo $description; ?></p>
              <a class="firstbtn" href="<?php echo $button_link;?>"><?php echo $button_text;?></a>
          </div>
        </li>
    <?php endwhile; ?>
      </ul>
    </div>
  </section>
    <?php endif; ?>
  <section class="gray_section">
    <div class="container">
        <?php if(have_rows('service_repeater')): ?>
      <ul class="row">
          <?php while(have_rows('service_repeater')):the_row();
            $service_image = get_sub_field('services_image');
            $services_name = get_sub_field('services_name');
            $service_description = get_sub_field('service_description');
            
          ?>
        <li class="col-12 col-sm-12 col-md-4 col-lg-4">
         <div class="inner">
            <div class="icon">
            <img src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>">
          </div>
          <p><?php echo $services_name; ?></p>
          <span>
           <?php echo $service_description; ?></span>
         </div>
        </li>
    <?php endwhile; 
        endif; ?>
       
      </ul>
    </div>
  </section>
  
  <section class="cta2-section tb-space about-cta">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><?php the_field('transport_description','option'); ?></p>
         <a  href="<?php the_field('transport_page_link','option'); ?>" class="firstbtn"><?php the_field('transport_button_title','option'); ?></a></div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
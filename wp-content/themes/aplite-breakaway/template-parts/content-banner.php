<?php 
 $banner_image = get_field('banner_image');
 $banner_heading = get_field('banner_custom_heading'); 
 $banner_content_or_subfield = get_field('banner_content_or_subfield'); 
 $banner_icon = get_field('banner_icon');

if(is_front_page()){ ?>
  <section class="Mainbanner" style="background-image: url(<?php echo $banner_image['url']; ?>);">
   <div class="particles" id="particles"></div>
     <div class="container">
     <div class="innerbanner innerbanner2 animated wow flipInY">
         <h1><?php echo  $banner_heading;  ?></h1>
         <?php echo $banner_content_or_subfield; ?>
       </div>
     </div>
  </section>

<?php }elseif(is_page('about')){ ?>
<section class="about_banner cm-section" style="background-image: url(<?php echo $banner_image['url'];  ?>);">
     <div class="container">
          <div class="bg-heading  text-center">
             <h2><?php echo $banner_heading; ?></h2>
          </div>
       </div>
     </div>
  </section>
<?php }else{ ?>
    <section class="contact-us cm-section" style="background-image: url(<?php echo $banner_image['url']; ?>);">
    <div class="container">
      <div class="cu_inner">
          <a class="icon">
              <img src="<?php echo $banner_icon['url']; ?>">
          </a>
          <h3><?php echo $banner_heading; ?></h3>
          <p><?php echo $banner_content_or_subfield; ?></p>
      </div>
    </div>
  </section>

<?php 
} ?>
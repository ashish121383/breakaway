<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aplite-breakaway
 */

get_header();


get_template_part( 'template-parts/content', 'banner' );


if(is_page('contact-us')){
	  	  get_template_part( 'template-parts/content', 'contact' );	 
  }
  ?>

 <section class="main_contact_section cu_space">
    <div class="container">
      <div class="cta-section cta2-section clearfix">
      <p><?php the_field('transport_description','option'); ?></p>
      <a class="secondbtn" href="<?php the_field('transport_page_link','option'); ?>"><?php the_field('transport_button_title','option'); ?></a>
        </div>
    </div>
  </section>

<?php

get_footer();

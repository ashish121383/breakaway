<?php
/*
This page display front of page
*/
  get_header();
  
  // Make custom Banner section dynamically 
  
  get_template_part( 'template-parts/content', 'banner' );

  /*
      Our Services start
  */

    get_template_part( 'template-parts/content', 'services' ); 

  /*
      Shipment section details 
  */ 
   get_template_part('template-parts/content', 'shipment' ); 

  /*
    Industry Section 
  */
   get_template_part('template-parts/content', 'industry' ); 
   

  /*
      Testimonial section details 
  */ 

   get_template_part('template-parts/content','testimonial'); 


  /*
      Contact section details 
  */ 

   get_template_part( 'template-parts/content', 'contact' );

   /*
      Section end 
   */ 
 ?>
  
  



<?php get_footer();  ?>
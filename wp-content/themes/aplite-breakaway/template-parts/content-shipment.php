<?php 
    $shipment_banner = get_field('shipment_demo_image'); 
    $shipment_heading = get_field('shipment_heading'); 
    $shipment_description = get_field('shipment_description'); 
    $shipment_account_link = get_field('shipment_account_link'); 
    $shipment_account_label = get_field('shipment_account_label'); 
?>

<section class="third_banner" style="background-image: url(<?php echo $shipment_banner['url']; ?>);">
     <div class="container">
         <div class="innerbanner2 w50 bounce-1 bounce1">
                <h2><?php echo $shipment_heading; ?></h2>
                <p><?php echo $shipment_description; ?></p>
               <a href="<?php echo $shipment_account_link;  ?>" class="firstbtn"><?php echo $shipment_account_label; ?></a>
             </div>
     </div>
  </section>
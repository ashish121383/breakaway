<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aplite-breakaway
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="MainHeader">
	<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$custom_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		// echo $image[0];
	?>
    <div class="container">
      <div class="firstRow row">
        <div class="col-12 col-sm-6 col-md-6">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo $custom_logo[0]; ?>">
          </a>
          <a href="javascript:void(0);" class="mob-menu" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar" style="background: rgb(19, 32, 43);">
            <div class="spinner-master">
              <div class="spinner-spin">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-6 secondMl">
			<?php 
				wp_nav_menu( 
					 array( 
						'menu' => '', 
						'container' => false,
						'menu_id' => '',
						'menu_class'=>'',
						'theme_location'=>'header-top',
						'items_wrap' => '%3$s',
						'depth'           => 0,
						'walker'          => new Header_Walker
					)
				);
			?>
        </div>
      </div>
      <div class="secondRow">
        <div class="customheader-col">
				<?php 
					wp_nav_menu(
						array(
							'menu_class' => 'menu',
							'menu' => '',
							'container_class' => 'navbar-collapse main-nav collapse in',
							'container_id' => 'navbar', 	 		  
							'theme_location' => 'header-main'
						)
					);
				
				?>
        </div>
        <div class="customheader-col">
			<?php 
				wp_nav_menu( 
					 array( 
						'menu' => '', 
						'container' => false,
						'menu_id' => '',
						'menu_class'=>'',
						'theme_location'=>'header-bottom',
						'items_wrap' => '%3$s',
						'depth'           => 0,
						'walker'          => new Header_Walker
					)
				);
			?>
        </div>
      </div>
    </div>
  </header>

  

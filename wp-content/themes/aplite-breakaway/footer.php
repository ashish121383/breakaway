<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aplite-breakaway
 */

?>
<footer class="main_footer">
    <div class="top_section">
        <div class="container">
        <div class="row">
          <div class="col-md-4 footer_left">
            <?php dynamic_sidebar('footer-left'); ?>
          </div>
          <div class="col-md-8">
			<?php dynamic_sidebar('footer-right'); ?>
          </div>
        </div>
    </div>
    </div>
  </footer>
  <div class="coopright_section">
      <div class="container">
         <div class="row">
                   <ul class="col-md-6 left_c">
          <li><a href="#">© 2019 Breakaway Courier  </a></li>
          <li><a href="#">All Rights Reserved</a></li>
        </ul>
        <ul class="col-md-6 right_c">
          <li><a href="#">TERMS</a></li>
          <li><a href="#">FAQ’S</a></li>
          <li><a href="#">PRIVACY</a></li>
        </ul>
         </div>
      </div>
  </div>
  <?php wp_footer();  ?>
</body>
</html>

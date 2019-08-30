<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aplite-breakaway
 */

get_header();
?>
<section class="blog-section cm-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assests/img/Courier-Blog.jpg);">
<div class="container">
	<div class="cu_inner">
		<h3>Blog & News</h3>
		<p>Breakaway News and Managers Blog</p>
	</div>
</div>
</section>
<section class="blog_first_section tb-space">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <div class="post-list-items">
			<?php if(have_posts()): 
				while(have_posts()):the_post();
				$post_date = get_the_date( 'F j, Y' );
				?>
              <article class="post_data">
                <div class="post-main">
                  <a href="<?php the_permalink(); ?>" class="post-media">
                    <figure>
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="blog-image"  />
                    </figure>
                  </a>
                    <div class="post-contents">
                      <div class="header-post-meta">
                        <ul class="post-meta-list">
                          <li class="post-meta-item post-author-meta">
                            <span class="icon">
                              <img alt="author" src="<?php echo get_template_directory_uri(); ?>/assests/img/boy.png" height="40" width="40">
                            </span>
                            <span class="value"><?php echo ucfirst(get_the_author()); ?></span>
                          </li>
                          <li class="post-meta-item post-date">
                            <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <span class="value"><?php  echo $post_date; ?></span>
                          </li>
                        </ul>
                      </div>
                      <div class="post-details">               
                        <h4 class="post-title">
                          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h4>
                         <div class="post-desc">
                            <p><?php the_excerpt(); ?></p>
                          </div>     
                      </div>
                    </div>
                    <div class="footer-post-meta">
                     </div>
                </div>
              </article>
      <?php endwhile;   
    endif; ?>
        </div>
      </div>
      <div class="col-xs-12 col-md-4">
       <aside class="sidebar main-sidebar">
              <div class="widget widget_hoper_popular_posts">
                <h3 class="widget-title">Recent Blog & News</h3>
                <div class="popular-posts">
                  <?php 
                    $args = array(
                        'post_type' => 'post',
                        'numberposts' => 5,
                        'offset' => 0,
                        'category' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                    );
                    $custom_query = new WP_Query($args);
                    if($custom_query->have_posts()):
                      while($custom_query->have_posts()):$custom_query->the_post();
                      $post_date = get_the_date( 'F j, Y' );
                  ?>
                  <div class="post-item">
                    <a href="<?php the_permalink(); ?>" class="post-pic">
                      <img width="300" height="350" src="<?php echo get_the_post_thumbnail_url(); ?>" class="wp-post-image" alt="recentpost-image">
                    </a>
                    <div class="post-content">
                      <h4 class="title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                      </h4>                    
                      <ul class="post-meta-list">
                        <li class="post-meta-item post-comment-count">
                          <span class="icon"><i class="fa fa-calendar"></i></span>
                          <span class="value"><?php echo $post_date; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <?php endwhile; 
                    wp_reset_postdata();
                  endif;
                  ?>                                           
                </div>  
              </div>
        </aside>
      </div>
    </div>
</section>
<?php

get_footer();

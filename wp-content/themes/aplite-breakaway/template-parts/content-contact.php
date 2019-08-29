<section class="contact_us tb-space">
     <div class="container">
       <div class="heading heading2 text-center">
           <h5>contact us</h5>
           <h4>Get in touch with us</h4>
        </div>
        <div class="formsection">
        <div class="formsection">
          <div class="row">
            <div class="col-md-4">
              <div class="column">
              <?php if( have_rows('contact_repeater', 'option') ): ?>
                    <ul>
                    <?php while( have_rows('contact_repeater', 'option') ): the_row();
                        $contact_icon = get_sub_field('contact_icon');
                    ?>
                        <li>
                        <?php if( !empty($contact_icon) ): ?>
                        <div class="icon">
                         <img src="<?php echo $contact_icon['url']; ?>" alt="<?php echo $contact_icon['alt']; ?>" />
                        </div>
                        <?php endif; ?>
                        <div class="icon-text">
                            <h6><?php the_sub_field('contact_heading','option'); ?></h6>
                            <p><?php the_sub_field('contact_description','option'); ?></div>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
              </div>
            </div>
              <div class="col-md-8">
                       <?php echo do_shortcode('[contact-form-7 id="128" title="Contact form 1"]'); ?>
              </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
  </section>
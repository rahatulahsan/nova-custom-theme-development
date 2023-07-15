<!-- ======= Our Services Section ======= -->
<section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo _e('Our Services', 'nova'); ?></h2>

        </div>

        <div class="row gy-5">

          <?php 
          
            $args = array(
              'post_type' => 'service',
              'posts_per_page' => -1
            );

            $query = new WP_Query($args);
            while($query->have_posts()){
              $query->the_post(); ?>
              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="<?php echo get_field('icon_class_name'); ?>" style="color: <?php echo get_field('icon_color'); ?>;"></i></div>
                <div>
                  <h4 class="title"><a href="#" class="stretched-link"><?php the_title(); ?></a></h4>
                  <p class="description"><?php the_content(); ?></p>
                </div>
              </div>
              <!-- End Service Item -->
            <?php }

            wp_reset_postdata(  );
          
          ?>

        </div>

      </div>
    </section><!-- End Our Services Section -->
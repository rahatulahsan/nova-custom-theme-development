<?php 

/**
 * Template Name: Service 
 */

?>
<?php get_header(); ?>

  <main id="main">

    <?php get_template_part('/templates/breadcumb'); ?>

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



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials services-cards">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo _e('Testimonials', 'nova'); ?></h2>

        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


            <?php 
            
              $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => -1
              );

              $queries = new WP_Query($args);
              while($queries->have_posts()){
                $queries->the_post(); ?>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="stars">
                          <?php 
                          
                            $star_count = get_field('rating');
                            $i;
                            for ($i=0; $i < $star_count ; $i++ ){
                              echo '<i class="bi bi-star-fill"></i>';
                            }

                          ?>
                          
                        </div>
                        <p>
                          <?php the_content(); ?>
                        </p>
                        <div class="profile mt-auto">
                          <img src="<?php echo the_post_thumbnail_url('review-image'); ?>" class="testimonial-img" alt="<?php the_title(); ?>">
                          <h3><?php the_title(); ?></h3>
                          <h4><?php echo get_field('designation'); ?></h4>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->
              <?php }
            
                wp_reset_postdata(  );
            ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>
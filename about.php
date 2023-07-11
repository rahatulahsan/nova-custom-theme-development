<?php 

/**
 * Template Name: About
 */

?>
<?php get_header(); ?>

  <main id="main">

    <?php get_template_part('/templates/breadcumb'); ?>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <?php 
        
          $featured = get_field('featured_section');
          $featured_points = $featured['featured_points'];

        ?>

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
          <img src="<?php echo $featured['featured_image']['url']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3><?php echo $featured['featured_title']; ?></h3>
              <p>
              <?php echo $featured['featured_content']; ?>
              </p>
              <ul>
                <?php 
                
                  foreach($featured_points as $featured_point){ ?>
                    <li><i class="bi bi-check-circle-fill"></i> <?php echo $featured_point['featured_point']; ?></li>
                  <?php }
                
                ?>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo _e('Why Choose Us', 'nova'); ?></h2>
        </div>

        <?php 
        
          $why_choose_us = get_field('why_choose_us');
          $slider_contents_details = $why_choose_us['slider_contents'];
        ?>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg why-choose-us"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <?php 
                
                    foreach($slider_contents_details as $slider_details){?>
                      <div class="swiper-slide">
                        <div class="item">
                          <h3 class="mb-3"><?php echo $slider_details['slider_title']; ?></h3>
                          <h4 class="mb-3">O<?php echo $slider_details['slider_subtitle']; ?></h4>
                          <p><?php echo $slider_details['slider_content']; ?></p>
                        </div>
                      </div><!-- End slide item -->
                    <?php }

                ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <?php 
    
      $cta_section = get_field('call_to_action');

    ?>
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3><?php echo $cta_section['cta_title']; ?></h3>
            <p><?php echo $cta_section['cta_content']; ?></p>
            <a class="cta-btn" href="<?php echo $cta_section['cta_button_link']; ?>"><?php echo $cta_section['cta_button_name']; ?></a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

     <!-- ======= Team Section ======= -->
     <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo _e('Our Team', 'nova'); ?></h2>

        </div>

        <div class="row gy-4">

          <?php 
          
            $args = array(
              'post_type' => 'team',
              'posts_per_page' => -1
            );

            $query = new WP_Query($args);
            while($query->have_posts()){
              $query->the_post(); ?>
                  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                          
                          
                      <div class="member-img">
                        <img src="<?php echo the_post_thumbnail_url('team-member'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                        <div class="social">
                            <?php 
                            
                              $teams_social = get_field('social_icons_and_links'); 
                              foreach($teams_social as $social){?>
                                  <a href="<?php echo $social['social_url']; ?>"><i class="bi <?php echo $social['social_icons']; ?>"></i></a>
                              <?php }
                        
                            ?>
                          
                        </div>
                      </div>
                      <div class="member-info">
                        <h4><?php the_title(); ?></h4>
                        <span><?php echo get_field('designation'); ?></span>
                      </div>
                    </div>
                  </div><!-- End Team Member -->
            <?php }

            wp_reset_postdata(  );
          
          ?>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>
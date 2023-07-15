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

    <?php get_template_part('/templates/why-choose-us'); ?>

    <?php get_template_part('/templates/cta'); ?>

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
<?php 

/**
 * Template Name: Team
 */

?>
<?php get_header(); ?>

  <main id="main">

  <?php get_template_part('/templates/breadcumb'); ?>

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
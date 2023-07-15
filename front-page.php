<?php get_header(); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up"><?php echo get_field('hero_title'); ?></h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p><?php echo get_field('hero_content'); ?></p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="<?php echo get_field('button_link'); ?>" class="btn-get-started"><?php echo get_field('button_name'); ?></a>
            <a href="<?php echo get_field('video_link'); ?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span><?php echo get_field('video_text'); ?></span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <?php get_template_part('/templates/why-choose-us'); ?>

    <?php get_template_part('/templates/services-list'); ?>    

    <?php get_template_part('/templates/cta'); ?>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

    <?php 
      $home_featured = get_field('featured_section');
      $featured_lists = $home_featured['featured_lists'];
    ?>

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3><?php echo $home_featured['1st_featured_title']; ?></h3>

            <div class="row gy-4">

              <?php 
              
                foreach($featured_lists as $featured){?>
                  <div class="col-md-6">
                    <div class="icon-list d-flex">
                      <i class="<?php echo $featured['icon_class_name']; ?>" style="color: <?php echo $featured['icon_color']; ?>;"></i>
                      <span><?php echo $featured['feature_list']; ?></span>
                    </div>
                  </div><!-- End Icon List Item-->
                <?php }
              
              ?>

            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="<?php echo $home_featured['main_featured_image']; ?>" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4><?php echo $home_featured['2nd_featured_title']; ?></h4>
              <p><?php echo $home_featured['2nd_featured_content']; ?></p>
              <a href="<?php echo esc_url($home_featured['button_link']); ?>" class="btn-get-started"><?php echo $home_featured['button_name']; ?></a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php _e('Recent Blog Posts', 'nova'); ?></h2>

        </div>

        <div class="row gy-5">

            <?php 
            
                $args = array(
                  'posts_per_page' => 4,
                  'post_type' => 'post'
                );
                $query = new WP_Query($args);
                while($query->have_posts()){
                  $query->the_post(); ?>
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="post-box">
                        <div class="post-img"><img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>"></div>
                        <div class="meta">
                          <span class="post-date"><?php the_time( 'F j, Y' );?></span>
                          <span class="post-author"> / <?php the_author_posts_link(); ?></span>
                        </div>
                        <h3 class="post-title"><?php the_title(); ?></h3>
                        <p><?php 
            
                          if(has_excerpt()){
                              echo get_the_excerpt();
                          }else{
                              echo wp_trim_words(get_the_content(), 20);
                          }
                          
                        ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                <?php }
            
                  wp_reset_postdata();
            ?>


        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>
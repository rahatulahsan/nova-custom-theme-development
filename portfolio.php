<?php  

/**
 * Template Name: Portfolio
 */

?>

<?php get_header(); ?>

  <main id="main">

    <?php get_template_part('/templates/breadcumb'); ?>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <?php 
              $cats = get_terms('portfolio-cat');
              foreach($cats as $cat){?>
                <li data-filter=".filter-<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
              <?php }
             
            ?>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <?php 
            
            $args = array(
              'post_type' => 'portfolio',
              'posts_per_page' => -1
            );

            $query = new WP_Query($args);
            while($query->have_posts()){
              $query->the_post(); ?>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                  <a href="<?php echo the_post_thumbnail_url(); ?>" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="<?php the_permalink(); ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

            <?php }
            
            wp_reset_postdata();
            
            ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>
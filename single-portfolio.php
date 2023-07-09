<?php get_header(); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <?php get_template_part('/templates/breadcumb'); ?>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php 
                  $project_gallery = get_field('project_gallery');
                  foreach($project_gallery as $gallery){ ?>
                   <div class="swiper-slide">
                      <img src="<?php echo $gallery['url']; ?>" alt="<?php echo the_title(); ?>">
                    </div>
                  <?php }
                ?>

               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <?php 
                $categories = get_the_terms($post->ID, 'portfolio-cat');
                $cat_cal = count($categories);
              ?>
              <ul>
                <li><strong>Category</strong>
                    <?php  
                    
                    foreach($categories as $cat){
                      if($cat_cal <= 1 ){
                        echo $cat->name;
                      }else{
                        echo $cat->name . ',';
                      }
                      
                    }

                    ?>
                </li>
                <li><strong>Client</strong>: <?php echo esc_attr(get_field('client_name')); ?></li>
                <li><strong>Project date</strong>: <?php echo esc_attr(get_field('project_date')); ?></li>
                <li><strong>Project URL</strong>: <a href="<?php echo esc_url(get_field('project_url')); ?>"><?php echo esc_attr(get_field('project_url_name')); ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php the_title(); ?></h2>
              <p>
                <?php the_content(); ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>
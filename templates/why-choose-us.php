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
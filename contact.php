<?php 

/**
 * Template Name: Contact
 */

?>
<?php get_header(); ?>

  <main id="main">

  <?php get_template_part('/templates/breadcumb'); ?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p><?php echo get_field('location'); ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p><?php echo get_field('email'); ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p><?php echo get_field('phone_number'); ?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form action="#" method="post" role="form" class="php-email-form">
              <?php echo do_shortcode('[contact-form-7 id="174" title="Contact form 10"]'); ?>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>
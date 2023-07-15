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
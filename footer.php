 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">
    <div class="row gy-4">
      <?php 
      
        if(is_active_sidebar('footer-1')){
          dynamic_sidebar('footer-1');
        }
      
      ?>

      <?php 
      
        if(is_active_sidebar('footer-2')){
          dynamic_sidebar('footer-2');
        }
    
      ?>

      <?php 
      
        if(is_active_sidebar('footer-3')){
          dynamic_sidebar('footer-3');
        }
  
      ?>


      <?php 
      
        if(is_active_sidebar('footer-4')){
          dynamic_sidebar('footer-4');
        }

      ?>

    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">
    <div class="copyright">
      <?php the_field('footer_copyrights', 'option'); ?>
    </div>

  </div>
</div>
</footer><!-- End Footer --><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>


<?php wp_footer(); ?>

</body>

</html>
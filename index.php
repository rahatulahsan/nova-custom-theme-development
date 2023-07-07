<?php 

  $nova_layout_class = "col-lg-8";
  if(!is_active_sidebar('main-sidebar')){
    $nova_layout_class = "col-lg-12";
  }


?>
<?php get_header(); ?>

 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo get_theme_file_uri( '/assets/img/blog-header.jpg' ); ?>');">
        <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Blog</h2>
        <ol>
            <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
            <li>Blog</li>
        </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">

      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="<?php echo $nova_layout_class; ?>" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">

              <?php 
              
                while(have_posts()){
                  the_post(); 
                  
                  get_template_part('post-formats/content', get_post_format());

                }
              
              ?>

            </div><!-- End blog posts list -->
            
              <?php the_posts_pagination(); ?>

          </div>

              <?php 
              
                if(is_active_sidebar('main-sidebar')){
                  get_template_part('/templates/sidebar'); 
                }
              
              ?>

        </div>

      </div>

    </section><!-- End Blog Section -->

  </main><!-- End #main -->

 <?php get_footer(); ?>
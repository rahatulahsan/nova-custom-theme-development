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

        <h2>
            
        Posts Under:

        <?php 

            if(is_month()){
                $month =  get_query_var('monthnum');
                $month_name = DateTime::createFromFormat("!m", $month);
                echo $month_name->format('F');
            }else if(is_year()){
                echo get_query_var('year');
            }else if(is_day()){
                $post_day = get_query_var('day') . "/" . get_query_var('monthnum') . "/" . get_query_var('year');
                echo $post_day;
            }
        
        ?>
        </h2>

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
                  the_post(); ?>
                  
                  <div class="col-lg-6">
                        <article class="d-flex flex-column">

                            <div class="post-img">
                                <img src="<?php echo the_post_thumbnail_url('blog-thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            </div>

                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="read-more mt-auto">
                                <a href="<?php the_permalink(); ?>">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                <?php }
              
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
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

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

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

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i><?php the_author_posts_link(); ?></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?php the_time( 'F j, Y' );?> </a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?php the_permalink(); ?>">12 Comments</a></li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        <?php 
                        
                        if(has_excerpt()){
                          echo get_the_excerpt();
                        }else{
                          echo wp_trim_words(get_the_content(), 20);
                        }
                        
                        ?>
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="<?php the_permalink(); ?>">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>

                  </article>
                </div><!-- End post list item -->

              <?php }
            
            ?>

            </div><!-- End blog posts list -->
            
            
              <?php the_posts_pagination(); ?>
            

          </div>

          <?php get_template_part('/templates/sidebar'); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

 <?php get_footer(); ?>
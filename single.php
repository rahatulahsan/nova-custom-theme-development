<?php 

  $nova_layout_class = "col-lg-8";
  if(!is_active_sidebar('main-sidebar')){
    $nova_layout_class = "col-lg-12";
  }


?>
<?php get_header(); ?>

<?php get_template_part('/templates/breadcumb'); ?>


  <main id="main">
  

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="<?php echo $nova_layout_class; ?>" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="<?php the_post_thumbnail_url('blog-single'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
              </div>

              <h2 class="title">D<?php the_title(); ?></h2>

              <div class="meta-top">
                <?php 
                  
                  $author_id = get_post_field('post_author', get_the_ID()); 
                
                ?>
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i><a href="<?php echo get_author_posts_url($author_id); ?>"><?php the_author_meta('display_name',$author_id); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?php the_time( 'F j, Y' );?> </a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?php the_permalink(); ?>">12 Comments</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                
                  <?php the_content(); ?>
                
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                
                <?php 
                  the_category(',','', get_the_ID());
                ?>

                <i class="bi bi-tags"></i>
                <?php the_tags(); ?>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <?php echo get_avatar( get_the_author_meta( 'id' ), $size = '85', $default = '', $alt = '', $args = array( 'class' => 'rounded-circle flex-shrink-0' ) ); ?>
              <div>
                <?php $display_name = get_the_author_meta( 'nicename', $author_id ); ?>
                <h4><?php echo $display_name; ?></h4>
                <div class="social-links">
                  <a href="<?php echo esc_url(get_field('twitter_link', 'user_'. $author_id )); ?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo esc_url(get_field('facebook_link', 'user_'. $author_id )); ?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo esc_url(get_field('instagram_link', 'user_'. $author_id )); ?>"><i class="biu bi-instagram"></i></a>
                </div>
                
                <?php $display_description = get_the_author_meta('description', $author_id); ?>
                <p><?php echo $display_description; ?> </p>
              </div>
            </div><!-- End post author -->
  
          <?php 
          
            if(comments_open()){
              wp_list_comments();
              comments_template();
            }

          ?>

          
        </div>

        <?php 
          
            if(is_active_sidebar('main-sidebar')){
              get_template_part('/templates/sidebar');
            }
           
        ?>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

 <?php get_footer(); ?>
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
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>"><?php the_time( 'F j, Y' );?> </a></li>
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

        <div class="read-more mt-auto">
            <a href="<?php the_permalink(); ?>">Read More <i class="bi bi-arrow-right"></i></a>
        </div>

    </article>
</div><!-- End post list item -->
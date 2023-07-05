<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo get_theme_file_uri( '/assets/img/blog-header.jpg' ); ?>');">
    <div class="container position-relative d-flex flex-column align-items-center">

    <h2><?php the_title(); ?></h2>
    <ol>
        <li><a href="<?php echo esc_url(site_url()); ?>">Home</a></li>
        <li><?php the_title(); ?></li>
    </ol>

    </div>
</div><!-- End Breadcrumbs -->
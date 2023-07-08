<?php 

function nova_load_assets(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com');
    wp_enqueue_style( 'gstatic', '//fonts.gstatic.com');
    wp_enqueue_style( 'google-font-api', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', '1.0', 'all');
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', '1.0', 'all');
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', false, '1.0', 'all');
    wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', '1.0', 'all');
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', '1.0', 'all');
    wp_enqueue_style( 'remexicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', '1.0', 'all');
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', '1.0', 'all');

    wp_enqueue_style('dashicons');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', 1.0, true);
    wp_enqueue_script( 'aosjs', get_template_directory_uri() . '/assets/vendor/aos/aos.js', 1.0, true);
    wp_enqueue_script( 'glightboxjs', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', 1.0, true);
    wp_enqueue_script( 'swiperbundlejs', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', 1.0, true);
    wp_enqueue_script( 'isotopjs', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', 1.0, true);
    wp_enqueue_script( 'validatejs', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', 1.0, true);

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', 1.0, true);


}

add_action('wp_enqueue_scripts', 'nova_load_assets');

function nova_support(){
    load_theme_textdomain('nova', '');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'quote', 'audio', 'link' ) );
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 100,
        'flex-height' => true,
        'flex-width' => true
    ));

    add_image_size('blog-thumb', 412, 310, true);
    add_image_size('blog-single', 850, 630, true);
    add_image_size('blog-sidebar', 80, 80, true);

    register_nav_menu('primary', __('Primary Menu', 'nova'));


}

add_action('after_setup_theme', 'nova_support');

function nova_widgets_setup(){
    register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'nova' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'nova' ),
		'before_widget' => '<div class="sidebar-item ps-lg-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
	) );
}

add_action('widgets_init', 'nova_widgets_setup');

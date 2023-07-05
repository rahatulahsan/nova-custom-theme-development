<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta <?php bloginfo('charset'); ?>>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php wp_head(); ?>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>
<body class="page-blog <?php body_class(); ?>">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <?php if(has_custom_logo()){
            the_custom_logo();} ?> 

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <?php 
      
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'navbar',
        'container_id' => 'navbar'
      ));
      
      ?>

    </div>
  </header><!-- End Header -->
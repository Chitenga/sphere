

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <?php wp_head(); ?>
    <title>Sphere</title>
</head>
<body>

     <!-- Start Header -->

     <header class="header">
        <!-- Hamburger -->
        <div class="hamburger" id="hamburger">
          <div class="bar" id="top"></div>
          <div class="bar" id="middle"></div>
          <div class="bar" id="bottom"></div>
      </div>
      
      <!-- Main Menu -->
      <ul class="menu">
        <li class="menu-item"><a href="Home.html" class="bold">Portfolio</a></li>
        <li class="menu-item" id="a"><a href="Contacts.html">Contact Us</a></li>
        <li class="menu-item"><a href="About.html">About Us</a></li>
        <li class="menu-item" id="aa"><a href="Portfolio.html">Talent Roster</a></li>
        <li class="menu-item"><a href="services.html">Services</a></li>
      </ul>
              <!-- Logo -->
              <a href="Portfolio.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Group 18.png" alt="" class="logo"></a>
          </header>
          <!-- End Header -->
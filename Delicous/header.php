<?php global $nazmul;?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo('name');?></title>
  <meta content="<?php bloginfo('description');?>" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
  <link href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- MUST BE INCLUDED functions.php file
  <link href="<?php //echo get_template_directory_uri();?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php //echo get_template_directory_uri();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link href="<?php //echo get_template_directory_uri();?>/assets/css/master.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php //echo get_stylesheet_uri();?>">
 -->


  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<style>
  #footer {
    background:<?php echo $nazmul['f-background'];?> !important;

   
}
</style>

  
<?php wp_head();?>
</head>


<body>


  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container text-right">
    <?php if($nazmul['advertizement-switch']==1):?>
     <a href=""><input type="text" name="discount" value="<?php echo $nazmul['advertizement-text']?>" class="add form-control bg-dark text-center text-white p-1"></a>
     <?php endif;?>
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> <?php the_time( 'Y/m/d g:i:s A'); ?>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!--
        <h1 class="text-light"><a href=""><span><?php //echo get_theme_mod('theme_logo','delicious');?></span></a></h1>
      -->
      <a href=""><img src="<?php echo $nazmul['logo']['url']?>" alt=""></a>
          <p class="text-white font-weight-normal"><?php echo get_theme_mod('theme_logo_desc',true);?></p>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
 <!--
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php //bloginfo('home');?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>

          <li class="book-a-table text-center"><a href="#book-a-table">Book a table</a></li>
        </ul>
      </nav>
-->

<!--



<nav id="nav" class="nav-menu"><ul id=" " class=" "><li class="current-menu-item"><a href="http://localhost/ecommerce/" aria-current="page">Home</a></li>
<li><a href="http://localhost/ecommerce/category/web-design/">Web Design</a></li>
<li><a href="http://localhost/ecommerce/about-us/">About Us</a></li>
<li><a href="http://localhost/ecommerce/mail-us/">Mail us</a></li>
</ul></nav> 

-->

<?php
 wp_nav_menu(array(
 'theme_location'=> 'header_top_menu',
 'menu_class'=> ' ',
 'menu_id'=> ' ',
 'container'=>'nav',
 'container_class'=>'nav-menu d-none d-lg-block',
 'container_id'=>'nav',

 ));

?>
    </div>
    <?php get_search_form(); ?>
  </header><!-- End Header -->
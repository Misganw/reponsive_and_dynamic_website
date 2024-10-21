<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ethiop Computiong</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo site_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo site_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo site_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo site_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo site_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo site_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo site_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo site_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo site_url()?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo site_url()?>">Ethiop Tech</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <?php   
            $user=$this->session->userdata('user_level');
            $id = $this->session->userdata('username');
?>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo site_url();?>E_tech/admin_home">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>E_tech/admin_home">About</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_service">Services</a></li>
          <li><a class="nav-link   scrollto" href="<?php echo site_url();?>A_portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_member">Team</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_blog">News</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_video">Videos</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <a href="<?php echo site_url();?>E_tech/add_service">Service Manipulation</a>
                <a href="<?php echo site_url();?>E_tech/add_team">Member Manipulation</a>
                <a href="<?php echo site_url();?>E_tech/add_blog">Blog Manipulation</a>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Logout</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                 <li><a class="btn-getstarted scrollto" href="<?php echo site_url();?>Login/edit_user?I=<?php echo base64_encode($id); ?>">Change password</a></li>
                <a class="btn-getstarted scrollto" href="<?php echo site_url();?>Login/logout">Logout</a>
                </ul>
              </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header>
  <!-- End Header -->

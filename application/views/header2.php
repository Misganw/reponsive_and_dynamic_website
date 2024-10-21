<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set('Asia/Dhaka');
  if($this->session->userdata('user_level')==False)
 {
      redirect(site_url() , 'refresh'); }
       $uid = $this->session->userdata('user_id');
 ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ethiop Computing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo site_url()?>assets/img/111.png" rel="icon">
  <link href="<?php echo site_url()?>assets/img/111.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- vendors CSS Files -->
  <link href="<?php echo site_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url();?>assets/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo site_url();?>assets/vendors/aos/aos.css" rel="stylesheet">
  <link href="<?php echo site_url();?>assets/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo site_url();?>assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="<?php echo site_url();?>assets/css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo site_url();?>assets/css/main.css" rel="stylesheet">

<!-- JavaScript for to display code snippt -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/monokai.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/style.css">
<!-- JavaScript for to display code snippt -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="<?php echo site_url()?>assets/img/111.png" class="img-fluid animated" alt="" style="max-height: 50px; max-width: 60px;">
         <h3 class="logo me-auto"><a href="<?php echo site_url()?>">EthiopTech</a></h3>
        <h1><span style="color: white;">.</span></h1>
      </a>
<?php   
            $user=$this->session->userdata('user_level');
            $id = $this->session->userdata('username');
?>
      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="<?php echo site_url();?>E_tech/admin_home">Home</a></li>
           <?php 
          if ($user=='user')
          {
           ?>
           <li><a class="nav-link scrollto" href="<?php echo site_url();?>E_tech/admin_home">About</a></li>
           <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_portfolio/get_portfolio?I=<?php echo base64_encode($uid); ?>">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_certificate/get_certificate?I=<?php echo base64_encode($uid); ?>">Certificate</a></li>
            <li><a class="nav-link scrollto" href="<?php echo site_url()?>A_blog/get_blog?I=<?php echo base64_encode($uid); ?>">Blogs</a></li>

          <li class="dropdown"><a href="<?php echo site_url()?>E_tech/about_as"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo site_url()?>E_tech/privacy">Privacy Policy</a></li>
              <li><a href="<?php echo site_url()?>E_tech/term">Term and conditions</a></li>
              <li><a href="<?php echo site_url();?>E_tech/disclaimer">Disclaimer</a></li>
            </ul>
          </li>
            <li><a class="nav-link scrollto" href="<?php echo site_url();?>E_tech/#contact">Contact Us</a></li>
          <li class="dropdown"><a href="<?php echo site_url()?>"><span>Logout</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a class="btn-getstarted scrollto" href="<?php echo site_url();?>Login/edit_user?I=<?php echo base64_encode($id); ?>">Change password</a></li>
               <li><a class="btn-getstarted scrollto" href="<?php echo site_url();?>Login/logout">Logout</a></li>
             </ul>
          </li>
           <?php
          }
          else
          {
          ?>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>E_tech/admin_home">About</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_service">Services</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_portfolio/get_portfolio?I=<?php echo base64_encode($uid); ?>">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_certificate/get_certificate?I=<?php echo base64_encode($uid); ?>">Certificate</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_member">Team</a></li>
           <li><a class="nav-link scrollto" href="<?php echo site_url()?>A_blog/get_blog?I=<?php echo base64_encode($uid); ?>">Blogs</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url();?>A_video">Videos</a></li>
           <li><a class="nav-link scrollto" href="<?php echo site_url();?>Etech_tut/job_cv">Job CV</a></li>
           <li class="dropdown"><a href="<?php echo site_url()?>E_tech/about_as"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo site_url()?>E_tech/privacy">Privacy Policy</a></li>
              <li><a href="<?php echo site_url()?>E_tech/term">Term and conditions</a></li>
              <li><a href="<?php echo site_url();?>E_tech/disclaimer">Disclaimer</a></li>
            </ul>
          </li>
            <li><a class="nav-link scrollto" href="<?php echo site_url();?>E_tech/#contact">Contact Us</a></li>
          <li class="dropdown"><a href="<?php echo site_url()?>"><span>Logout</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a class="btn-getstarted scrollto" href="<?php echo site_url();?>Login/edit_user?I=<?php echo base64_encode($id); ?>">Change password</a></li>
               <li><a class="btn-getstarted scrollto" href="<?php echo site_url();?>Login/logout">Logout</a></li>
             </ul>
          </li>
          <?php
        }
        ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->

  <main id="main">

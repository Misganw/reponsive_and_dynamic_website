<?php
include('header2.php');
?>

<main id="main">

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials" style="margin-top: 80px;">
  <div class="container" data-aos="fade-up">

    <div class="testimonials-slider swiper">
      <div class="swiper-wrapper">

       <?php 
       foreach($team_list->result() as $row)
       {
        ?>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo site_url()?>assets/team/<?php echo $row->image?>" class="testimonial-img" alt="">
            <h3><?php echo $row->first_name.' '.$row->middle_name ?></h3><br>
            <h4><?php echo 'Role: '.$row->role?></h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <?php echo $row->description?>.
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->
        <?php 
      }?>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
</section><!-- End Testimonials Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Breif Intro about Ethiop Computing Technplogy</h2>
      <h5 style="text-align: justify;">Ethiop Computin is Aprivate limited company established by the cooperation of skilled human resources. The company estbilished with the aim of making life easy with digital technology. The team of Ethiop computing serves private and gerenmental business organizations. They have skill of website development, web application development, mobile application development, AI application development, network installation and configration, graphis desig, project and research advising. The team also looking forward to the customers to serve on berif and clear lecture and laboratory works.</h5>

   </div>

   <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-5">
      <div class="about-img">
        <img src="<?php echo site_url();?>assets/img/services-6.jpg" class="img-fluid" alt="">
      </div>
    </div>

    <div class="col-lg-7">
      <h3 class="pt-0 pt-lg-5">Ethiop Computing Technology
      </h3>

      <!-- Tabs -->
      <ul class="nav nav-pills mb-3">
        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab_m">Director Message</a></li>
        <li><a class="nav-link " data-bs-toggle="pill" href="#skill">Team skills</a></li>
        <li><a class="nav-link" data-bs-toggle="pill" href="#service">Services</a></li>
      </ul><!-- End Tabs -->

      <!-- Tab Content -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab_m">
          <div class="row" >
            <div class="col-lg-4">
              <img src="assets/img/director.jpg" style="max-width: 100%;">
            </div>
            <div class="col-lg-8">
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Message from Ethiop Computing</h4>
              </div>
              <p>Wait for the content!!!.</p>
            </div>
          </div>
        </div><!-- End Tab 2 Content -->

        <div class="tab-pane fade show" id="skill">
          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>Team Skills</h4>
          </div>
           <ul>
              <li><i class="ri-check-double-line"></i> Website design and development</li>
              <li><i class="ri-check-double-line"></i> Web application design and development</li>
              <li><i class="ri-check-double-line"></i> Mobile Application design and development</li>
              <li><i class="ri-check-double-line"></i> AI based application development</li>
              <li><i class="ri-check-double-line"></i> Electronice design or Home automation services</li>
              <li><i class="ri-check-double-line"></i> Graphics design</li>
              <li><i class="ri-check-double-line"></i> Research and project advising</li>
              <li><i class="ri-check-double-line"></i> Basic Computer skill training</li>
            </ul>

          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>Application we can develop</h4>
          </div>
          <p>
            <ol>
              <li>E-commerce Web Application</li>
              <li> Cafteria and restaurant website</li>
              <li>Service delivery Website</li>
              <li>RID application</li>
              <li>E-learning web application </li>
              <li>LAN Network Installation</li>
              <li>Different AI based Mobile applications</li>
            </ol>
          </p>
        </div><!-- End Tab 1 Content -->


        <div class="tab-pane fade show" id="service">
          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>Lecture and Advising Services</h4>
          </div>
          <p>
              We are team of talented designers and developer to serve you on making websites, Mobile applications,AI applications and Graphics.We are ready to serve you as your needs. E-commerces websites, official websites, broshers, flayers, posters. We are also ready to offer the following <strong>lectures</strong> and <strong>laboratory works</strong>.</p>
              <ul>
              <li><i class="ri-check-double-line"></i> Programming language course</li>
              <li><i class="ri-check-double-line"></i> AI courses</li>
              <li><i class="ri-check-double-line"></i> Graphics courses</li>
              <li><i class="ri-check-double-line"></i> Electronics Courses</li>
              <li><i class="ri-check-double-line"></i> Basic Electrical courses </li>
              <li><i class="ri-check-double-line"></i> Networking course</li>
            </ul>
        </div><!-- End Tab 3 Content -->

      </div>
    </div>
  </div>
</div>
</section><!-- End About Section -->
</main>
<?php
include('footer2.php');
?>
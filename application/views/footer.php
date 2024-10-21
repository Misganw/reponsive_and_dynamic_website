
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26153.32282222301!2d37.996923683195625!3d11.856598362251948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x16447db5c88132bf%3A0x28cd667d8ea10014!2sDebre%20Tabor!5e1!3m2!1sen!2set!4v1668409257842!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Debre Tabor. 105 K.M from Bahr Dare</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h5>Email:</h5>dtinvestment2015@gmail.com
                  <p></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>0581415672/0581413216</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <center><h4>Leave Qustions</h4></center>
             <?php
        if($this->uri->segment(2)=='insert_success')
        {
          echo '<h4 class="text-success">Data Inserted Successfully!!!</h4>';
        }
        ?>
        <h5 class="text-success">
        <?php echo $this->session->flashdata('message') 
          ?>        
          </h5>
            <form action="<?php echo site_url()?>A_question/save_question" method="post" role="form" class="" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                </div>
                 <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Mobile No." required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Subject (Issue Title)" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" placeholder="Your Detail Qustion" required></textarea>
              </div>
              <div class="form-group mt-3">
                <input type="date" class="form-control" name="post_date" id="post_date">
              </div>
              <center>
                 <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save_question">Send Question</button>
                </div>
               </center>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h4>Debre Tabor Industry & Investment Office</h4>
              <p>
                Debre Tabor. <br>
                105 K.M from Bahr Dar<br><br>
                <strong>Phone:</strong> 0581415672/0581413216<br>
                <strong>Email: dtinvetment2015gmail.com</strong><br>
                <strong>Facebook: --- </strong>
                <a href="https://www.facebook.com/profile.php?id=100063800777205" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a> <br>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>

            <li><i class="bi bi-chevron-right"></i> <a href="<?php echo site_url();?>E_tech">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo site_url();?>index.php#about">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo site_url();?>index.php#service">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo site_url();?>index.php#portfolio">Opportunities</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?php echo site_url();?>index.php#team">Team</a></li>
              <li><i class="bi bi-chevron-right"></i><a href="<?php echo site_url();?>index.php#blog">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Agriculture</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Industry</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Tourism</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Service providing sectors</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Education</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Sport</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">ICT</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright @2015 E.C <strong><span>Debre Tabor Industry & Investment Office</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://accounts.google.com" target="_blank">Misganaw A/ethiop.computing@gmail.com</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://www.twitter.com" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.skype.com" class="google-plus" target="_blank"><i class="bi bi-skype"></i></a>
          <a href="https://www.linkedin.com" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo site_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo site_url();?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo site_url();?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo site_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo site_url();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo site_url();?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo site_url();?>assets/js/main.js"></script>

</body>

</html>
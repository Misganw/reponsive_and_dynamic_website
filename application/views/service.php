<?php
include('heade1.php');
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo site_url();?>">Home</a></li>
          <li>Service Details</li>
        </ol>
        <h2>Service Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <?php
  if(isset($service_detail))
  {
    ?>
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="<?php echo site_url();?>assets/services/<?php echo $service_detail->image;?>" class="img-fluid" alt="" style="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Service information</h3>
              <ul>
                <li><strong>Category</strong>: <?php echo $service_detail->title; ?></li>
                <li><strong>Date of Post:</strong>: <?php echo $service_detail->post_date; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Service detail</h2>
              <h5 style="text-align: justify;"><?php echo $service_detail->discription; ?></h5>
            </div>
          </div>
             <?php 
            }
           ?>
        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->


<?php
include('footer1.php');
?>
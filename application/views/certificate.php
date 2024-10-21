<?php
include('heade1.php');
?>


  <main id="main">
        <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo site_url();?>">Home</a></li>
          <li>Certificate Details</li>
        </ol>
        <h2>Certificate Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= certificate Details Section ======= -->
    <section id="certificate-details" class="certificate-details">
      <div class="container">
        <div class="row gy-4">
          <?php
  if(isset($certificate_detail))
  {
    ?>
          <div class="col-lg-8">
            <div class="certificate-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="<?php echo site_url();?>assets/certificate/<?php echo $certificate_detail->p_file;?>" class="img-fluid" alt="" style="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="certificate-info">
              <h3>Certificate information</h3>
              <ul>
                <li><strong>Certificate Title</strong>: <?php echo $certificate_detail->title; ?></li>
                <li><strong>Category</strong>: <?php echo $certificate_detail->skill; ?></li>
                <li><strong>Received from</strong>: <?php echo $certificate_detail->company; ?></li>
                <li><strong>Date of Post:</strong>: <?php echo $certificate_detail->post_date; ?></li>
                <?php 
                    $id=$certificate_detail->skilled_id;
                    $info =$this->Certificate_model->get_member_by_certificateid($id);
                    ?>

                    <li><strong>Received By</strong>: <?php echo $info->first_name.' '.$info->middle_name.' '.$info->last_name; ?></li>
                    <li><a href="<?php echo site_url()?>E_tech/team_detail?I=<?php echo base64_encode($id); ?>">Click here to know what skills has <strong><?php echo $info->first_name;?></strong></a></li>
              </ul>
            </div>
            <div class="certificate-description">
              <h2>Certificate detail</h2>
              <h5 style="max-height: 200px;overflow:; padding-bottom: 1px;text-align: justify;"><?php echo $certificate_detail->description; ?></h5>
            </div>
          </div>
             <?php 
            }
           ?>
        </div>

      </div>
    </section><!-- End certificate Details Section -->

  </main><!-- End #main -->
<?php
include('footer1.php');
?>

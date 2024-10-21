<?php
include('heade1.php');
?>


  <main id="main">
        <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo site_url();?>">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <?php
  if(isset($portfolio_detail))
  {
    ?>
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="<?php echo site_url();?>assets/portfolio/<?php echo $portfolio_detail->p_file;?>" class="img-fluid" alt="" style="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Project Title</strong>: <?php echo $portfolio_detail->title; ?></li>
                <li><strong>Category</strong>: <?php echo $portfolio_detail->skill; ?></li>
                <li><strong>Client</strong>: <?php echo $portfolio_detail->company; ?></li>
                <li><strong>Date of Post:</strong>: <?php echo $portfolio_detail->post_date; ?></li>
                <?php 
                    $id=$portfolio_detail->skilled_id;
                    $info =$this->Portfolio_model->get_member_by_portfolioid($id);
                    ?>

                    <li><strong>Done By</strong>: <?php echo $info->first_name.' '.$info->middle_name.' '.$info->last_name; ?></li>
                    <li><a href="<?php echo site_url()?>E_tech/team_detail?I=<?php echo base64_encode($id); ?>">Click here to know what skills has <strong><?php echo $info->first_name;?></strong></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Project detail</h2>
              <h5 style="text-align: justify;"><?php echo $portfolio_detail->description; ?></h5>
            </div>
          </div>
             <?php 
            }
           ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php
include('footer1.php');
?>

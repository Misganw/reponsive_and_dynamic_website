<?php
include('heade1.php');
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>What do you want from us?</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
         <form action="<?php echo site_url()?>A_customer/save_customer" method="post" role="form" enctype="multipart/form-data" class="">
              <center><h4>Leave Your Needs</h4></center>
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="name">First name</label>
                  <input type="text" name="fname" class="form-control" id="fname" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="name">Middle name</label>
                  <input type="text" class="form-control" name="mname" id="mname" >
                </div>
                <div class="form-group col-md-4">
                  <label for="name">Last name</label>
                  <input type="text" class="form-control" name="lname" id="lname" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" >
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Phone number</label>
                  <input type="text" name="fname" class="form-control" id="fname">
                </div>
              </div>
              <div class="form-group">
                  <label for="name">What You want from us?</label>
                  <select name="skill" id="skill" class="form-control">
                  <option vlaue="">Select your need</option>
                  <option value="Web application development">Web application development</option>
                <option value="Mobile application development">Mobile application development</option>
                <option value="AI application development">AI application development</option>
                <option value="Network installation and configration">Netwok installation and Configration</option>
                <option value="Graphics design">Graphics design</option>
                <option value="Electronics design and maintenance">Electronics design and maintainance</option>
                <option value="Project and research advising">Project and research advising</option>
                <option value="Lecturing and laboratory work">Lecturing and laboratory work</option>
              </select>
                </div>
                <div class="form-group">
                <label for="name">Where do you live?. (mention the town)</label>
                <input type="text" class="form-control" name="town" id="town" >
              </div>
              <div class="form-group">
                <label for="name">Posting Date</label>
                <input type="date" class="form-control" name="post_date" id="post_date">
              </div>
              <div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="save_customer">Send</button>
              </div>
            </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Services</h3>
              <ul>
                <li><strong>Web application development</strong>: </li>
                <hr>
                <li><strong>Mobile application development</strong></li>
                 <hr>
                <li><strong>AI application development</strong> </li>
                 <hr>
                <li><strong>Graphics design</strong>: <a href=""></a></li>
                 <hr>
                <li><strong>Netwok installation and Configration</strong>: <a href=""></a></li>
                 <hr>
                <li><strong>Project and research advising</strong>: <a href=""></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->


<?php
include('footer1.php');
?>
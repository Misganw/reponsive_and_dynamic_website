


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Bootstap Tutorials</h2>
        <ol>
          <li><a href="<?php echo site_url()?>Etech_tut">Home</a></li>
          <li><a href="blog.html"><b id="time" class="bold"></b></a></li>
          <li><?php
          $Today=date('y:m:d');
          $new=date('l, F d, Y',strtotime($Today));
          echo $new;
        ?></li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">

      <div class="col-lg-8">
        <article class="blog-details">
          <div class="post-img">
            <img src="<?php echo site_url()?>assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
          </div>

          <h2 class="title">Introduction to Bootstarp</h2>
          <div class="meta-top">
            <ul>
            </ul>
          </div><!-- End meta top -->
          <hr>


          <div class="content" style="text-align: justify;">
            In this page Iwamt to teach you about boostratrap. This section incorporates the basic defination of bootstrap and its configration on your local server called XAMPP. I mainly cover the following cencepts.
            <h5 class="">1. what is bootstrap.</h5>
            <h5 class="">2. dounload bootstrap and</h5>
            <h5 class="">3. seting up bootstrap.</h5>

            <h2 class="title"> 1. What is Bootstap?</h2>
            <p>Bootstrap is a front end design framwork for website and web applications. It contains the basic building block of websites such as CSS, JavaScript and JQuery. Now a days bootstrap 5 version is available. </p>
            <h2 class="title">2. Download Bootstrap</h2>
            <p>You can download the Source file from <a href="https://getbootstrap.com/docs/4.0/getting-started/download/"> Boostrap</a>. But for beginnes, I recommend bootstap 3.0.3. You can get it from<a href="https://blog.getbootstrap.com/2013/12/05/bootstrap-3-0-3-released/" > Bootstrap 3.0.3</a>. </p>
            
            <h2 class="title"> 3. Setup Bootstrap?</h2>
            <p> After bootstrap is downloaded, extract it and put in <strong>C:\xampp\htdocs</strong>. You can create new folder and copy bootstrap inside it. The newly created folder will be an a place where all .html, .css and .js files are saved. This files are your website files.</p>

            <?php

            ?>
            <pre>
              <code>
                <?php 
                $conn=mysqli_connect('localhost','root','r00tme1221')or die ("server is not found");
                mysqli_select_db($conn,'e_tech')or die("The Database is not found");
                $ry=mysqli_query($conn,"SELECT * FROM try");
                if (mysqli_num_rows($ry)>0)
                {   
                  while($key=mysqli_fetch_assoc($ry)) {
                        // code...
                    
                    echo $key['code'];
                  }
                } 
                ?>

              </code>
            </pre>

            <blockquote>
              <p>
                Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
              </p>
            </blockquote>

            <p>
              Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
              Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
              Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
            </p>

            <h3>Et quae iure vel ut odit alias.</h3>
          </div><!-- End post content -->





          <div class="meta-bottom">
            <i class="bi bi-folder"></i>
            <ul class="cats">
              <li><a href="#">Business</a></li>
            </ul>

            <i class="bi bi-tags"></i>
            <ul class="tags">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div><!-- End meta bottom -->

        </article><!-- End blog post -->

        <div class="post-author d-flex align-items-center">
          <img src="<?php echo site_url()?>assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
          <div>
            <h4>Jane Smith</h4>
            <div class="social-links">
              <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
              <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
            </div>
            <p>
              Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
            </p>
          </div>
        </div><!-- End post author -->

        <div class="comments">

          <h4 class="comments-count">8 Comments</h4>

          <div id="comment-1" class="comment">
            <div class="d-flex">
              <div class="comment-img"><img src="<?php echo site_url()?>assets/img/blog/comments-1.jpg" alt=""></div>
              <div>
                <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan,2022</time>
                <p>
                  Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                  Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                </p>
              </div>
            </div>
          </div><!-- End comment #1 -->



          <div class="reply-form">
            <h4>Leave a Reply</h4>
            <form action="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="name" type="text" class="form-control" placeholder="Your Name*">
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="text" class="form-control" placeholder="Your Email*">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input name="website" type="text" class="form-control" placeholder="Your Website">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Post Comment</button>

            </form>

          </div>

        </div><!-- End blog comments -->

      </div>




      <div class="col-lg-4">
        <div class="sidebar">

          <div class="sidebar-item search-form">
            <h3 class="sidebar-title">Search</h3>
            <form action="" class="mt-3">
              <input type="text">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End sidebar search formn-->

          <div class="sidebar-item categories">
            <h3 class="sidebar-title">Related Posts</h3>
            <ul class="mt-3">
              <li><a href="#">General <span>(25)</span></a></li>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(5)</span></a></li>
              <li><a href="#">Design <span>(22)</span></a></li>
              <li><a href="#">Creative <span>(8)</span></a></li>
              <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>
          </div><!-- End sidebar categories-->


          <div class="sidebar-item tags">
            <h3 class="sidebar-title">Tags</h3>
            <ul class="mt-3">
              <li><a href="#">App</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Mac</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Office</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Studio</a></li>
              <li><a href="#">Smart</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div><!-- End sidebar tags-->

        </div><!-- End Blog Sidebar -->
      </div>





    </div>
  </div>
</section><!-- End Blog Details Section -->

</main><!-- End #main -->

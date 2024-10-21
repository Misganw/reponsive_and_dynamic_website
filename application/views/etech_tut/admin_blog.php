<?php
//include('header2.php');
?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
     <h3>Admin Panel</h3>
     <ol>
      <li><a href="<?php echo site_url()?>A_blog">Home</a></li>
      <li>Admin Panel</li>
      <li><a href="A_blog/add_blog" class="btn btn-primary"><i class="bi bi-plus"></i>Add News</a></li>
    </ol>
  </div>

</div>
</div><!-- End Breadcrumbs -->
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <div class="section-header" >
      <h2>News</h2>
      <p style="text-align: justify;">In this page, administrator can add new post, update and delete the posts. One thing to underline that, <strong>HTML code does not exixt as the previous form</strong>. So, the admin should replace the HTML code part by the orginal code.</p>
      <?php echo $this->session->flashdata('user_id') 
            ?>  
    </div>

    <div class="row">
           <center>                
        <h4 class="text-success"> 
              <?php echo $this->session->flashdata('save_success');?>
              </h4>
        </center>
         <center>
            <h4 class="text-success"> 
              <?php echo $this->session->flashdata('delete_message');?>
              </h4>
        </center>
      <?php  
      foreach($blog_list->result() as $row)
      {
        ?>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
           <hr>
           <center>  
        <div class="button-group" style="padding-top:;">
         <a style="color: greenyellow;" href="<?php echo site_url()?>A_blog/edit_blog?I=<?php echo base64_encode($row->id); ?>" title="Update " class=""><i class="bi bi-pencil"></i></a>
         <a style="color: red;" href="<?php echo site_url()?>A_blog/delete?I=<?php echo base64_encode($row->id); ?>" title="Delete " class="" onclick="return confirm('Are you sure to delete this data?')"><i class="bi bi-trash"></i></a>
       </div>
     </center>
          <div class="post-box">
            <div class="post-img">
              <center>
              <img src="<?php echo site_url();?>assets/blogs/<?php echo $row->image ?>" class="img-fluid" alt="" style="height: 200px; width: 300;">
            </center>
            </div>
            <div class="meta">
              <span class="post-date"><?php echo $row->post_date ?></span>
              <span class="post-author"> /<?php 
                  $id=$row->upload_by;
                       $info =$this->Blog_model->get_member_by_blogid($id);
                    echo $info->first_name.' '.$info->middle_name.' '.$info->last_name; 
                   ?></span>
            </div>
            <h3 class="post-title"><?php echo $row->title ?></h3>
            <center>
              <a href="<?php echo site_url()?>A_blog/blog_detail?I=<?php echo base64_encode($row->id); ?>" class="readmore stretched-link"><span>Read More </span><i class="bi bi-arrow-right"></i></a>
            </center>
          </div>

   </div>
   <?php
 }
 ?>

</div>
</div>
</section><!-- End Recent Blog Posts Section -->
<?php
//include('footer2.php');
?>
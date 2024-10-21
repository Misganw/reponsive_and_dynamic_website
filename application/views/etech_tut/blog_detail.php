<?php
//include('header2.php');
?>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>News Details</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_blog">Home</a></li>
        <li><a href="blog.html">News</a></li>
        <li>News Details</li>
    </ol>
</div>

</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">
          <div class="col-lg-8">
 <?php
     if(isset($blog_detail))
     {
        ?> 
            <article class="blog-details">
              <div class="post-img">
                <img src="<?php echo site_url();?>assets/blogs/<?php echo $blog_detail->image ?>" class="img-fluid">
            </div>
            <h2 class="title"><?php echo $blog_detail->title ?></h2>
            <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Posted By:<?php 
                  $id=$blog_detail->upload_by;
                       $info =$this->Blog_model->get_member_by_blogid($id);
                    echo $info->first_name.' '.$info->middle_name.' '.$info->last_name; 
                   ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?php echo $blog_detail->post_date ?></time></a></li>
              </ul>
          </div><!-- End meta top -->
          <div class="content">

            <?php echo $blog_detail->description ?>
          <blockquote>
              <p>
            </p>
        </blockquote>
    </div><!-- End post content -->
</article><!-- End blog post -->
   <?php
     }
   ?>
<div class="comments">
   <h4 class="comments-count"><?php ?></h4>
   <?php
     foreach($comment_detail as $row)
     {
        ?> 
  <div id="comment-1" class="comment">
    <div class="d-flex">
      <div class="comment-img"><img src="<?php echo site_url()?>assets/comment/<?php echo $row->image?>" alt=""></div>
      <div>
        <h5><a href=""><?php echo $row->name?></a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
        <time datetime="2020-01-01"><?php echo $row->post_date?></time>
        <p>
         <?php echo $row->comment?>
      </p>
  </div>
</div>
</div><!-- End comment #1 -->
 <?php
     }
    ?> 


<div class="reply-form">
    <h4>Leave a Reply</h4>
    <p></p>
    <form action="<?php echo site_url()?>A_comment/save_comment?I=<?php echo base64_encode($blog_detail->id); ?>" method="post" role="form" class="" enctype="multipart/form-data">
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
      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
  </div>
</div>
<div class="row">
    <div class="col form-group">
      <input name="post_date" type="date" class="form-control">
  </div>
</div>
<div class="row">
    <div class="col form-group">
                  <label>Commentary Photo</label>
                  <input type="file" class="form-control" name="image" id="image">
                 </div>
</div>
<button type="submit" name="save_comment" class="btn btn-primary">Post Comment</button>
</form>
</div>
</div><!-- End blog comments -->


</div>

<div class="col-lg-4">

    <div class="sidebar">

  <div class="sidebar-item categories">
    <h3 class="sidebar-title">Categories</h3>
    <ul class="mt-3">
      <?php
    if(isset($blog_detail))
     {
      $subcat_id=$blog_detail->sub_category;
      $info=$this->Detail_model->get_all_by_sub_category($subcat_id);
      foreach($info as $row)
      {
        ?> 
      <li><a href="<?php echo site_url()?>/A_portfolio"><?php echo $row->title?></a></li>
    <?php 
  }
}
  ?>
  </ul>
</div><!-- End sidebar categories-->

<div class="sidebar-item recent-posts">
    <h3 class="sidebar-title">Recent Commentaries</h3>

    <div class="mt-3">
          <?php
     foreach($recent_blog as $r)
     {
        ?> 
      <div class="post-item mt-3">
        <img src="<?php echo site_url()?>assets/comment/<?php echo $r->image ?>" alt="" class="flex-shrink-0">
        <div>
          <h4><a href=""><?php echo $r->name ?></a></h4>
          <time datetime="2020-01-01"><?php echo $r->post_date ?></time>
      </div>
  </div><!-- End recent post item-->
<?php }?>

</div><!-- End sidebar recent posts-->

</div><!-- End Blog Sidebar -->

</div>
</div>
</div>
</div>
</section><!-- End Blog Details Section -->


<?php
//include('footer2.php');
?>
<script type="text/javascript" charset="utf-8" async defer>
 var BASE_URL = "<?php echo base_url(); ?>";
 $(document).ready(function() {
  $( "#title" ).autocomplete({

    source: function(request, response) {
      $.ajax({
        url: BASE_URL + "A_service/search",
        data: {
          term : request.term
      },
      dataType: "json",
      success: function(data){
         var resp = $.map(data,function(obj){
          return obj.name;
      }); 
         response(resp);
     }
 });
  },
  minLength: 1
});
});



 function delete_service(id)
 {
     save_method = 'delete';
    $('#delete_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('A_service/delete_service')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                $('[name="id"]').val(data.id);
                $('[name="title"]').val(data.title);
             $('#service_Delete').modal('show'); // show bootstrap modal when complete loaded
             $('.modal-title').text('Delete Data'); // Set title to Bootstrap modal title
                //if success reload ajax table
                // $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
    $('#service_delete').on('click',function(){
        var id = $('#id').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('A_service/delete_serv')?>/"+id,
            dataType : "JSON",
            data : {id:id},
            success: function(data)
            {
                $('[name="id"]').val("");
                $('#service_Delete').modal('hide');


                $("#delete_modal").modal();
                $("#delete_modal").modal({ keyboard: false })
                $("#delete_modal").modal('show');

                setTimeout(function() {
                    $('#delete_modal').modal('hide');
                }, 1000);
                url  : "<?php echo site_url('gallery')?>";
            // table.ajax.reload(null,false);
            // reload_table();
        }
    });
        return false;
    });
</script>
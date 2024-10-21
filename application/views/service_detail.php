<?php
include('header2.php');
?>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h3>Admin Panel</h3>
      <ol>
        <li><a href="<?php echo site_url()?>A_service">Home</a></li>
        <li>Admin Panel</li>
        <li><a href="<?php echo site_url()?>A_service/add_service" class="btn btn-primary"><i class="bi bi-plus"></i>Add service</a></li>
    </ol>
</div>

</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 >Our Services</h2>
      <h4 style="text-align: justify;">Do not hesitate to contact us to make your dream realize. We are a team who makes cooperation to serve you by using our climax energy.</h4>
  </div>

  <!-- DISPLAY DETAILS OF SERVICE-->
  <?php
  if(isset($service_detail))
  {
    ?>
    <center>
        <div class="col-lg-8">

            <article class="blog-details">
              <div class="post-img">
                <img src="<?php echo site_url();?>assets/services/<?php echo $service_detail->image;?>" class="img-fluid" alt="" style="">
            </div>

            <h3 class="title"><?php echo $service_detail->title; ?></h3>

            <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?php echo ' Date of Post: '.$service_detail->post_date; ?></time></a></li>
              </ul>
          </div><!-- End meta top -->

          <div class="content">
           <h5 style="max-height: 200px;overflow:; padding-bottom: 1px;text-align: justify;"><?php echo $service_detail->discription; ?></h5>

           <blockquote>
              <p>
              </p>
          </blockquote>

      </div><!-- End post content -->

  </article><!-- End blog post -->
</div>
</center>
<?php 
}
?>
<!--...DISPLAY DETAILS OF SERVICE-->

</div>
</section><!-- End Services Section -->



<!--Modal for video Delete-->
<div class="modal fade" id="service_Delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"><b><span id="title"></span></b></h4>
              </div>
              <form action="#" id="delete_form" class="form-horizontal">
                <div class="modal-body delete_form">

                    <input type="hidden" id="id" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-6"><strong>Do you want to delete? </strong></label>
                            <div class="col-md-6">
                                <input name="title" id="title" placeholder="Service Title" class="form-control" type="text" disabled="true">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="service_delete" class="btn btn-primary">Delete </button>
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close </button>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap modal -->
<div class="modal modal-success fade" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Success Message </h3>
            </div>
            <div class="modal-body form">
                <h2 style="color: green">Data Deleted Successfully !!!</h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
include('footer2.php');
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
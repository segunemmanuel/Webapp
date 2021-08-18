<div class="row">
      <div class="col-md-6 col-md-offset-3">
      </div>
      <div class="col-md-4 col-md-offset-4" style="background-color: #fff; border: 1px solid #ddd; padding: 10px;">
      <?php  if ($this->session->flashdata('error')) {

echo '<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('error').  '</div>' ;}?> 

<?php  if ($this->session->flashdata('success')) {

echo '<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('success').  '</div>' ;} ?> 
      
      <br>
      
      
<?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>',  '</div>'); ?>
       <br>
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('home/resetpassword')?>">
          <div class="form-group col-md-10">
            <label class="" for="email">Enter Email for Password Reset Code</label><br><br>
            <div class="">
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
            </div>
          </div>
          <br>
          <div class="form-group col-md-4"> 
            <div class="">
              <button type="submit" class="text-center btn btn-primary" name="send_code">Send Code</button><br><br>
            </div>
          </div>
        </form>
  </div>
</div>

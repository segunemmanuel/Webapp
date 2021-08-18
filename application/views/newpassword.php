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
        <form class="" role="form" method="post" action="<?php echo base_url('controller/method') ?>">
          <div class="form-group">
            
            <div class=""> 
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required>
            </div>
          </div>
            <div class="form-group">
            
            <div class=""> 
              <input type="password" name="confirm_password" class="form-control" id="pwd" placeholder="Confirm Password" required>
            </div>
          </div>
          <br>
          <div class="form-group"> 
            <div class="">
              <button type="submit" class="text-center btn btn-success" name="verify_code">Send</button><br><br>
            </div>
          </div>
        </form>
  </div>
</div>

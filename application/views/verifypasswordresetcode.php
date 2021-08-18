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

        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('home/verifypassword')?>">
          <div class="form-group col-sm-10">
            <label class="" for="email">Enter Password Reset Code</label>
            <div class="">
              <input type="text" name="resetcode" class="form-control" placeholder="Enter Code Here" required>
            </div>
          </div>
          <br>
          <div class="form-group col-sm-10"> 
            <div class="">
              <button type="submit" class="text-center btn btn-primary" name="verify_code">Verify</button><br><br>
            </div>
          </div>
        </form>
  </div>
</div>

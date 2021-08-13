<div class="row">
      <div class="col-md-6 col-md-offset-5">

      <?php  if ($this->session->flashdata('error')) {

echo '<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('error').  '</div>' ;}?> 





<?php  if ($this->session->flashdata('success')) {

echo '<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('success').  '</div>' ;} ?> 
    </div>
      <div class="col-md-4 col-md-offset-4">
       <p class=""><a class="pull-right" href="<?php echo base_url('home/login')?> "> Login</a></p><br>
       <?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>',  '</div>'); ?>

<form class = 'form-horizontal', method="post" id = 'registration', role = 'form', action="<?php echo base_url('home/register')?>">
            
          <div class="form-group">
            <label class="control-label col-sm-2" for="name"></label>
            <div class="col-sm-10">
              <input type="name" name="name" value="" class="form-control" id="name" placeholder="Enter Full Name" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="sex"></label>
            <div class="col-sm-10">
              <select type="" name="sex" class="form-control" id="sex" >
                  <option value="">Select Sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Secret">N/A</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" class="form-control" id="email" placeholder="Enter Email" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"></label>
            <div class="col-sm-10"> 
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" >
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"></label>
            <div class="col-sm-10"> 
              <input type="password" name="confirm_password" class="form-control" id="pwd" placeholder="Confirm Password" >
            </div>
          </div>
        
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox" > Accept Agreement</label>
              </div>
            </div>
          </div>

          <div class="form-group"> 
            <div class="text-center col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary pull-right" name="submit_registration">Register</button>
              <a class="pull-left btn btn-danger" href=""> Cancel</a>
            </div>
          </div>
    </form>
         
          
  </div>
</div>
          
  </div>
</div>
  
<div class="row">
      <div class="col-md-6 col-md-offset-3">
      </div>
      <div class="col-md-4 col-md-offset-4">  
      <?php  if ($this->session->flashdata('error')) {

echo '<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('error').  '</div>' ;}?> 

<?php  if ($this->session->flashdata('success')) {

echo '<div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'. $this->session->flashdata('success').  '</div>' ;} ?> 


      
       <p class=""><a class="pull-right" href="<?php echo base_url('home/register') ?>"> Register</a></p><br>
        <form class="" role="form" method="post" action="controller/method">
          <div class="form-group">
            
            <div class="">
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
            </div>
          </div>
          <div class="form-group">
            
            <div class=""> 
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required>
            </div>
          </div>

          <div class="form-group"> 
            <div class="">
              <button type="submit" class="text-center btn btn-primary" name="submit_login">Login</button><br><br>
              <div class="text-center" ><a href=" controller/method ?>">Forgot Password ? </a></div>
            </div>
          </div>
        </form>
  </div>
</div>

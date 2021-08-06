<div class="row">
      <div class="col-md-6 col-md-offset-3">
      </div>
      <div class="col-md-4 col-md-offset-4" style="background-color: #fff; border: 1px solid #ddd; padding: 10px;">
      
      
       <!--Echo validation error-->
   
      
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
              <button type="submit" class="btn btn-success text-center" name="verify_code">Send</button><br><br>
            </div>
          </div>
        </form>
  </div>
</div>

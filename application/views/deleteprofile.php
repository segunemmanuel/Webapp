<div class="container">
 
        <div>
            <header class="section_header">
                <h4>Deleting Your Profile</h4><hr>
                
            </header>
        <div class="col-md-6 col-md-offset-3">
               
               <div class="alert alert-danger text-center">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong></strong> Your Profile will be Completely Deleted. This action is irreversible 
                    </div>
                    <br><br>
                <form action="<?php base_url('controller/method')?>" method="post" role="form">
                     <div class="form-group">
                      <div class="">
                        <input type="hidden" class="form-control" name="deleteEmail"  value="<?php echo 'session email' ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="">
                        <button type="submit" class="btn btn-danger" name="delete_profile">Yes Delete</button><a href="<?php echo base_url('dashboard') ?>" class="btn btn-default pull-right">Cancel</a><br><br>
                      </div>
                    </div>
                </form>
                    <br />

                                
            </div>
                                    
       </div>

  
</div><!--page content-->

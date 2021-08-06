   <div class="container">
   
   
 
    <div class="col-sm-12" style="padding: 10px; background-color: white; border: 1px solid #ddd;"><i class="fa fa-user" style="font-size:28px"> Profile of <?php echo 'fullname'; ?> </i> 
    </div>
    <br><br>
    <?php
        
             echo '<br><br><div class="alert alert-danger alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>You are Viewing Profile As Yourself</div>';
        
     ?>
    
    <br><br>
    <a href="<?php echo base_url("agents") ?>"><button class="btn btn-default pull-right">Back to Agents</button></a>
    <br><br><br>
 

    <div style="padding: 20px; background-color: white; border: 1px solid #ddd;" id="page-content">

       
<?php
    
        echo '<h5 style="color: #841990">Membership Status: Hidden</h5>';
    
   
        echo '<button type="button" class="btn btn-default">Basic Account ID: <span class="badge">BS ' . id here. '</span></button>';
  
        echo '<button type="button" class="btn btn-default">Premium Account ID: <span class="badge">PR ' . substr($result->transaction_id, 0,5) . '</span></button>';
   

 ?>       

          <hr>

        <div class="row" style=" padding: 2px; border-bottom: 4px solid #841990;">
              <div class="col-md-3 col-sm-4 text-center"><br><br>
              <a href="updateprofile.php"><img src="<?php echo base_url('folderhere') ?>/<?php echo 'imagename' ; ?> " class="img-rounded pull-left img-responsive" alt="Upload a Profile Image and complete your Profile" width="100%" height="180" style="border: 1px solid #841990;"></a>
              
              </div><br>
              
              <div class="col-md-6 col-sm-12" >
                <h1><?php echo 'fullname' ?></h1>
                 
                 <h4 style="color: #ccc"><?php echo 'profession here' ; ?> </h4>
                 
                  <p><?php echo 'summary here' ; ?> </p><br>
              </div>
              
              <div class="col-md-3 col-sm-12" style="border-left: 1px solid #ddd;">
                <?php 
                 echo '<h5 style="color: #841990"><p style="color: #841990"><i class="fa fa-eye"></i> Certification Hidden</p></h5>';
                   
                        echo '<h5 id="uploadDiv2" style="color: #841990"><a href="../../userFiles/Attachedfile name here" target="_blank" style="color: #841990"><i class="fa fa-eye"></i> View Certification</a>
                        <br>';
                   
                 ?>
                <hr>
                <?php 
                    echo '<h5 style="color: #841990">Membership Reason: <br><br>Reason Hidden</h5>';
    
                        echo '<h5 style="color: #841990">Membership Reason: <br><br>membershipreason</h5>';

                 ?> <hr>
   
              </div>
              <br>
              
        </div><br>
        
        
         <!-- Modal Messaging Agent-->
                    <div id="msgagent" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Messaging <?php echo 'fullname' ?></h4>
                          </div>
                          <div class="modal-body">
                        
                            <form class="" role="form" method="post" action="">

                                <div class="form-group">
                                    <label for="receiver_email">Email <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" name="receiver_email" value="<?php echo 'email here'  ?>" class="form-control" placeholder="" disabled>
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Type Message Here "></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><span class="required"></span><input type="checkbox" value="2" name="notify">Notify by Email</label>
                                </div>

                                <div class="form-group">
                                    <button type="submit" id="contact_form_submit" name="msg_client" class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      

                      </div>
                    </div>
                    
  
</div><!--page content-->

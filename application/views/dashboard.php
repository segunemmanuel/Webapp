<div class="container">

    <div class="col-sm-12" style="padding: 10px; background-color: white; border: 1px solid #ddd;"><i class="fa fa-dashboard" style="font-size:28px"> Dashboard</i> <a href="<?php echo base_url('controller/methodhere') ?>" class="btn btn-default pull-right">Update Profile</a></div> <hr> <br><br>
    

    
     <div class="alert alert-info text-center"><br>
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&nbsp;&nbsp; &times;</a>

        <div class="progress">
          <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="50"
          aria-valuemin="0" aria-valuemax="100" style="width:50%; background-color: #6c1f74;">
          <p style="color:white; font-size=14px;"></p>
          </div>
        </div><div class="progress" style="">
          <div class="progress-bar progress-bar-success progress-bar-success" role="progressbar" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color: #6c1f74;">
          <p style="color:white; font-size=14px;"></p>
          </div>
        </div> 

    </div>



    <div style="padding: 20px; background-color: white; border: 1px solid #ddd;" id="page-content">
       
       
<?php
   
        echo '<h5 style="color: #841990">Membership Status: Hidden From Public</h5>';
    
?>    
   <?php    
   
        echo '<button type="button" class="btn btn-default">Basic Account ID: <span class="badge">BS43454</span></button>';
    
        echo '<button type="button" class="btn btn-default">Premium Account ID: <span class="badge">PR45464565</span></button>';
    

 ?>
  
  <?php    
    
        echo ' <a data-toggle="modal" data-target="#downloads" class="btn btn-info"><i class="fa fa-download"></i> Download File</a>';
   
  
    ?>
                                   
   
    <a href="<?php echo base_url("messagescontroller") ?>"><button type="button" class="btn btn-default">Messages <span class="badge"><?php echo 'inbox messages here' ?></span></button></a>
         

    <?php  ?>     
    <a href="<?php echo base_url('controller/method') ?>"><button type="button" class="btn btn-default">Saved Order <span class="badge"> $ 
    <?php echo 'total order results here' ; ?> </span></button>Checkout</a>
    <?php ?>
    <hr>
           
    <script>
    $(document).ready(function(){
        
        //JQUERY code for uploading image
        
    });    
    </script>
          
    <script>
    $(document).ready(function(){
        
        //Jquery code for uploading file
        
    });
        
    </script>
       
    <script>
    $(document).ready(function(){
        
        //JQuery code for viewing profile
        
    });             
    </script>       
            
            <div class="row" style=" padding: 2px; border-bottom: 4px solid #841990;">
              <div class="col-md-3 col-sm-4 text-center" id="uploadDiv" ><br>
                <div>
                   <a class="btn btn-primary" style="color: #fff" id="button" href="<?php echo base_url('controllertouploadimage') ?>"><i class="fa fa-pencil"> Upload a New Image</i> </a>
                </div><br>
              <img src="<?php echo base_url('imagesfolder') ?>/<?php echo 'image name here'; ?> " class="img-rounded pull-left img-responsive" alt="Upload a Profile Image" width="100%" height="180" style="border: 1px solid #841990;">
              </div><br>
              
              <div class="col-md-6 col-sm-12" >
                <h1><?php echo 'fullname here'; ?></h1>
                 
                 <h4 style="color: #aaa"><?php echo 'name of profession here'; ?> </h4>
                 
                  <p><?php echo 'summary here'; ?> </p><br>
              </div>
              
              <div class="col-md-3 col-sm-12" style="border-left: 1px solid #ddd;">
               
               <h5 style="color: #841990" id="ViewProfileDiv"><a href="<?php echo base_url("agentscontroller") ?>" style="color: #841990"><i class="fa fa-group btn btn-default"></i> Find Agents</a><br>
               <a href="<?php echo base_url("controller/method") ?>/?userid=<?php echo 'session id here' ?>" id="button3">View Public Profile</a></h5>
               <hr>
                <?php 
    
                 echo '<h5 style="color: #841990"><p style="color: #841990">Your Certification Is Hidden From Public</p></h5>';
                   
                   ?> 
                <?php                                               
                        echo '<h5 id="uploadDiv2" style="color: #841990"><a href="filesfolder/fileattachedname" target="_blank" style="color: #841990"><i class="fa fa-eye btn btn-default"></i> View Your Certification</a>
                        <br>
                        <a href="'. base_url('profileupdatecontroller') .'"><i class="fa fa-pencil" id="button2"> Upload a New File</i></a></h5>';
                    
                 ?>
    
                 <hr>
                 
                 <h5 data-toggle="modal" data-target="#adminmsg" style="color: #841990"><i class="fa fa-envelope btn btn-default"></i> Message Support</h5> <hr>
                    
                <?php 
                  
    
                    echo '<a href=" '. base_url("controller/method/paramiter"). '" style="color:#841990">Upgrade Membership</a><br><hr>';
                  
                      
                      echo '<h5 data-toggle="modal" data-target="#billing" style="color: #841990"><i class="fa fa-money btn btn-default"></i> View Billing History</h5> <hr>';
                 
                  
                   ?>                     
                
                <?php 
                    
                    echo '<h5 style="color: #841990">Membership Reason Hidden From Public</h5>';
                    
                    
                    ?>
                 
                    <h5 style="color: #841990">Your Reason is : <?php echo 'reason here' ?> </h5>
    
                 <hr>
   
              </div>
              <br>
              
        </div><br>
           
           

        </div> <br>
        
              <!-- Modal Messaging Support-->
                    <div id="adminmsg" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Messaging Support</h4>
                          </div>
                          <div class="modal-body">
                            <?php $attributes = array('role' => 'form' ); ?>
                             <?php echo form_open_multipart('controller/method', $attributes);?>
                                <div class="form-group">
                                    <label for="receiver_email">Choose Support Department <span class="required">*</span></label>
                                     <select type="select" name="support_email" class="form-control" id="sex" >
                                          <option value="put a real email here for testing">IT Support</option>
                                          <option value="biling@virtualines.com">Billing Support</option>
                                          <option value="admin@virtualines.com">Adminstration Support</option>
                                          <option value="support@vitualines.com">General Support</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Type Message Here " required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><span class="required"></span><input type="checkbox" value="<?php echo 'fileattached name here'; ?>" name="attachment">Attach Certification</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="msg_support" class="btn btn-default">Submit</button>
                                </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>

                      </div>
                    </div>

                <!-- Modal  Billing History-->
                    <div id="billing" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                        
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Your Billing History</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">                    
                                <div>

                                <div class="col-md-12">

                                       <table class="table table-bordered table-hover" style="background-color: #fff">

                                            <tr class="info">
                                            <td class="text-center"><strong>Transaction ID</strong></td>
                                            <td class="text-center"><strong>Amount</strong></td>
                                            <td class="text-center"><strong>Date</strong></td>
                                            <td class="text-center"><strong>Report an Issue</strong></td>
                                            </tr>

                                            <tr>
                                            <td class="text-center"><br><?php echo 'transaction id here' ?></td>
                                            <td class="text-center"><br> $ <?php echo 'amount here' ?></td>
                                            <td class="text-center"><br><?php echo 'dates' ?></td>
                                            <td class="text-center"><br><h5 data-toggle="modal" data-target="#adminmsg" data-dismiss="modal" style="color: #841990"><i class="fa fa-envelope btn btn-default"></i> Report</h5></td>
                                            </tr>

                                        </table>

                                </div>

                                </div>

                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    
                    
                    <!-- Modal Downloads-->
                    <div id="downloads" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Your Downloads </h4>
                            
                          </div>
                          <div class="modal-body">
                               <div class="row"> 
                                <div class="col-md-12">
                                       <table class="table table-bordered table-hover" style="background-color: #fff">
                                           
                                            <tr class="info">
                                            <td class="text-center"><strong>Transaction ID</strong></td>
                                            <td class="text-center"><strong>Download File</strong></td>
                                            <td class="text-center"><strong>Report an Issue</strong></td>
                                            </tr>
                                            <tr>
                                            <td class="text-center"><br><?php echo transaction id here; ?></td>
                                            <td class="text-center"><br>
                                                <div class="dropdown">
                                                      <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-download"></i> Download File
                                                      <span class="caret"></span></button>
                                                      <ul class="dropdown-menu">
                                                        <li><a href="<?php echo base_url('productfolder') ?>/dreal.xlsx">Dubai List</a></li>
                                                        <li><a href="<?php echo base_url('productfolder') ?>/nyreal.xlsx">New York</a></li>
                                                        <li><a href="<?php echo base_url('productfolder') ?>/sreal.xlsx">Singapore</a></li>
                                                      </ul>
                                                </div>
                                            </td>
                                            <td class="text-center"><br><h5 data-toggle="modal" data-target="#adminmsg" data-dismiss="modal" style="color: #841990"><i class="fa fa-envelope btn btn-default"></i> Report</h5></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      

                      </div>
                    </div>
    

  
  
  
</div><!--page content-->

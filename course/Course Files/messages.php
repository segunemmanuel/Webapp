<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-2 col-sm-12"></div>
        
            <div class="col-md-8 col-sm-12">
            
            Echo error and success messages here
        
         
               <div class="text-center" style="padding: 5px; background-color: white; border: 1px solid #ddd;"><h3>Your Messages </h3>
             
               </div><br><a href="<?php echo base_url('dashboardcontroller') ?>" class="btn btn-default pull-right">Back To Dashboard</a><br><br>
        
            
                <section id="contact" class="grey_section" style="padding: 20px; border: 1px solid #ddd; background-color: #fff;">
                    <!--<div class="container"> container disabled-->
                        <div class="row">                    
                       
                            <div class="widget col-md-12 to_animate">
                               <h5>From : <?php echo 'admin email' ?>  </h5> 
                               
                               <h5>Date: <?php echo 'datehere' ?> </h5> 
                               
                               <h5>To: You  </h5><hr>
                               
                               <button class="btn btn-danger pull-left" id="delete" data-toggle="modal" data-target="#deletemesage">Delete Message</button>
                               
                               <a class="btn btn-default pull-right" href="<?php echo base_url('controller/method') ?>/<?php echo 'id' ?>">Follow Update </a>

                            </div>

                        </div>
                    <!--<div"> container disabled-->
                </section>
                
                   
                   <br>
                    
                    <!-- Modal Deleting Messages-->
                        <div id="deletemesage" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm Delete </h4>
                              </div>
                              <div class="modal-body">
                                <form role="form" method="post" action="controller/method">
                                   <span>Are you sure you want to Delete All Messages ? </span> <br><br>
                                    <input type="hidden" value="<?php echo 'id' ?>" name="deleteid">
                                  <button type="submit" name="yesdelete" class="btn btn-danger">Yes Delete</button>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
             
        
            <div class="col-md-2 col-sm-12">
               
                
            </div>  
        
        </div><!--col 8 -->
    </div><!--main row-->
</div>    <br><br><br><br>

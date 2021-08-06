<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-2 col-sm-12"></div>
        
            <div class="col-md-8 col-sm-12">
         
               <div class="text-center" style="padding: 5px; background-color: white; border: 1px solid #ddd;"><h3>Your Messages </h3>
             
               </div><br><a href="<?php echo base_url('messagescontroller') ?>" class="btn btn-default pull-right">Back To Messages</a>
               <br><br>
       
                <section id="contact" class="grey_section" style="padding: 20px; border: 1px solid #ddd; background-color: #fff;">
                    <!--<div class="container"> container disabled-->
                        <div class="row">                    
                       
                            <div class="widget col-md-12 to_animate">
                               <h5>From : <?php echo 'admin email' ?>  </h5> 
                               
                               <h5>Date : <?php echo 'date' ?> </h5> 
                               
                               <h5>To : You  </h5><hr>
                                <span>Message Body</span>
                                <div class="well well-sm"><?php echo 'message' ?> </div>
                                <span>Replies</span>
                                
                                <div class="well well-sm"><?php echo 'reply message' ?> 
                                <span class="pull-right"> - <?php echo 'reply sender' ?></span> 
                                </div>
                                
                                <br><br>
                               <button class="btn btn-primary pull-left" id="delete" data-toggle="modal" data-target="#messageid">Reply</button>

                            </div>

                        </div>
                    <!--<div"> container disabled-->
                </section><br>
                    
                <!-- Modal Reply Messages-->
                    <div id="messageid" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Repling Message </h4>
                          </div>
                          <div class="modal-body">
                         <?php $attributes = array('role' => 'form' ); ?>
                             <?php echo form_open('controller/methods', $attributes);?>
                                <div class="form-group">
                                   <div>
                                    <span>Type Message Below</span><br>
                                    <textarea name="reply_msg" class="form-control" rows="7" required ></textarea>
                                    </div>
                                    <div>
                                        <input type="hidden" name="client_name" value="<?php echo 'session user name' ?> ">
                                    </div>
                                    <div>
                                        <input type="hidden" name="msg_id" value="<?php echo 'id' ?> ">
                                    </div>
                                    <br>
                                    <button class="btn btn-primary" name="reply">Send</button>    
                                    
                                </div>
                           
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
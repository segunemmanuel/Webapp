<div class="container">
 
        <div>
            <header class="section_header">
                <h4>Purchasing Services</h4><hr>
            </header>
        <div class="col-md-6 col-md-offset-3">
              
            echo error messages
              
               <?php 
                    
                if($pages == 1){ ?>
               
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="" for="reason">Select Package:</label>
                         <div class="">
                             <select class="form-control" id="" name="product" required>
                                <option value="Not Defined">Toggle List</option>
                                
                                <option value=""> product names from database </option>
                                
                             </select>
                          </div>
                    </div>

                    
                    <div class="form-group">
                      <div class="">
                        <button type="submit" class="btn btn-primary" name="make_purchase"> Proceed</button><a href="" class="btn btn-danger pull-right" style="color: #fff;">Start Over</a>
                      </div>
                    </div>

                   
            </form>
                    
            <?php } ?>
                    
                    
            <?php 
                    
                if($pages == 2){ 
            
                    get form data and save in a session

                ?>
                
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class="" for="name">Your Product Name</label>
                      <div class="">
                        <input type="name" class="form-control" name="product_name" placeholder="<?php echo 'product name here' ?>" value="<?php echo 'product name' ?>" disabled>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="" for="prof">Your Product Description</label>
                      <div class="">
                        <input type="text" class="form-control" name="product_desc" placeholder="<?php echo 'product description here' ?>" value="<?php echo 'description'  ?>" disabled>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="" for="prof">Your Product Price</label>
                      <div class="">
                        <input type="text" class="form-control" name="price" placeholder="$ <?php echo 'product price here' ?>" value="<?php echo 'product price' ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="">
                        <button type="submit" class="btn btn-primary" name="checkout"> Checkout</button><a href="" class="btn btn-danger pull-right" style="color: #fff;">Start Over</a>
                      </div>
                    </div>

                   
            </form>
                    
            <?php } ?>
                    
            <?php 
                    
                if($pages == 3){ ?>
   
                 <h2>Order Summary</h2><br>
                 
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo 'session product name' ?></td>
                        <td><?php echo 'session product desc'  ?></td>
                        <td><br>$<?php echo 'session product price' ?></td>
                      </tr>
                    </tbody>
                  </table>
                    
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#save" >Save Your Order</button>
                  
                <br><br>
                   
                <?php  echo 'paypal form here'   ?>
                   
                 <!-- Modal Save Order-->
                    <div id="save" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Your Order Details will be Saved.</h4>
                          </div>
                          <div class="modal-body">
                            <form role="form" method="post" action="<?php echo base_url("controller/method") ?>">
                               <input type="hidden" value="<?php echo 'session productName' ?>" name="name">
                               <input type="hidden" value="<?php echo 'session product Desc'  ?>" name="desc">
                               <input type="hidden" value="<?php echo 'session product Price' ?>" name="price">
                               <input type="hidden" value="<?php echo 'session email' ?>" name="email">
                              <button type="submit" name="saveorder" class="btn btn-success">Yes Save Order</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    
            <?php } ?>
                                
            </div>
                                    
       </div>

  
</div><!--page content-->

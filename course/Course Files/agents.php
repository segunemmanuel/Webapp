
<script>
    
$(document).ready(function(){
    
//AJAX CODE HERE
    
});
    
</script>

<div class="container">
    
              <h4 class="">Refine Search <a href="<?php echo base_url("dashboard") ?>" class="btn btn-default pull-right">Back To Dashbaord</a></h4> <br> 
                 <div style="padding: 20px; border: 1px solid #ddd; background-color: #fff;">
                    
                    <div class="row">
                      
                        <div class="col-md-3">
                           <p>Select Location</p>
                            <div class="form-group">
                              
                              <select class="form-control" id="location">
                              
                               
    
                                <option><?php echo 'location here' ?></option>
                             
                              
                                
                              </select>
                            
                            </div>
                        </div>

                         <div class="col-md-9">
                         <p>Which Profession ?</p>
                          <input class='form-control' type="text" name='search' id='search' placeholder='Start Typing..'>
                         </div>
                         <br>
                          
                          <div id="show" class="col-md-12"> 
                          
<!--                           Results Show Here-->
                             
                          </div>
                         
                    </div>
                 </div><br>
               
                <section id="contact" class="grey_section" style="padding: 20px; border: 1px solid #ddd; background-color: #fff;">
                    <!--<div class="container"> container disabled-->
                        <div class="row">                    
                            <div>
                                <header class="section_header">
                                     <h5 class="">Veiwing Members</h5><hr>
                                   
                                </header>
                            <div class="widget col-md-12 to_animate">

                                   <table class="table table-bordered table-hover" style="background-color: #fff">
                                        
                                        <tr class="info">
                                        <td class="text-center"><strong>Full Name</strong></td>
                                        <td class="text-center"><strong>Location</strong></td>
                                        <td class="text-center"><strong>Image</strong></td>
                                        <td class="text-center"><strong>Profession</strong></td>
                                        <td class="text-center"><strong>Profile</strong></td>
                                        </tr>
                                        
                                      
                                        
                                        <tr>
                                        <td class="text-center"><br><?php echo 'fullname here' ?> </td>
                                        <td class="text-center"><br><?php echo 'location' ?></td>
                                        <td class="text-center"><img src="<?php echo base_url('imagefolderhere') ?>/<?php echo 'image name here' ; ?> " class="img-rounded" alt="Image" width="50" height="60"></td>
                                        <td class="text-center"><br><?php echo 'profession here' ?></td>
                                        <td class="text-center"><br><a href="">View Profile</a></td>
                                        </tr>
                                        
                                     
                                    </table>
                                </div>
                                    
                            </div>

                        </div>
                        
                    
                </section>
                
        
  
</div>


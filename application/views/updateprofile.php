<div class="container">
 
        <div>
            <header class="section_header">
                <h4>Updating Your Profile</h4><hr>
                
        echo validation here
           
            </header>
        <div class="col-md-6 col-md-offset-3">
                <form class = 'form-horizontal', role = 'form', action="" >
                    <div class="form-group">
                        <label class="" for="reason">Select Reason for Membership:</label>
                         <div class="">
                             <select class="form-control" id="" name="reason" required>
                                <option value="Not Defined">Select Reason</option>
                                <option value="">Togle Reason</option>
                                <option value="To Find Agents">To Find Agents</option>
                                <option value="To Find Houses">To Find Houses</option>
                                <option value="To Find Friends">To Find Friends</option>
                                <option value="To Find Contracts">To Find Contracts</option>
                             </select>
                          </div>
                    </div>

                     <div class="form-group">
                      <label class="" for="name">Full Name</label>
                      <div class="">
                        <input type="name" class="form-control" name="fullname" placeholder="Enter Full Name" value="">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="" for="prof">Profession</label>
                      <div class="">
                        <input type="text" class="form-control" name="profession" placeholder="Enter Profession" value="">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="" for="facebook">Facebook</label>
                      <div class="">
                        <input type="url" class="form-control" name="facebook" placeholder="Enter facebook url" value="">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="" for="country">Country</label>
                      <div class="">
                        <input type="text" class="form-control" name="location" placeholder="Enter location" value="">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="" for="text">Summary</label>
                      <div class="">
                          <textarea type="text" class="form-control" name="summary" value="" placeholder="In brief, about yourself" rows="10" required></textarea>
                      </div>
                    </div>
                
                    <div class="form-group">
                      <div class="">
                        <button type="submit" class="btn btn-primary" name="update_profile">Update Profile</button><a href="dashboard" class="btn btn-danger pull-right" style="color: #fff;">Cancel</a><hr>
                      </div>
                    </div>

                   
            </form>
                    
                    <br />

                                
            </div>
                                    
       </div>

  
</div><!--page content-->
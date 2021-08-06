<div class="row">
      <div class="col-md-6 col-md-offset-3">
      </div>
      <div class="col-md-4 col-md-offset-4">
        
      <?php echo 'error here';?>
      
       <p class=""><a class="pull-right" href="<?php echo base_url('dashboard') ?>"> Back Dashboard</a></p>
       <br><br><br><br><br>
        <?php $attributes = array('class' => 'form-horizonta', 'id' => 'imageupload', 'role' => 'form' ); ?>
         <?php echo form_open_multipart('controller/method', $attributes);?>
                <div class="form-group">
                    <span class="required"></span>
                    <input type="file" name="userfile" size="30" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Upload" class="btn btn-primary">
                </div>
            </form>
  </div>
</div>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Virtualines</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>
        <!-- Custom CSS -->
        <link href="<?php echo base_url("assets/css/sb-admin.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url("assets/css/plugins/morris.css"); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]
        url(https://lh3.googleusercontent.com/-7kOBhr3B2dE/AAAAAAAAAAI/AAAAAAAAAAA/AOtt-yHs4g14qqNJaJBXAcpIMv_fV9dDGw/s32-c-mo/photo.jpg)
        -->
    </head>
    
    <body style="padding-top: 50px;">            
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">

        <div class="container-fluid" >

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-light" href="" style="color: #f3f3f3"><strong>VIRTUALINES</strong></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""></a></li>
                </ul>
                
         

                <ul class="nav navbar-nav navbar-right">
                 <li class="navbar-text">Welcome fullname here </li>
                  <li class="dropdown">
    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       <?php echo 'image here' ?>
                        </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="fa fa-dashboard"></i> Account</a></li>
                                    <li class="divider"></li>
                                    
                                     <li><a data-toggle="modal" data-target="#settings"><i class="fa fa-cog"></i> Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href=""><i class="fa fa-sign-out"></i> Sign-out</a></li>
                                </ul>
                    </li>
                </ul>
              
            </div>

        </div>

    </nav>
        
    <div class="container-fluid">
    
            <!-- Modal Settings-->
                    <div id="settings" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Account Settings </h4>
                            <h4 class="modal-title" style="color: red">* Note that only Admin can undo changes </h5>
                          </div>
                          <div class="modal-body">
                        
                           <form id ='registration', role = 'form', action="">
                              
                              <div class="form-group">
                                    <label class="checkbox-inline"><span class="required"></span><input type="checkbox" value="2" name="no_cert">Do not Show My Certification</label>
                                </div>
                                 <div class="form-group">
                                    <label class="checkbox-inline"><span class="required"></span><input type="checkbox" value="2" name="no_mem_status">Do not Show My Membership Status </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><span class="required"></span><input type="checkbox" value="2" name="no_mem_reason">Do not Show My Membership Reason</label>
                                </div>
                                

                                <div class="form-group">
                                    
                                    <button type="submit" id="contact_form_submit" name="update_settings" class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        
                          </div>
                          <div class="modal-footer">
                            <a href="" class="btn btn-danger">Delete Account</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      

                      </div>
                    </div>
                    
                    

    
    
    
    
    
    
    
    
    
    
    
    
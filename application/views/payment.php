

<div class="container">
    <div class="row">
        
        <div class="col-md-2 col-sm-12"></div>
        
            <div class="col-md-8 col-sm-12">
                <section id="contact" class="grey_section" style="padding: 20px; border: 1px solid #ddd; background-color: #fff;">
                    <!--<div class="container"> container disabled-->
                        <div class="row">                    
                            <div>
                                <header class="section_header">
                                    <h5>ORDER PROCESSING STATUS</h5><hr>
                                </header>
                            <div class="widget col-md-6 col-md-offset-3 to_animate">
<?php

    // Init cURL
    $paypal_request = curl_init();

    // Set request options
    curl_setopt_array($paypal_request, array
    (
      CURLOPT_URL => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
      CURLOPT_POST => TRUE,
      CURLOPT_POSTFIELDS => http_build_query(array
        (
          'cmd' => '_notify-synch',
          'tx'  => $paymentData['tx'],
          'at'  => $paymentData['token'],
        )),
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_HEADER => FALSE,
    ));

    // Execute request and get response and status code
    $response = curl_exec($paypal_request);
    $status   = curl_getinfo($paypal_request, CURLINFO_HTTP_CODE);

    // Close connection
    curl_close($paypal_request);                         


   if($status == 200 AND strpos($response, 'SUCCESS') === 0 ){

        //Redirect to payment success oage for processing
        redirect('controller/method');
            

    }else{
        
        //show users that transaction was not successful
        
        echo '<div class="alert alert-danger text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
              <strong>Sorry!</strong> Your Transaction was not successful <br><a href=" ' . base_url('controller') . ' " > Please Try Again </a>
            </div>';
    }

                            
                             
                                
?>    
                           
                                       
                            <br />

                                                
                        </div>

                        </div>

     
                      </div>
                    <!--<div"> container disabled-->
                </section>
        
            <div class="col-md-2 col-sm-12"></div>  
        
        </div><!--col 8 -->
    </div><!--main row-->
</div>    <br><br><br><br>
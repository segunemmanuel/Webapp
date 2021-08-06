<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="enter your sandbox paypal email here">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="<?php echo 'session product Name'  ?>">
  <input type="hidden" name="item_name" value="<?php echo 'session product Desc'  ?>">
  <input type="hidden" name="amount" value="<?php echo 'session product Price' ?>">
  <input type="hidden" name="currency_code" value="USD">
  
  <!-- Specify return success and cancel pages. -->
  <input type="hidden" name="return" value="url with controller/method on payment success">
  <input type="hidden" name="cancel_return" value="url with controller/method on cancellation">
  
  

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif"
    alt="PayPal - The safer, easier way to pay online">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
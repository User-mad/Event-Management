<?php
  session_start();
  include './db/db.php';
  
  $amount = $_SESSION['amount'];
  $useremail = $_SESSION['uemail'];
  

 $apiKey = "rzp_test_E4t6tNBzduFgsg";

 $query = "SELECT * from user_register where uemail = '$useremail'";
 $res = mysqli_query($con,$query);
 $r = mysqli_fetch_assoc($res);
 $userid = $r['uid'];
 $username = $r['uname'];
 $userphone = $r['uphone'];
 $useremail = $r['uemail'];


?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="cart_3.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo 10 * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Event"
    data-description="Event Planning"
    data-image="images/logo.png"
    data-prefill.name="<?php echo $username;?>"
    data-prefill.email="<?php echo $useremail;?>"
    data-prefill.contact="<?php echo $userphone;?>"
    data-theme.color="#F15B22"
   
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>
  .razorpay-payment-button {
    display: none;
  }
</style>

<script type="text/javascript">

  $(document).ready(function(){

    $('.razorpay-payment-button').click();

  });

</script>
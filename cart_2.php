<!DOCTYPE html>
<html lang="en">



<head>
<?php include 'head.php'; ?>
</head>
<body class="inner-page">
	
    	<header id="header">
            <?php include 'innertop.php';
             ?>
             <?php
    

    include './db/db.php';
    $useremail = $_SESSION['uemail'];

    $query = "SELECT * from user_register where uemail = '$useremail'";
    $res = mysqli_query($con,$query);
    $r = mysqli_fetch_assoc($res);
    $userid = $r['uid'];
    $username = $r['uname'];
    $userphone = $r['uphone'];
    

    $str = "Select * from cart as c,venue as v where c.vid= v.vid  and uid = '$userid'";
    $res = mysqli_query($con,$str);
    $r2 = mysqli_fetch_assoc($res);

?>
        </header>
        <br>
        <br>
        <br>
        <br>
        <div class="step-nav">
            <div class="container">
                <div class="inner-nav">	
                    <ul>
                        <li class="first fill"><a href="#"><span class="number">1</span><span class="text">Cart Summary</span></a></li>
                        <li class="active"><a href="#"><span class="number">2</span><span class="text">Payment Details</span></a></li>
                        <li class="last"><a href="#"><span class="number">3</span><span class="text">Order Confirm</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>/</li>
                    <li><a href="#">Event Organizers</a>/</li>
                    <li class="active"><a href="#">Payment Details</a></li>
                </ul>
            </div>
        </div>

        <form method="POST">
            <div class="content">
                <div class="container">
                    <div class="bookin-info">
                        <div class="payment-detail">
                            <div class="totalPayment">
                                <div class="total">Total payment to be made :  <span>Rs.<?php echo $r2['t_amount']; ?></span></div>
                                <div class="oderId">Transaction ID : <span><?php $ID = 'EV'.rand(10000,99999).'P'; echo $ID ;?></span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="payment-opction">
                                        <ul>
                                            <li class="active"><a href="javascript:;" id="saveCard">Saved Details<span class="icon icon-arrow-right"></span></a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="payment-type saveCard-info">
                                        <div class="saveCard">
                                            <div class="card-row">Your Information</div>
                                            <div class="card-slide">
                                                <div class="radio-row">
                                                    <label>    
                                                        <span class="card-name">Username :</span>
                                                        <span name="username" class="card-number"><?php echo $username; ?></span>
                                                    </label>
                                                    
                                                    
                                                </div>
                                                <div class="radio-row">
                                                    <label>    
                                                        <span class="card-name">Phone No. :</span>
                                                        <span name="userphone" class="card-number"><?php echo $userphone; ?></span>
                                                    </label>
                                                </div>
                                                <div class="radio-row">
                                                    <label>    
                                                        <span class="card-name">Email :</span>
                                                        <span name="useremail" class="card-number"><?php echo $useremail; ?></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="submit-slide">	
                                                <input name="paynow" type="submit" value="Pay Now" class="btn">
                                                <a href="#" class="cancle">Cancel</a>
                                            </div>
                                            <div class="note"><span class="icon icon-lock"></span>Your payment details are secured via 128 Bit encryption by Version</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
		
        
       

        
        
 <?php

if (isset($_POST['paynow'])) 
{
    






    $_SESSION['amount'] = $r2['t_amount'];
    
    echo "<script>location.href='payscript.php'</script>";



   
    // $str = "Insert into booking(u_id,v_id,d_id,t_amount,date_from,date_to) Select uid, vid, did, t_amount, date_from, date_to from cart where uid= '$userid'";
    // $query = mysqli_query($con, $str);   

    // if($query)
    // {
    //     $str2 = "Delete from cart where uid= '$userid'";
    //     $query2 = mysqli_query($con, $str2);
    //     echo "<script>alert('Booking Successfull');location.href='cart_3.php'</script>";
        
    // }
    // else
    // {
    //     echo mysqli_error($con);
    // }
}
        
        
        
        
        
        
        include 'footer.php'; 
        include 'bottomjs.php';        
        
?>
        
        

    

</body>
</html>


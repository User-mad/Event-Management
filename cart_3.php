<!DOCTYPE html>
<html lang="en">



<head>
<?php include 'head.php'; ?>
</head>
<body class="inner-page">
	
    	<header id="header">
            <?php include 'innertop.php';   ?>
             
            <?php  include './db/db.php'; 
                $useremail = $_SESSION['uemail'];
                

                $query = "SELECT * from user_register where uemail = '$useremail'";
                $res = mysqli_query($con,$query);
                $r = mysqli_fetch_assoc($res);
                $userid = $r['uid'];
            $BID = 'EV'.rand(100000,999999).'P';
      
    $cart =  "SELECT * FROM cart WHERE  uid= '$userid'";
    $result = mysqli_query($con,$cart);
    while ($r = mysqli_fetch_array($result)) {
       $vid = $r['vid'];
       $vcost = $r['vcost'];
       $pid = $r['pid'];
        $pcost = $r['pcost'];
        $did = $r['did'];
        $dcost = $r['dcost'];
        $etype = $r['etype'];
        $guest = $r['guest'];
        $t_amount = $r['t_amount'];
        $datefrom = date('Y-m-d', strtotime($r['date_from'])) ;
        $dateto =  date('Y-m-d', strtotime($r['date_to']));
        $pdate = date("Y-m-d");
       
        
    }    
    $str = "Insert into booking(b_id,u_id,v_id,vcost,p_id,pcost,did,dcost,etype,guest,t_amount,date_from,date_to,p_date) VALUES('$BID','$userid','$vid','$vcost','$pid','$pcost','$did','$dcost','$etype','$guest','$t_amount','$datefrom','$dateto','$pdate')";
    $query = mysqli_query($con, $str);   
    if($query)
    {
       $str2 = "Delete from cart where uid= '$userid'";
        $query2 = mysqli_query($con, $str2);
       
        
    }
    else
    {
        echo mysqli_error($con);
    } 
     
    $fstr = "SELECT * from foodcart WHERE vid = '$vid' AND uid = '$userid'";
    $result1 = mysqli_query($con,$fstr);
    while ($r1 = mysqli_fetch_array($result1)) {
      
       
        $fid = $r1['fid'];
        $ftype = $r1['ftype'];
         $fpeople = $r1['fpeople'];
        
         $fprice = $r1['price'];
         $fdate = date('Y-m-d', strtotime(($r1['fdate'])));
         
         $fstr1 = "Insert into bookedfood(bid,fid,ftype,fpeople,price,fdate) VALUES('$BID','$fid','$ftype','$fpeople','$fprice','$fdate')";
         $result2 = mysqli_query($con, $fstr1);   




    }   
       $str3 = "Delete from foodcart where uid= '$userid'";
        $query3 = mysqli_query($con, $str3);
       
        
    

    $estr =  "SELECT * from ecart WHERE vid = '$vid' AND uid = '$userid'";
    $result3 = mysqli_query($con,$estr);
    while($r2 = mysqli_fetch_array($result3)){
        $eid = $r2['eid'];
        $edate = date('Y-m-d', strtotime(($r2['edate'])));
        $eprice = $r2['eprice'];

        $estr1 =  "Insert into bookedentertainment(bid,eid,eprice,edate) VALUES('$BID','$eid','$eprice','$edate')";
        $result4 = mysqli_query($con,$estr1);

    }
       $str4 = "Delete from ecart where uid= '$userid'";
        $query4 = mysqli_query($con, $str4);
       
        
     //   echo"  <script> swal('Success', 'Payement Successfull ', 'success')      </script>";
   
         
    
            
            
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
                        <li class="fill"><a href="#"><span class="number">2</span><span class="text">Payment Details</span></a></li>
                        <li class="last active"><a href="#"><span class="number">3</span><span class="text">Order Confirm</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>/</li>
                    <li><a href="#">Event Organizers</a>/</li>
                    <li class="active"><a href="#">Order Confirm</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="bookin-info">
                    <div class="bookin-infoRow">
                        <div class="bookin-id">Booking ID : <span> <?php echo $BID ;?></span></div>
                        <div class="date"><?php echo $pdate; ?></div>
                    </div>
                    <div class="thanks-msg">
                        <div class="icon icon-right-sign"></div>
                        <h3>Thank you for your payment</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="note">
                        <div class="inner-block">
                            <div class="icon icon-info"></div>
                            <label>Important Information</label>
                            <p>Please carry any valid photo id proof at the venue</p>
                        </div>
                    </div>
                    <div class="contact-info">Check your complete order on  <a href="profile.php">My Orders</a></div>
                    <div class="bottom-blcok">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-assurance"></div>
                                <span>100% Assurance</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummybook</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="icon icon-trust"></div>
                                <span>Trust</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummybook</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="icon icon-promise"></div>
                                <span>Our Promise</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummybook</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
<?php 

include 'footer.php'; 
include 'bottomjs.php';

?>
        
</body>
</html>


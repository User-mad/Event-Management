<!DOCTYPE html>
<html lang="en">


<?php

    include './db/db.php';
    

?>
<head>
    
<?php include 'head.php'; ?>    

</head>
<body class="inner-page">
	
    	<header id="header">
            <?php include 'innertop.php';
                   
                 
$email=$_SESSION['uemail'];
$query = "SELECT * from user_register where uemail = '$email'";
$res = mysqli_query($con,$query);
$r = mysqli_fetch_assoc($res);
$userid = $r['uid'];


$str="select * from user_register where uemail='$email'";


$query=mysqli_query($con,$str);
while($result=mysqli_fetch_array($query))
 {
     $name=$result['uname'];
     $password = $result['upassword'];
   
   $phone=$result['uphone'];
   $wallet = $result['wallet'];
  
   
   }
 

            ?>
        </header>
        <br>
        <br>
        <br>
        <div class="dashboard-banner">
            <div class="container">
                <h2>My Dashboard</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="innerhome.php">Home</a>/</li>
                        <li class="active"><a href="profile.php">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="my-account">
                    <div class="account-tab">
                        <ul>
                            <li  class="active"><a href="javascript:void(0);" id="profile">Profile</a></li>
                            <li><a href="javascript:void(0);" id="order">Order</a></li>
                            <li><a href="javascript:void(0);" id="changePassword">Change Password</a></li>
                        </ul>
                    </div>
                    <div class="tab-content profile-con open">
                        <div class="personal-edit">
                            <a href="#"><span class="icon icon-pencile"></span>Edit Profile</a>
                        </div>
                        <div class="personal-information">
                            <div class="info-slide">
                                <p><span>Name :</span><?php echo $name; ?> </p>
                            </div>
                            <div class="info-slide">
                                <p><span>Email ID :</span><?php echo $email; ?> </p>
                            </div>
                            <div class="info-slide">
                                <p><span>Mobile Number :</span><?php echo $phone; ?> </p>
                            </div>
                           
                            <div class="info-slide">
                                <p><span>Wallet : </span>Rs.<?php echo $wallet; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                     $bquery = "SELECT * FROM booking where u_id = '$userid'";
                     $bresult = mysqli_query($con,$bquery);
                     while ($br = mysqli_fetch_array($bresult)) {

                        $vid = $br['v_id'];
                        $str5 = "SELECT * from venue WHERE vid = '$vid'";
                        $res5 = mysqli_query($con, $str5);
                        while ($r6 = mysqli_fetch_array($res5)) {
                            $vname = $r6['vname'];
                            $vaddress = $r6['vaddress'];
                        }
                         ?>
                    <div class="tab-content order-con ">
                        <table class="booking-viewTable">
                            <tr>
                                <th>Booking ID</th>
                                <th class="detail">Booking Details</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Paid Amount</th>
                                <th>Booking Date</th>
                                <th>Download Booking</th>
                            </tr>
                            <tr>
                                <td><span class="small-heading">Booking ID</span><?= $br['b_id']; ?></td>
                                <td class="detail">
                                    <span class="small-heading">Booking Details</span>
                                    <div class="detailTd">
                                        <label><?php echo $vname; ?></label>
                                        <p><?php echo $vaddress; ?></p>
                                      
                                    </div>
                                </td>
                                <td><span class="small-heading">Booking Date</span><?php echo $br['date_from']; ?></td>
                                <td><span class="small-heading">Event Date</span><?php echo $br['date_to']; ?></td>
                                <td><span class="small-heading">Paid Amount</span>Rs. <?php echo $br['t_amount']; ?></td>
                                <td><span class="small-heading">Meals</span><?php echo $br['p_date']; ?></td>
                                <td><span class="small-heading"></span> <a href="makepdf.php?id=<?php echo $br['b_id']; ?>" class="button">Download</a></td>
                            </tr>
                        </table>
                   
                        <div class="booking-status">
                            <a href="cancelbooking.php?id=<?php echo $br['b_id']; ?>"" class="cancel">Cancel your Booking</a>
                            <div class="status">Status :<span> Booked</span></div>
                        </div>
                       
                    </div>
                    <?php
                     }
                        ?>
                    <div class="tab-content changePassword-con">
                    <form method="POST">
                        <div class="change-password ">

                            <div class="input-box">
                                <input type="text" name="cpass" placeholder="Current Password">
                            </div>
                            <div class="input-box">
                                <input type="text" name="npass" placeholder="New Password">
                            </div>
                            <div class="input-box">
                                <input type="text" name="cnpass" placeholder="Confirm Password">
                            </div>
                            <div class="submit-box">
                            <input type="submit" name="save" value="Save" class="btn">
                            </div>
                        </div>
                     </form>   
                    </div>
                </div>
                <div class="functionality-view">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-lead-management"></div></div>
                                <h3>Lead Management</h3>
                                <p>Increase occupancy, automate the lead management process, grow your  customer relationships, match sales-ready leads to the appropriate sales people.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-sales"></div></div>
                                <h3>Sales</h3>
                                <p>Track sales opportunities, manage the sales process and generate proposals. Built-in process provides an aggregate view of account activity from the past, present and future.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-booking"></div></div>
                                <h3>Booking</h3>
                                <p>Manage calendars , share availability, easily view events color-coded by status, type or location. Book and manage multiple spaces, venues, and sites all from one master calendar.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="functionality-box">
                                <div class="iconBox"><div class="icon icon-operations"></div></div>
                                <h3>Operations</h3>
                                <p>Assign resources and review stock alerts. Create detailed reports, work orders, and generate invoices. Receive alerts on changes as they take place.</p>
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
<?php 

if (isset($_POST['save'])) {

$cpass = $_POST['cpass'];
$npass = $_POST['npass'];
$cnpass = $_POST['cnpass'];
if($password == $cpass)
{
    $cpass = "UPDATE user_register SET upassword = '$npass' where uemail = '$email' ";
    if(mysqli_query($con,$cpass))
    {   echo"  <script> swal('Success', 'Password Changed Successfull! ', 'success')
        .then((value) => {location.href='profile.php'}); </script>";

    }
    

}
else{
    echo"  <script> swal('Sorry!', 'Something went wrong.', 'error')
    .then((value) => {location.href='profile.php'}); </script>";
}

}
?>


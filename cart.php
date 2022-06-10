<!DOCTYPE html>
<html lang="en">



<head>
<?php include 'head.php'; ?>

<meta charset=“UTF-8”>
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

    
  
    $str = "Select * from cart as c,venue as v where c.vid= v.vid   and uid = '$userid'";
    $res = mysqli_query($con,$str);
    $r = mysqli_fetch_assoc($res);

    if (mysqli_num_rows($res) == 1) {
        $str2 = "Select * from cart as c,decoration as d where c.did= d.id   and uid = '$userid'";
        $res2 = mysqli_query($con, $str2);
        $r2 = mysqli_fetch_assoc($res2);

        $pstr = "Select * from cart as c,photographer as p where c.pid= p.pid   and uid = '$userid'";
        $pres = mysqli_query($con, $pstr);
        $pr = mysqli_fetch_assoc($pres);

    
        $date1 = date_create($r['date_from']);
        $date2 = date_create($r['date_to']);
    

        // if($r['etype'] == 'Wedding')
        // {
        //     $totaldate = date_diff($date1,$date2);
        //     $tdate=$totaldate->format("%a");
        // }
        // else if($r['etype'] == 'Birthday' || $r['etype'] == 'Party')
        // {
        //     $tdate= 1 ;

        // }

        if ($r['etype'] == 'Birthday' || $r['etype'] == 'Party') {
            $totdate = 1;
            $tdate = 1;
        } elseif ($r['etype'] == 'Wedding') {
            $totdate;
            $totaldate = date_diff($date1, $date2);
            $totdate = $totaldate->format("%a");
            $totdate = $totdate + 1;
            $tdate=$totaldate->format("%a");
        }

    

  
        //difference between two dates

//     $datefrom=$r3['date_from'];
//     $dateto=$r3['date_to'];
//     $totaldate = date_diff($datefrom,$dateto);?>
        </header>
        <br>
        <br>
        <br>
        <br>
        <div class="step-nav">
            <div class="container">
                <div class="inner-nav">	
                    <ul>
                        <li class="first active"><a href="#"><span class="number">1</span><span class="text">Cart Summary</span></a></li>
                        <li><a href="#"><span class="number">2</span><span class="text">Payment Details</span></a></li>
                        <li class="last"><a href="#"><span class="number">3</span><span class="text">Order Confirm</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="container">
                <div class="bookin-info">
                    <table class="bookin-table">
                       
                        <tr>
                        <th colspan="6" class="table-heading">Event : <?= $r['etype'] ?> <a href="#" class="icon icon-delete"></a></th>
                        </tr>
                        <tr>
                            <th colspan="6" class="table-heading">Venue : <?= $r['vname'] ?> <a href="#" class="icon icon-delete"></a></th>
                            
                           
                        </tr>

                        <tr>
                            <td class="first Theading">Address</td>
                            <td class="Theading">Date From</td>
                            <?php if ($r['etype']=="Wedding") {
    ?>
                            <td class="Theading">Date To</td><?php
} ?>
                            
                            
                            <td class="Theading last">Booking Amount/Per Day </td>
                        </tr>
                        <tr>
                            <td class="first">
                                <label>Address</label>
                                <p><?= $r['vaddress'] ?></p>
                            </td>
                            <td>
                                <label>Booking Date</label>
                                <p><?= $r['date_from'] ?></p>
                            </td>
                            <?php if ($r['etype']=="Wedding") {
        ?>
                            <td>
                                <label>Meal Plans</label>
                                <p><?= $r['date_to'] ?></p>
                            </td>
                            <?php
    } ?>
                          
                            
                            <td class="last">
                                <label>Booking Amount</label>
                                <p><?= $r['vcost'] ?></p>
                            </td>
                        </tr>
                    </table>

                    <table class="bookin-table">
                        <tr>
                            <th colspan="6" class="table-heading">Decoration : <?= $r2['dname'] ?><a href="#" class="icon icon-delete"></a></th>
                        </tr>
                        <tr>
                            <td class="first Theading">Decor Type</td>
                            <td class="Theading">Date From</td>
                            <td class="Theading">Date To</td>
                           
                            <td class="Theading last">Booking Amount/Per Event</td>
                        </tr>
                        
                        <tr>
                            <td class="first">
                                <p><?= $r2['dtype'] ?></p>
                            </td>
                            <td>
                                <p><?= $r2['date_from'] ?></p>
                            </td>
                            <td>
                                <p><?= $r2['date_to'] ?></p>
                            </td>
                            
                            
                            <td class="last">
                                <p><?= $r2['dcost'] ?></p>
                            </td>
                        </tr>
                    </table>
                    <br>
                    
                    <table class="bookin-table">
                        <tr>
                            <th colspan="6" class="table-heading">Photographer : <?= $pr['pname'] ?><a href="#" class="icon icon-delete"></a></th>
                        </tr>
                        <tr>
                            <td class="first Theading">Photographer Type</td>
                            <td class="Theading">Date From</td>
                            <td class="Theading">Date To</td>
                           
                            <td class="Theading last">Booking Amount/Per Day</td>
                        </tr>
                        
                        <tr>
                            <td class="first">
                                <p><?= $pr['ptype'] ?></p>
                            </td>
                            <td>
                                <p><?= $pr['date_from'] ?></p>
                            </td>
                            <td>
                                <p><?= $pr['date_to'] ?></p>
                            </td>
                            
                            
                            <td class="last">
                                <p><?= $pr['pcost'] ?></p>
                            </td>
                        </tr>
                    </table>
                    <br>
                    
                    <table class="bookin-table">
                        <tr>
                            <th colspan="6" class="table-heading">Food Details<a href="#" class="icon icon-delete"></a></th>
                        </tr>
                      
                        <?php
                            $query2 = "SELECT * from foodcart WHERE vid = '$r[vid]' AND uid = '$userid'";
        $result = mysqli_query($con, $query2);
        $foodprice = 0;

        while ($r5 = mysqli_fetch_array($result)) {
            $fid= $r5['fid'];
                              
            $p=  $r5['price'];
            $foodprice = $foodprice + $p ;
                               

            $str5 = "SELECT * from catering WHERE id = '$fid'";
            $res5 = mysqli_query($con, $str5); ?><?php
                                 while ($r6 = mysqli_fetch_array($res5)) {
                                     $foodname = $r6['cname']; ?>
                                       <tr>
                            <td class="first Theading">Food Name</td>
                            <td class="Theading">Booked Date</td>
                            <td class="Theading">No. Of Guest</td>
                            <td class="Theading">Total Price</td>
                           
                        </tr>
                        <tr>
                            <td class="first">
                                <p><?php  echo "$foodname"; ?></p>
                            </td>
                            <td>
                                <p><?= $r5['fdate'] ?></p>
                            </td>
                           
                            <td>
                                <p><?= $r5['fpeople'] ?></p>
                            </td>
                            <td>
                                <p><?= $r5['price'] ?></p>
                            </td>
                            
                        </tr>
                        <?php
                                 }
        } ?>
                    </table>
                    <br>
                    <table class="bookin-table">
                        <tr>
                            <th colspan="6" class="table-heading">Entertainment Details<a href="#" class="icon icon-delete"></a></th>
                        </tr>
                      
                        <?php
                            $query2 = "SELECT * from ecart WHERE vid = '$r[vid]' AND uid = '$userid'";
        $result = mysqli_query($con, $query2);
        $entertainmentprice = 0;
        while ($r5 = mysqli_fetch_array($result)) {
            $eid= $r5['eid'];
            $e = $r5['eprice'];
            $entertainmentprice = $entertainmentprice + $e;
            $str5 = "SELECT * from entertainment WHERE eid = '$eid'";
            $res5 = mysqli_query($con, $str5); ?><?php
                                 while ($r6 = mysqli_fetch_array($res5)) {
                                     $ename = $r6['ename']; ?>
                                       <tr>
                            <td class="first Theading">Entertainment Name</td>
                            <td class="Theading">Booked Date</td>
                        
                            <td class="Theading">Total Price</td>
                           
                        </tr>
                        <tr>
                            <td class="first">
                                <p><?php  echo "$ename"; ?></p>
                            </td>
                            <td>
                                <p><?= $r5['edate'] ?></p>
                            </td>
                           
                            
                            <td>
                                <p><?= $r5['eprice'] ?></p>
                            </td>
                            
                        </tr>
                        <?php
                                 }
        } ?>
                    </table>
                  <br>
                           
                    <table class="bookinTotal">
                        <tr>
                            <td class="subTotal">Total Days : </td>
                            <td class="amount subTotal"><?php echo $totdate; ?></td>
                        </tr>
                        <?php
                            
                            $vcost = ($r['vcost'])*$totdate;
        $dcost = $r2['dcost'];
        $pcost = ($pr['pcost'])*$totdate;
                        
        $total = $vcost + $dcost + $pcost + $foodprice +$entertainmentprice;
        $tax = ($total * 13)/100;
        $final = $total + $tax ; ?>
                            <tr>
                            <td class="subTotal">Total tax : </td>
                            <td class="amount subTotal"><?php echo $tax; ?></td>
                        </tr>
                        <tr>
                            <td >Total Booking Amount to pay : </td>
                            <td class="amount">Rs. <?php echo $final; ?></td>
                        </tr>
                    </table>
                    <form method="POST">
                    <div class="bookinRow">
                        <div class="input-box">
                           
                        </div>
                        <div class="input-box">
                          
                        </div>
                        <div class="button">
                        <input type="submit" name="delete" value="Empty Cart" class="btn">
                        </div>
                        <br><br><br>
                        <div class="button">
                        <input type="submit" name="book" value="Book Now &nbsp" class="btn">
                        </div>
                 
                    </div>
                    </form>
                    <div class="note">
                        <div class="inner-block">
                            <div class="icon icon-info"></div>
                            <label>Important Information</label>
                            <p>Please carry any valid photo id proof at the venue</p>
                        </div>
                    </div>
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
        if (isset($_POST['delete'])) {
            $str = "Delete from cart  where uid = '$userid' ";
            $query = mysqli_query($con, $str);

            $str1 = "Delete from foodcart  where uid = '$userid' ";
            $query1 = mysqli_query($con, $str1);
            $str2 = "Delete from ecart  where uid = '$userid' ";
            $query2 = mysqli_query($con, $str2);
        
            if ($query) {
                echo "<script>location.href='cart.php'</script>";
            } else {
                echo mysqli_error($con);
            }
        }
        
        if (isset($_POST['book'])) {
            $str = "Update cart SET t_amount= '$final' where uid = '$userid' ";
            $query = mysqli_query($con, $str);

            if ($query) {
                echo "<script>location.href='cart_2.php'</script>";
            } else {
                echo mysqli_error($con);
            }
        }
   
        
        
include 'footer.php'; 
}else{
    // echo"<script>swal('Sorry!', 'Cart is Empty!', 'error');</script>";
    // echo "<script>location.href='Innerhome.php'</script>";
    echo"  <script> swal('Sorry!', 'Cart is Empty! ', 'error')
    .then((value) => {location.href='Innerhome.php'}); </script>";
 }      
    
include 'bottomjs.php';

?>
        
</body>
</html>


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
            $useremail = $_SESSION['uemail'];

            $query = "SELECT * from user_register where uemail = '$useremail'";
            $res = mysqli_query($con,$query);
            $r = mysqli_fetch_assoc($res);
            $userid = $r['uid'];


            $query2 = "SELECT * from cart where uid = '$userid'";
            $res2 = mysqli_query($con,$query2);
            
            if(mysqli_num_rows($res2) == 1)
            {

               while($r3 = mysqli_fetch_array($res2)){
                    
                    if($r3['etype'] == 'Wedding')
                    {
                
                        $date;
                        $fdate = $r3['date_from'];
                        $tdate = $r3['date_to'];
                        $array = array();
                        echo "<script>console.log('" . $fdate,$tdate . "');</script>";

                        $date = $fdate; 
                        while($date <= $tdate)
                        {
                            array_push($array,$date);
                            $date = date('Y-m-d', strtotime($date. "+1 days") );
                        }
                    }
                    else if($r3['etype'] == 'Birthday' || $r3['etype'] == 'Party')
                    {
                        $array = array();
                        $fdate = $r3['date_from'];
                        $date = $fdate;
                        array_push($array,$date);
                    }
                }
            }
            
            ?>
        </header>
        <br>
        <br>
        <br>
        <br>
        
        <div>
        <section class="content">
        <div class="breadcrumb">
                    <div class="container">
                        <ul>
                            <li><a href="">Home</a>/</li>
                            <li><a href="">Wedding Planning</a>/</li>
                            <li class="active"><a href="innerentertainment.php">Entertainment</a></li>
                        </ul>
                    </div>
                </div>
               
                <div class="container">
                    <div class="venues-view">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="left-side">
                                    <div class="search">
                                        <div class="search-icon"><div class="icon icon-search"></div></div>
                                        <input type="text" placeholder="Search by name">
                                    </div>
                                    <div class="filter-view">
                                        <div class="filter-block">
                                        <div class="title">
                                                <h2>Entertainment Price</h2>
                                            </div>
                                            <div class="check-slide">
                                                <label ><a href="innerentertainment.php">All</a></label>
                                                
                                            </div>
                                            <div class="check-slide">
                                                <label ><a href="innerentertainment.php?price=20000">&lt; 20000 </a></label>
                                                
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innerentertainment.php?price=30000">&lt; 30000 </a></label>   </div>
                                            <div class="check-slide">
                                            <label ><a href="innerentertainment.php?price=50000">&lt; 50000 </a></label>  </div>
                                          
                                           
                                           
                                        </div>
                                       
                                    </div>
                                   
                                   
                                   
                                </div>
                            </div>
                          
                            <div class="col-md-9 col-lg-9 col-sm-12">
                                <div class="right-side">
                                <?php
                            $query = "SELECT * FROM entertainment";
                            if(isset($_GET['price'])){
                                $price = $_GET['price'];
                                $query .= " where eprice <= '$price' ";
                            }
                            $result = mysqli_query($con,$query);
                            $count=$result->num_rows;
                           ?>
                            <div class="toolbar">
                           <div class="finde-count"><?php $count; echo $count; ?> Entertainment found.  </div>
                           <div class="right-tool">
                           <div class="select-box">
                           <select name="country_id" id="setUp_select" tabindex="1" >
                                                <option>Select Your Date</option>
                                            <?php 
                                            
                                                $count = count($array);
                                                // echo $count;

                                                for($i=0;$i<$count;$i++)
                                                {
                                                   ?>
                                                    <option value="<?php echo $array[$i]; ?>"> <?php echo $array[$i]; ?> </option>
                                                <?php
                                                }
                                            
                                            ?>
                                                </select>
                                            </div> 
                                        
                               
                               <a href="" class="shortlist-btn"><span class="icon icon-heart-filled"></span></a>
                             
                           </div>
                           
                       </div>

                            <?php

                            while($r = mysqli_fetch_array($result))
                            {
                        ?>
                                    <div class="venues-slide last">
                                        <div class="img"><img src="pimages/entertainment/<?php echo $r['eimage1']; ?>" height="100%" width="250px" alt=""></div>
                                        <div class="text">
                                            <h3><?php echo $r['ename']; ?> </h3>
                                            <div class="address"></div>
                                           
                                            <div class="outher-info">
                                               
                                                <div class="info-slide">
                                                    <label>Price Range</label>
                                                    <span>Rs.<?php echo $r['eprice']; ?>/Day</span>
                                                </div>
                                                <div class="info-slide">
                                                    <label>Entertainment Star Rating</label>
                                                    <div class="star">
                                                        <div class="fill" style="width:61%;"></div>
                                                    </div>
                                                </div>
                                                <div class="info-slide">
                                                <label>Contact Number</label>
                                                    <span><?php echo $r['ephone'];?></span>
                                                </div>
                                                <div class="info-slide">
                                                <label>Email</label>
                                                    <span><?php echo $r['eemail'];?></span>
                                                </div>
                                            </div>
                                            <div class="outher-link">
                                                <ul>
                                               
                                                <li><a href="#"><span class="icon icon-calander-check"></span><?php echo $r['edescription'];?></a></li>     
                                            </ul>
                                            </div>
                                            
<br>

                                            <div class="button">
                                                <a href="" id="request<?= $r['eid']; ?>" onclick="return getData(<?=$r['eid']?>,<?=$r['eprice']?>)"  class="btn">Request Booking</a>
                                                
                                           
                                                <script>
                                      
                                     
    
                                        function getData(eid,eprice){
                                            
                                            var sdate = document.getElementById("setUp_select").value;
                                            var request = document.getElementById("request<?= $r['eid'] ?>");
                                            
                                             window.location =   "requestentertainment.php?id="+eid+"&price="+eprice+"&sdate="+sdate ; 
                                            console.log(request.href);
                                            return false;
                                            
                                        }
                                       
                                           
                                           
                                            </script>
                                              
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <?php
                                    echo "<hr>";
                                }
                            ?>
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </section>
        </div>
       

        
        
<?php 

include 'footer.php'; 
include 'bottomjs.php';

?>

</body>
</html>


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
            <?php include 'innertop.php'; ?>
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
                            <li class="active"><a href="innerdecoration.php">Decoration</a></li>
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
                                                <h2>Decoration Type</h2>
                                            </div>
                                            <div class="check-slide">
                                           <label ><a href="innerdecoration.php">All</a></label>  
                                           </div>
                                            <div class="check-slide">
                                            <label ><a href="innerdecoration.php?type=Wedding">Wedding</a></label>  
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innerdecoration.php?type=Birthday">Birthday </a></label> 
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innerdecoration.php?type=Party">Party</a></label>  
                                            </div>
                                            
                                        </div>
                                       
                                    </div>
                                   
                                   
                                   
                                </div>
                            </div>
                          
                            <div class="col-md-9 col-lg-9 col-sm-12">
                               <div class="right-side">
                               <?php
                           $query = "SELECT * FROM decoration";
                           if(isset($_GET['type'])){
                            $dtype = $_GET['type'];
                            $query .= " where dtype = '$dtype' ";
                        }
                           
                           $result = mysqli_query($con,$query);
                           $count=$result->num_rows;
                           ?>
                            <div class="toolbar">
                                        <div class="finde-count"><?php $count; echo $count; ?> Decorations found.  </div>
                                        <div class="right-tool">
                                            <div class="select-box">
                                                
                                            </div>
                                            <div></div>
                                            <a href="" class="shortlist-btn"><span class="icon icon-heart-filled"></span></a>
                                          
                                        </div>
                                        
                                    </div>
                           <?php
                           while($r = mysqli_fetch_array($result))
                            {
                        ?>
                                   <div class="venues-slide last">
                                       <div class="img"><img src="pimages/decoration/<?php echo $r['dimage1']; ?>" alt=""></div>
                                       <div class="text">
                                           <h3><?php echo $r['dname']; ?> </h3>
                                           <div class="address"></div>
                                           <br>
                                           <div class="reviews">3.5 <div class="star"><div class="fill" style="width:70%;"></div></div>reviews</div>
                                           <div class="outher-info">
                                              
                                               <div class="info-slide">
                                                   <label>Price Range</label>
                                                   <span>Rs.<?php echo $r['dcost']; ?>/Event</span>
                                               </div>
                                               <div class="info-slide">
                                                   <label>Decoration Star Rating</label>
                                                   <div class="star">
                                                       <div class="fill" style="width:61%;"></div>
                                                   </div>
                                               </div>
                                               <div class="info-slide">
                                               <label>Decoration Type</label>
                                                   <span><?php echo $r['dtype']; ?></span>
                                               
                                                  
                                               </div>
                                               <div class="venues-link">
                                                   
                                               </div>
                                           </div>
                                           <div class="outher-link">
                                                <ul>
                                                    <li><a href="#"><span class="icon icon-calander-check"></span>Note : Decoration will be booked for a particular event.</a></li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="button">
                                            <a href="innerviewdecoration.php?id=<?php echo $r['id']; ?>"" class="btn">View Details</a>
                                            <a href="requestdecoration.php?id=<?php echo $r['id']; ?>&dcost=<?php echo $r['dcost']; ?>&type=<?php echo $r['dtype']; ?>" class="btn">Request Booking</a>
                                        
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


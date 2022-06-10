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
            <?php include 'top.php'; ?>
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
                            <li class="active"><a href="hentertainment.php">Entertainment</a></li>
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
                                                <label ><a href="hentertainment.php">All</a></label>
                                                
                                            </div>
                                            <div class="check-slide">
                                                <label ><a href="hentertainment.php?price=20000">&lt; 20000 </a></label>
                                                
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hentertainment.php?price=30000">&lt; 30000 </a></label>   </div>
                                            <div class="check-slide">
                                            <label ><a href="hentertainment.php?price=50000">&lt; 50000 </a></label>  </div>
                                          
                                           
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
                                        <div class="img"><img src="pimages/entertainment/<?php echo $r['eimage1']; ?>" height="250px" width="250px" alt=""></div>
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
       

        
        <?php include 'footer.php'; ?>    
    <?php include 'bottomjs.php'; ?>

</body>

</html>


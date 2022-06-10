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
        <div>
        <section class="content">
        <div class="breadcrumb">
                    <div class="container">
                        <ul>
                            <li><a href="">Home</a>/</li>
                            <li><a href="">Wedding Planning</a>/</li>
                            <li class="active"><a href="hcatering.php">Catering</a></li>
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
                                                <h2>Category </h2>
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hcatering.php">All</a></label>  
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hcatering.php?type=Wedding">Wedding</a></label>  
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hcatering.php?type=Birthday">Birthday </a></label> 
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hcatering.php?type=Party">Party</a></label>  
                                            </div>
                                            
                                           
                                        </div>
                                        
                                       
                                    </div>
                                   
                                   
                                   
                                </div>
                            </div>
                          
                            <div class="col-md-9 col-lg-9 col-sm-12">

                                <div class="right-side">
                                <?php
                            $query = "SELECT * FROM catering";
                            if(isset($_GET['type'])){
                                $ctype = $_GET['type'];
                                $query .= " where ctype = '$ctype' ";
                            }
                            if(isset($_GET['ftype'])){
                                $ftype = $_GET['ftype'];
                                $query .= " where ftype = '$ftype' ";
                            }

                            $result = mysqli_query($con,$query);
                            $count=$result->num_rows;
                            ?>
                                <div class="toolbar">
                                        <div class="finde-count"><?php $count; echo $count; ?> Cateres found.  </div>
                                        <div class="right-tool">
                                            <div class="select-box">
                                                
                                            </div>
                                            <div></div>
                                            <a href="" class="shortlist-btn"><span class="icon icon-heart-filled"></span></a>
                                            <div class="link">
                                                <ul>
                                                    <li><a href="hcatering.php?ftype=Veg">Veg</a></li>
                                                    <li><a href="hcatering.php?ftype=Non-Veg">Non-Veg</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                               
                            
                            <?php
                            while($r = mysqli_fetch_array($result))
                            {
                        ?>

                                    <div class="venues-slide last">
                                        <div class="img"><img src="pimages/catering/<?php echo $r['cimage']; ?>" height="260px" width="260px" alt=""></div>
                                        <div class="text">
                                            <h3><?php echo $r['cname']; ?> </h3>
                                            <div class="address"></div>
                                            <br>
                                            <div class="reviews">3.5 <div class="star"><div class="fill" style="width:70%;"></div></div>reviews</div>
                                            <div class="outher-info">
                                               
                                                <div class="info-slide">
                                                    <label>Price Range</label>
                                                    <span>Rs.<?php echo $r['ccost']; ?>/plate</span>
                                                </div>
                                                <div class="info-slide">
                                                    <label>Catering Star Rating</label>
                                                    <div class="star">
                                                        <div class="fill" style="width:61%;"></div>
                                                    </div>
                                                </div>
                                                <div class="info-slide">
                                                <label>Food Category</label>
                                                    <span><?php echo $r['ctype']; ?></span>
                                                </div>
                                                <div class="info-slide">
                                                <label>Food Type</label>
                                                    <span><?php echo $r['ftype']; ?></span>
                                                </div>
                                            </div>
                                            <div class="outher-link">
                                                <ul>
                                                  </ul>
                                            </div>
                                            <div class="button">
                                                
                                                <a href="hviewcatering.php?id=<?php echo $r['id']; ?>"" class="btn">View Details</a>
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


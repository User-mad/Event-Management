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
                            <li class="active"><a href="hphotographer.php">Photographer</a></li>
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
                                                <h2>Photographer Price</h2>
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hphotographer.php">    All </a></label>   </div>
                                            
                                            <div class="check-slide">
                                            <label ><a href="hphotographer.php?price=30000">&lt; 30000 </a></label>   </div>
                                            <div class="check-slide">
                                            <label ><a href="hphotographer.php?price=50000">&lt; 50000 </a></label>  </div>
                                            <div class="check-slide">
                                            <label ><a href="hphotographer.php?price=100000">&lt; 100000 </a></label>  </div>
                                           
                                        </div>
                                        <div class="filter-block">
                                            <div class="title">
                                                <h2>Photography Type</h2>
                                               
                                            </div>
                                            <div class="check-slide">
                                                <label ><a href="hphotographer.php?type=Wedding">Wedding </a></label>
                                                
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="hphotographer.php?type=Birthday"> Birthday </a></label>   </div>
                                            <div class="check-slide">
                                            <label ><a href="hphotographer.php?type=Party"> Party </a></label>  </div>
                                           
                                           
                                        </div>
                                       
                                    </div>
                                   
                                   
                                   
                                </div>
                            </div>
                          
                            <div class="col-md-9 col-lg-9 col-sm-12">
                                <div class="right-side">
                                <?php
                            $query = "SELECT * FROM photographer";
                            if(isset($_GET['price'])){
                                $pprice = $_GET['price'];
                                $query .= " where price <= '$pprice' ";
                            }
                            if(isset($_GET['type'])){
                                $ptype = $_GET['type'];
                                $query .= " where ptype = '$ptype' ";
                            }
                               
                               $result = mysqli_query($con,$query);
                               $count=$result->num_rows;
                               ?>
                                <div class="toolbar">
                                        <div class="finde-count"><?php $count; echo $count; ?> Photographers found.  </div>
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
                                        <div class="img"><img src="pimages/photographer/<?php echo $r['pimage1']; ?>" height="250px" width="250px" alt=""></div>
                                        <div class="text">
                                            <h3><?php echo $r['pname']; ?> </h3>
                                            <div class="address"></div>
                                            <div class="reviews">3.5 <div class="star"><div class="fill" style="width:70%;"></div></div>reviews</div>
                                            <div class="outher-info">
                                               
                                                <div class="info-slide">
                                                    <label>Price Range</label>
                                                    <span>Rs.<?php echo $r['price']; ?>/Day</span>
                                                </div>
                                                <div class="info-slide">
                                                <label>Photography Type</label>
                                                    <span><?php echo $r['ptype'];?></span>
                                                </div>
                                                <div class="info-slide">
                                                <label>Contact Number</label>
                                                    <span><?php echo $r['phone'];?></span>
                                                </div>
                                                <div class="info-slide">
                                                <label>Email</label>
                                                    <span><?php echo $r['pemail'];?></span>
                                                </div>
                                            </div>
                                            <div class="outher-link">
                                                <ul>
                                                  </ul>
                                            </div>
                                            <div class="button">
                                               
                                                <a href="hviewphotographer.php?id=<?php echo $r['pid']; ?>"" class="btn">View Details</a>
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


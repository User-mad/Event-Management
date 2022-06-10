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
                            <li class="active"><a href="innervenue.php">Venue</a></li>
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
                                                <h2>Venue Type</h2>
                                            </div>
                                            <div class="check-slide">
                                            <label  ><a href="innervenue.php" >All </a></label>  
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?type=Banquet Hall">Banquet Hall </a></label>  
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?type=Lawn/Farmhouse">Lawn/Farmhouse </a></label> 
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?type=Resort">Resort </a></label>  
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?type=4 Star Hotel">4 Star Hotel </a></label>      
                                            </div>
                                        </div>
                                        <div class="filter-block">
                                            <div class="title">
                                                <h2>Number of Guests</h2>
                                               
                                            </div>
                                            <div class="check-slide">
                                                <label ><a href="innervenue.php?capacity=100">&lt; 100 </a></label>
                                                
                                            </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?capacity=200">&lt; 200 </a></label>   </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?capacity=500">&lt; 500 </a></label>  </div>
                                            <div class="check-slide">
                                            <label ><a href="innervenue.php?capacity=800">&lt; 800 </a></label>  </div>
                                           
                                        </div>
                                    </div>
                                   
                                   
                                   
                                </div>
                            </div>
                          
                            <div class="col-md-9 col-lg-9 col-sm-12">
                                <div class="right-side">
                                <?php
                           $query = "SELECT * FROM venue";

                           if(isset($_GET['type'])){
                               $vtype = $_GET['type'];
                               $query .= " where vtype = '$vtype' ";
                           }
                           if(isset($_GET['capacity'])){
                               $capacity = $_GET['capacity'];
                               $query .= " where vcapacity < '$capacity' ";
                           }
                           


                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                    <div class="toolbar">
                                        <div class="finde-count"><?php $count; echo $count; ?> Venues found.  </div>
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
                                        <div class="img"><img src="pimages/venue/<?php echo $r['vimage']; ?>" alt=""></div>
                                        <div class="text">
                                            <h3><?php echo $r['vname']; ?> </h3>
                                          
                                            <div class="address"><?php echo $r['vaddress']; ?></div>
                                            <br>
                                            <div class="reviews">3.5 <div class="star"><div class="fill" style="width:70%;"></div></div>reviews</div>
                                            <div class="outher-info">
                                                <div class="info-slide first">
                                                    <label>Seating Capacity</label>
                                                    <span><?php echo $r['vcapacity']; ?></span>
                                                </div>
                                                <div class="info-slide">
                                                    <label>Price Range</label>
                                                    <span>Rs.<?php echo $r['vcost']; ?>/Day</span>
                                                </div>
                                                <div class="info-slide">
                                                    <label>Venue Star Rating</label>
                                                    <div class="star">
                                                        <div class="fill" style="width:61%;"></div>
                                                    </div>
                                                </div>
                                                <div class="info-slide first">
                                                    <label>Venue Type</label>
                                                    <span><?php echo $r['vtype']; ?></span>
                                                </div>
                                               
                                            </div>
                                            <br>
                                                    <div class="button">
                                                <a href="innerviewvenue.php?id=<?php echo $r['vid']; ?>"" class="btn">View Details</a>
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
        
        <?php include 'bottomjs.php' ?>
	



    

</body>
</html>


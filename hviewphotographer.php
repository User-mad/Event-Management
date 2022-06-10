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
            <?php include 'top.php';
            
		  
		  		  
            $pid=$_GET['id'];
            
$str="SELECT * FROM photographer WHERE pid='$pid'";


$query=mysqli_query($con,$str);
while($result=mysqli_fetch_array($query))
 {
    $name=$result['pname'];
    $description=$result['pdescription'];
    $cost = $result['price'];
   
    
    $type = $result['ptype'];
    $image0 = $result['pheader'];
    $image1 = $result['pimage1'];
    $image2 = $result['pimage2'];
    $image3 = $result['pimage3'];
    $image4 = $result['pimage4'];
    $image5 = $result['pimage5'];
    $image6 = $result['pimage6'];
 }
 
            
            ?>
        </header>
        <br>
        <br>
        <br>
       
        <section class="content">
        	<div class="breadcrumb">
            	<div class="container">
                
                </div>
            </div>
        	<div class="search-resultPage">
            	<div class="fiexd-nav">
                	<div class="container">
                    	<div class="back-link"><a href="hphotographer.php"><span class="icon icon-back-filled"></span>Back</a></div>
                        <ul>
                        	<li>
                            	<a href="javascript:;">
                                	<span class="icon icon-info"></span>
                                    <span class="text">Information</span>
                            	</a>
                            </li>
                            
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-thumb-image"></span>
                                    <span class="text">Photo Gallery</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;"> 
                                	<span class="icon icon-special-features"></span>
                                    <span class="text">Special Features</span>
                            	</a>
                            </li>
                           
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-term-condition"></span>
                                    <span class="text"> Terms & Conditions</span>
                            	</a>
                            </li>
                            <li>
                            	<a href="javascript:;">
                                	<span class="icon icon-cancellation-policy"></span>
                                    <span class="text">Cancellation Policy</span>
                            	</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                

                	<div class="row">
                    	<div class="col-lg-12 col-sm-12 col-md-12">
                        	<div class="hotel-info tab-content">
                            	<h2>About the <?php echo $name;?></h2>
                                <div class="inner-info">
                                    <p><?php echo $description;?> </p> <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                  
                                </div>
                            </div>
                            <div class="photo-gallery tab-content">
                            	<h2>Photo Gallery</h2>
                                <div class="gallery-view">
                                	<div class="row">
                                    	<div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/photographer/<?php echo $image; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/photographer/<?php echo $image1; ?>"  height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                          
                                        </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/photographer/<?php echo $image2; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/photographer/<?php echo $image2; ?>"  height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                          </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/photographer/<?php echo $image3; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/photographer/<?php echo $image3; ?>"  height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                          </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                                <a href="pimages/photographer/<?php echo $image4; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                                    <img src="pimages/photographer/<?php echo $image4; ?>"  height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                          </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/photographer/<?php echo $image5; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/photographer/<?php echo $image5; ?>"  height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                          </div>
                                        <div class="col-sm-4 col-xs-6">
                                        	<div class="img">
                                            	<a href="pimages/photographer/<?php echo $image6; ?>" data-lightbox="example-set" data-title="Lorem Ipsum is simply">
                                            		<img src="pimages/photographer/<?php echo $image6; ?>"  height="267px" width="241px" alt="">
                                                </a>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="special-features tab-content">
                            	<h2>Special Features</h2>
                                <div class="featuresInfo">
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                            </div>
                            
                       
                            <div class="terms-conditions tab-content">
                            	<h2>Terms & Conditions</h2>
                                <div class="conditions">
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>Lorem Ipsum is simply dummy </h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            <div class="cancellation-policy tab-content">
                                <h2>Cancellation Policy</h2>
                                <div class="policy">
                                    <h3>1 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>2 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h3>3 policy</h3>
                                    <p>text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                  
                </div>
            </div>
        </section>
        
       

        
        
<?php 

include 'footer.php'; 
include 'bottomjs.php';

?>

</body>
</html>


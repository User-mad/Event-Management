


  <header id="header">
  <?php
    
    include './db/db.php';
    
    if(!isset($_SESSION['uemail']))
    {
        echo "<script>location.href='register.php'</script>";    
    }

    ?>
       
            <nav id="nav-main">
                <div class="container">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a href="innerhome.php" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="single-col">
                                    <a href="Innerhome.php">Home </a>
                                </li>
                                 <li class="single-col">
                                    <a href="#">Vendors<span class="icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="innervenue.php">Venue</a></li>
                                        <li><a href="innercatering.php">Caterers</a></li>
                                        <li><a href="innerdecoration.php">Decor &amp; Florists</a></li>
                                       
                                        <li><a href="innerentertainment.php">Entertainment</a></li>
                                        <li><a href="innerphotographer.php">Photographer</a></li>
                                    

                                    </ul>
                                </li>
                               
                                <li><a href="aboutus.php">About Us</a></li>
                                <li class="single-col">
                                    <a href="">Profile <span class="icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="profile.php">Profile</a></li>
                                       
                                        <li><a href="cart.php">Cart</a></li>
                                       
                                        <li ><a  href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                               
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header> 
      
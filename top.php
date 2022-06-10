
<?php
    include './db/db.php';
   

?>
    <header id="header">
        <nav id="nav-main">
                <div class="container">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                            </button>

                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="Home.php">Home</a>
                                </li>
                                
                                <li>
                                    <a href="#">Vendors <span class="icon icon-arrow-down"></span></a>
                                    <ul>
                                         <li><a href="hvenue.php">Venue</a></li>
                                        <li><a href="hcatering.php">Caterers</a></li>
                                        <li><a href="hdecoration.php">Decor &amp; Florists</a></li>
                                        <li><a href="hentertainment.php">Entertainment</a></li>
                                        <li><a href="hphotographer.php">PhotoGrapher</a></li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="aboutus.php">About Us</a>
                                </li>
                                <li>
                                     <a   href="register.php">Login</a>
                               
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </nav>
        </header>


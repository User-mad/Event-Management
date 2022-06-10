<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phantom-themes.com/circl/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 07:40:35 GMT -->
<head>
      <?php
    
    session_start();
    include 'database.php';
if(!isset($_SESSION['email']))
{
 
  echo "<script>location.href='alogin.php';</script>";
}
else{
  $email = $_SESSION['email'];
}
      
      ?>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Circl - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="../../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../../assets/css/main.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

      
        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                  <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                      <li class="nav-item">
                        <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                     
                    </ul>
                    </div>
                    <div class="logo">
                      <a class="navbar-brand" href="ahome.php"></a>
                    </div>
                    <div class="" id="headerNav">
                      <ul class="navbar-nav">
                      <li class="nav-item">
                        
                        <label  class="nav-link" > Hello , <?php  echo $email; ?></label>
                      </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image-1.png" alt=""></a>
                          <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                            <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                           
                            <a class="dropdown-item" href="alogout.php"><i data-feather="log-out"></i>Logout</a>
                          </div>
                        </li>
                      </ul>
                  </div>
                </nav>
            </div>
            <div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                  <li class="sidebar-title">
                    Main
                  </li>
                  <li>
                    <a href="ahome.php"><i data-feather="home"></i>Dashboard</a>
                  </li>

                  <li class="sidebar-title">
                   Add Facility
                  </li>
                  <li >
                    <a href="addvenue.php"><i data-feather="edit"></i>Add Venue</a>
                  </li>
                  
                  <li >
                    <a href="adddecor.php"><i data-feather="edit"></i>Add Decor & Florist</a>
                  </li>
                  <li >
                    <a href="addentertainment.php"><i data-feather="edit"></i>Add Entertainment</a>
                  </li>
                  <li >
                    <a href="addphotographer.php"><i data-feather="edit"></i>Add PhotoGrapher</a>
                  </li>
                  <li >
                    <a href="addfood.php"><i data-feather="edit"></i>Add Food Combo</a>
                  </li>

                  <li class="sidebar-title">
                   Manage 
                  </li>
                  <li >
                    <a href="mvenue.php"><i data-feather="edit"></i>Manage Venue</a>
                  </li>
                  <li >
                    <a href="mcatering.php"><i data-feather="edit"></i>Manage Catering</a>
                  </li>
                  <li >
                    <a href="mdecoration.php"><i data-feather="edit"></i>Manage Decoration</a>
                  </li>
                  <li >
                    <a href="mentertainment.php"><i data-feather="edit"></i>Manage Entertainment</a>
                  </li>
                  <li >
                    <a href="mphotographer.php"><i data-feather="edit"></i>Manage Photographer</a>
                  </li>

                  <li class="sidebar-title">
                    Additional Services
                  </li>
                  <li>
                    <a href="muser.php"><i data-feather="user"></i>Manage User</a>
                  </li>
                  <li>
                    <a href="morders.php"><i data-feather="calendar"></i>Manage Orders</a>
                  </li>
                 
                          </ul>
            </div>
        
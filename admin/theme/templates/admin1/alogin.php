<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phantom-themes.com/circl/theme/templates/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Apr 2021 07:42:08 GMT -->
<head>


<?php
session_start();
                include 'database.php';
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
    <body class="login-page">
      
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="../../assets/images/logo%402x.png" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Welcome to Event Planning.</p>
                                <p>Please Sign-in to your account.</p>
                            </div>

                            <form method="post">
                                <div class="mb-3">
                                    <div class="form-floating">
                                    <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                    <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>

                                <div class="d-grid">
                                    <input type="submit" value="Sign In" class="btn btn-info m-b-xs"  name="login">
                               
                            </div>
                              </form>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="../../assets/js/main.min.js"></script>
    </body>

    <?php
    if (isset($_POST['login'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
            // $sql = "SELECT * from admin01 where email = '$email' and password = '$password'";

            // $query = mysqli_query($con, $sql);
            // $r = mysqli_fetch_array($query);

            // if (mysqli_num_rows($query) == 1) 
            // {
            //     $_SESSION['email'] = $email;
            //     echo "<script>alert('Login Success.');location.href='ahome.php'</script>";
            // } 
            // else 
            // {
            //     echo "<script>alert('Account Not Exist.');location.href='alogin.php'</script>";
            // }

            if($email == 'occasionplanner46@gmail.com' && $password == 'occasion46')
            {
                $_SESSION['email'] = $email;
                echo "<script>alert('Login Success.');location.href='ahome.php'</script>";
            }
            else{
                echo "<script>alert('Account Not Exist.');location.href='alogin.php'</script>";
            }
    }
    ?>

    </html>
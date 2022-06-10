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
        
        <div class="page">
       
            <div class="container">
            <form method="POST">
                <div class="register-pageLogin">
                    <div class="login-title">
                        <label> Login</label>
                        
                        <a href="forgotpassword.php">Forgot password ?</a>
                    </div>
                    <div class="login-box">
                        <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required="E-mail Require">
                            <div class="icon icon-user"></div>
                        </div>
                        <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                            <div class="icon icon-lock"></div>
                        </div>
                        <div class="submit-box">
                        <input type="submit" name="Login" value="Login" class="btn">
                        </div>
                    </div>
                </div>
            </form>
            </div>
       
            <div class="register-banner">
                <img src="images/banner-img/registration-banneBg.png" alt="" class="register-bannerImg">
                <div class="inner-banner">
                    <div class="text"></div>
                    <div class="register-form">
                        <div class="inner-form">
                        <form method="POST">
                            <h1>Register Now</h1>
                            <div class="form-filde">
                                <div class="input-slide">
                                <input name="email" placeholder="Email ID" type="email" required>
                                </div>
                                <div class="input-slide">
                                <input name="username" placeholder="Username" type="text" required>
                                </div>
                                <div class="input-slide">
                                <input name="password" placeholder="Password" type="password" required>
                                </div>
                                <div class="input-slide">
                                <input name="phone" placeholder="Phone" type="text" required>
                                </div>
                            
                                <div class="submit-slide">
                                <input name="signup" value="Register" class="btn" type="submit">
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="normal-link">
                            <a href="#">More than just a planner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>    
    <?php include 'bottomjs.php'; ?>

</body>

<?php

if (isset($_POST['signup'])) 
{
    $uname = $_POST['username'];
    $uemail = $_POST['email'];
    $phone = $_POST['phone'];
    $upassword = $_POST['password'];
    $wallet = 1000;

    $sql_email_check = "SELECT * from user_register where uemail = '$uemail'";

    $query = mysqli_query($con, $sql_email_check);
    $r = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 1)
    {
        echo "<script>alert('Email already exist.');location.href='Home.php'</script>";
    }
    else
    {
        $sql = "INSERT INTO user_register(uname,uemail,uphone,upassword,wallet) VALUES('$uname','$uemail','$phone','$upassword','$wallet')";

        if (mysqli_query($con, $sql)) {
            $_SESSION['uemail'] = $uemail;
            $_SESSION['uname'] = $uname;
            echo "<script>location.href='email.php'</script>";

        }
        else{
            echo "<script>alert('Registration Failed.');location.href='register.php'</script>";
        }
    }
}

if (isset($_POST['Login'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
        $sql = "SELECT * from user_register where uemail = '$email' and upassword = '$password'";

        $query = mysqli_query($con, $sql);
        $r = mysqli_fetch_array($query);
        

        if (mysqli_num_rows($query) == 1) 
        {
            $_SESSION['uemail'] = $email;
           // echo "<script>alert('Login Success.');location.href='Innerhome.php'</script>";
           echo"  <script> swal('Success', 'Login Successfull! ', 'success')
           .then((value) => {location.href='Innerhome.php'}); </script>";
        } 
        else 
        {
            echo "<script>alert('Account Not Exist.');location.href='Home.php'</script>";
        }
}

?>


</html>


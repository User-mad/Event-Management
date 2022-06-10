<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();
                  
$email=$_SESSION['uemail'];

 include "./db/db.php";
 if (isset($_GET['id'])) {
    $bid = $_GET['id'];

    $str3 = "SELECT * from booking  where b_id = '$bid' ";
    $query3 = mysqli_query($con, $str3);
    while($result3=mysqli_fetch_array($query3))
    {
        $tamount=$result3['t_amount'];
    }
    $str5 = "UPDATE user_register SET wallet = '$tamount' where uemail = '$email' ";
$query5 = mysqli_query($con,$str5);

    $str = "Delete from booking  where b_id = '$bid' ";
    $query = mysqli_query($con, $str);

    $str1 = "Delete from bookedfood  where bid = '$bid' ";
    $query1 = mysqli_query($con, $str1);
    $str2 = "Delete from bookedentertainment  where bid = '$bid' ";
    $query2 = mysqli_query($con, $str2);

    if ($query) {
        echo"  <script> swal('Success', 'Booking Cancelled , Amount will be added to your wallet shortly.  ', 'success')
           .then((value) => {location.href='profile.php'}); </script>";
       // echo "<script>alert('Booking Cancelled Successfull!');location.href='profile.php'</script>";


    } else {
        echo mysqli_error($con);
    }


}



?>
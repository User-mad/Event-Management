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
        if (isset($_GET['id'])) {
            $did = $_GET['id'];
            $str = "Delete from decoration  where id = '$did' ";
            $query = mysqli_query($con, $str);
            if($query)
            {
                echo"  <script> swal('Success', 'Decoration Record Deleted ', 'success')
               .then((value) => {location.href='mdecoration.php'}); </script>";
            }
        }
       


?>
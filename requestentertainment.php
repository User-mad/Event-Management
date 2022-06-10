<?php
session_start();
//echo $_GET['vid'];
include "./db/db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cost = $_GET['price'];
    $date =  date("Y-m-d", strtotime($_GET['sdate']));
    $useremail = $_SESSION['uemail'];

    $query = "SELECT * from user_register where uemail = '$useremail'";
    $res = mysqli_query($con, $query);
    $r = mysqli_fetch_assoc($res);
    $userid = $r['uid'];

    $sql = "SELECT * from cart where uid = '$userid' ";

    $query1 = mysqli_query($con, $sql);
    $r1 = mysqli_fetch_array($query1);
    $vid = $r1['vid'];
    if (mysqli_num_rows($query1) == 1) {
        $esql = "SELECT * from ecart where uid = '$userid' AND vid='$vid' ";
        $equery = mysqli_query($con, $esql);
    
        $float = 0;
        while ($r4 = mysqli_fetch_array($equery)) 
        {
            $edate = date("Y-m-d", strtotime($r4['edate']));
            if ($date == $edate && $userid == $r4['uid'] && $vid ==  $r4['vid'])
             {
                $query3 = "UPDATE ecart SET eid = '$id',eprice = '$cost' WHERE  edate='$edate' AND uid='$userid' AND vid='$vid' ";
                if (mysqli_query($con, $query3)) 
                {
                    echo "<script>alert('Entertainment Updated to Cart Successfully.');location.href='innerentertainment.php'</script>";
                    $float++;
                } else 
                {
                    $float = 0;
                }

                

            }
            
          
        }
        if ($float == 0) {
            $query2 = "INSERT into ecart(uid,vid,eid,eprice,edate) values('$userid','$vid','$id','$cost','$date')";
            if (mysqli_query($con, $query2)) {
                echo "<script>alert('Entertainment Added to Cart Successfully.');location.href='innerentertainment.php'</script>";
            } else {
                echo "<script>alert('Something Went Wrong.');location.href='innerentertainment.php'</script>";
            }
        } else {
            echo "<script>alert('Unable to add entertainment for different event');location.href='innerentertainment.php'</script>";
        }



    }
    else
    {
        echo "<script>alert('Please Select Venue First.');location.href='innervenue.php'</script>";
    }
}
<?php
    session_start();
    //echo $_GET['vid'];
    include "./db/db.php";
    if (isset($_GET['vid'])) {
        
        $vid = $_GET['vid'];
        $vcost = $_GET['vcost'];
        $etype = $_GET['event'];
        $guest = $_GET['guest'];
        $useremail = $_SESSION['uemail'];


        $query = "SELECT * from user_register where uemail = '$useremail'";
        $res = mysqli_query($con,$query);
        $r = mysqli_fetch_assoc($res);
        $userid = $r['uid'];
        
        if($etype == 'Wedding')
        {
            $date_from = date("Y-m-d", strtotime($_GET['datefrom']));
            $date_to = date("Y-m-d", strtotime($_GET['dateto']));
        }
        else if($etype == 'Birthday' || $etype == 'Party')
        {
            $date_from = date("Y-m-d", strtotime($_GET['datefrom']));
            $date_to = null;
        }
          $str="SELECT * FROM venue WHERE vid='$vid'";

                $query=mysqli_query($con,$str);
                while($result=mysqli_fetch_array($query))
                {
                    $capacity = $result['vcapacity'];

                }
                $i = 50 ;
            if( $i <= $guest && $guest <= $capacity)
            {

                $q1 = "SELECT * from cart where uid = '$userid' ";
                $r1 = mysqli_query($con, $q1);
        
        
        
                if(mysqli_num_rows($r1) == 0)
                {
                    $str = "Insert into cart(uid,vid,vcost,guest,etype,date_from,date_to) values('$userid','$vid','$vcost','$guest','$etype',STR_TO_DATE('$date_from', '%Y-%m-%d'),STR_TO_DATE('$date_to', '%Y-%m-%d'))";
                    $res1 = mysqli_query($con,$str);
                    if($res1)
                    {
                        echo "<script>alert('Venue Added To Cart Successfull.');location.href='innervenue.php'</script>";
                    }
                    else
                    {
                        echo mysqli_error($con);
                    }
                }
                else{
                    $str = "Update cart SET vid = '$vid',vcost = '$vcost',guest = '$guest', date_from = '$date_from' , date_to = '$date_to',etype = '$etype' where uid = '$userid' ";
                    $res1 = mysqli_query($con,$str);
                    if($res1)
                    {
                        echo "<script>alert('Venue Added To Cart Successfull.');location.href='innervenue.php'</script>";
           
                    }
                    else
                    {
                        echo mysqli_error($con);
                    }
                }
        
            }else{
                echo "<script>alert('Maximum Capacity Exceeded. Please enter proper guest number.');location.href='innervenue.php'</script>";

            }              



    }
?>
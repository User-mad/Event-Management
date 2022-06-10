<?php
    session_start();
    //echo $_GET['vid'];
    include "./db/db.php";
    if (isset($_GET['id'])) {
        $did = $_GET['id'];
        $dcost = $_GET['dcost'];
        $useremail = $_SESSION['uemail'];
        $type = $_GET['type'];

        $query = "SELECT * from user_register where uemail = '$useremail'";
        $res = mysqli_query($con,$query);
        $r = mysqli_fetch_assoc($res);
        $userid = $r['uid'];
       
//for decoration type 
                $str="SELECT * FROM cart WHERE uid = '$userid' ";

                $query=mysqli_query($con,$str);
                while($result=mysqli_fetch_array($query))
                {
                    $etype = $result['etype'];

                }


        $q1 = "SELECT * from cart where uid = '$userid' ";
        $r1 = mysqli_query($con, $q1);

        if(mysqli_num_rows($r1) == 0)
        {
            echo "<script>alert('Book Venue First.');location.href='innervenue.php'</script>";
        }
        else{
            if($type == $etype)
            {

                $str = "Update cart SET did = '$did',dcost = '$dcost' where uid = '$userid' ";
                $res1 = mysqli_query($con,$str);
                if($res1)
                {
                    echo "<script>alert('Decoration Added To Cart Successfull.');location.href='innerdecoration.php'</script>";
       
                    
                }
                else
                {
                    echo mysqli_error($con);
                }
    
            }
            else{
                echo "<script>alert('Unable to add decoration for different event');location.href='innerdecoration.php'</script>";
            }

        }

        


    }
    else{
        echo mysqli_error($con);
    }
?>

<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';
 include "./db/db.php";
 if (isset($_GET['id'])) {
    $bid = $_GET['id'];
                   
$email=$_SESSION['uemail'];
$userstr = "SELECT * FROM user_register where  uemail = '$email'";
$ures = mysqli_query($con,$userstr);
while($ur = mysqli_fetch_array($ures))
{
    $name=$ur['uname'];
   
   $phone=$ur['uphone'];
  
}


    $str = "SELECT * from booking  where b_id = '$bid' ";
    $query = mysqli_query($con, $str);
    while($result=mysqli_fetch_array($query))
    {
        $vid=$result['v_id'];
        $vstr = "SELECT * from venue WHERE vid = '$vid'";
        $vres = mysqli_query($con, $vstr);
        while ($vr = mysqli_fetch_array($vres)) {
            $vname = $vr['vname'];
            $vaddress = $vr['vaddress'];
            $vtype = $vr['vtype'];
        }
        $vcost=$result['vcost'];

       
        $pid=$result['p_id'];
        $pcost=$result['pcost'];

        $pstr = "SELECT * from photographer WHERE pid = '$pid '";
        $pres = mysqli_query($con,$pstr);
        while($pr = mysqli_fetch_array($pres))
        {
            $pname = $pr['pname'];
            $price = $pr['price'];
            $ptype = $pr['ptype'];
            $pphone = $pr['phone'];
            $pemail = $pr['pemail'];
        }
       
        $did=$result['did'];
        $dcost=$result['dcost'];
        $dstr = "SELECT * from decoration WHERE id = '$did '";
        $dres = mysqli_query($con,$dstr);
        while($dr = mysqli_fetch_array($dres))
        {
            $dname = $dr['dname'];
            $dtype = $dr['dtype'];
            
        }

        $etype=$result['etype'];
        $guest=$result['guest'];
        $tamount=$result['t_amount'];
        $datefrom=$result['date_from'];
        $dateto=$result['date_to'];
        $pdate=$result['p_date'];
        $userid=$result['u_id'];
    }

    $mpdf = new \Mpdf\Mpdf();
    $data = '';
    $data .= '<h1 align = "center"><img src="images/logo.png" alt=""></h1> ';
    $data .= '<hr>';

    $data .= '<h2>Customer Details : </h2> ';
    $data .= '<strong>User Name      : </strong>' .$name. '<br/>';
    $data .= '<strong>User Email     : </strong>' .$email. '<br/>';
    $data .= '<strong>Contact Number : </strong>' .$phone. '<br/>';
    $data .= '<hr>';
    
    $data .= '<h2>Order Summary : </h2> ';
    $data .= '<strong>Event Type    : </strong>' .$etype. '<br/>';
    $data .= '<strong>Start Date    : </strong>' .$datefrom. '<br/>';
    $data .= '<strong>End Date    : </strong>' .$dateto. '<br/>';
    $data .= '<strong>Payement Date   : </strong>' .$pdate. '<br/>';
    $data .= '<strong>Total Amount : </strong>Rs.' .$tamount. '<br/>';
    $data .= '<hr>';

    $data .= '<h2>Venue Details : </h2> ';

    $data .= '<strong>Venue Name    : </strong>' .$vname. '<br/>';
    $data .= '<strong>Venue Address : </strong>' .$vaddress. '<br/>';
    $data .= '<strong>Venue Type    : </strong>' .$vtype. '<br/>';
    $data .= '<strong>Venue Cost    : </strong>Rs. ' .$vcost. '<br/>';
    $data .= '<hr>';

    if (empty($pid)) {

    }
    else{
        $data .= '<h2>Photographer Details : </h2> ';
        $data .= '<strong>Photographer Name  : </strong>' .$pname. '<br/>';
        $data .= '<strong>Photographer Price : </strong>Rs.' .$price. '<br/>';
        $data .= '<strong>Photographer Type  : </strong>' .$ptype. '<br/>';
        $data .= '<strong>Photographer Phone : </strong>' .$pphone. '<br/>';
        $data .= '<strong>Photographer Email : </strong>' .$pemail. '<br/>';
        $data .= '<hr>';
    }
    
    if (empty($did)) {
        
    }
    else{
        $data .= '<h2>Decoration Details : </h2> ';
        $data .= '<strong>Decoration Name : </strong>' .$dname. '<br/>';
        $data .= '<strong>Decoration Type : </strong>' .$dtype. '<br/>';
        $data .= '<strong>Decoration Cost : </strong>Rs.' .$dcost. '<br/>';
        $data .= '<hr>';
    }

    
    $str3 = "SELECT * FROM bookedentertainment where bid = '$bid' ";
    $query3 = mysqli_query($con,$str3);
    if (mysqli_num_rows($query3) > 0) {
        $data .= '<h2>Entertainment Details : </h2> ';
        while ($r3 = mysqli_fetch_array($query3)) {
            $eid = $r3['eid'];
            $estr = "SELECT * from entertainment WHERE eid = '$eid '";
            $eres = mysqli_query($con, $estr);
            while ($er = mysqli_fetch_array($eres)) {
                $ename = $er['ename'];
                $eprice = $er['eprice'];
            
                $ephone = $er['ephone'];
                $eemail = $er['eemail'];
            

                $edate = $r3['edate'];
          
                $data .= '<strong>Entertainment Name  : </strong>' .$ename. '<br/>';
                $data .= '<strong>Entertainment Price : </strong>Rs.' .$eprice. '<br/>';
                $data .= '<strong>Contact Details     : </strong>' .$ephone. '<br/>';
                $data .= '<strong>Contact Email       : </strong>' .$eemail. '<br/>';
                $data .= '<strong>Enteratinment  Date : </strong>' .$edate. '<br/>';
                $data .= '<hr>';

            }
        }
    }

 
    $str2 = "SELECT * FROM bookedfood where bid = '$bid' ";
    $query2 = mysqli_query($con,$str2);
    if (mysqli_num_rows($query2) > 0) {
        $data .= '<h2>Catering Details : </h2> ';
        while ($r2 = mysqli_fetch_array($query2)) {
            $fid = $r2['fid'];
            $fstr = "SELECT * from catering WHERE id = '$fid '";
            $fres = mysqli_query($con, $fstr);
            while ($fr = mysqli_fetch_array($fres)) {
                $fname = $fr['cname'];
                $fdesc = $fr['cdescription'];
           
                $ctype = $fr['ftype'];
           


                $ftype = $r2['ftype'];
                $fpeople = $r2['fpeople'];
                $fprice = $r2['price'];
                $fdate = $r2['fdate'];

                $data .= '<strong>Catering Name : </strong>' .$fname. '<br/>';
                $data .= '<strong>Catering Description : </strong>' .$fdesc. '<br/>';
                $data .= '<strong>Catering Type : </strong>' .$ctype. '<br/>';
                $data .= '<strong>Catering Event Type : </strong>' .$ftype. '<br/>';
                $data .= '<strong>No. of Dishes : </strong>' .$fpeople. '<br/>';
                $data .= '<strong>Catering Price : </strong>Rs.' .$fprice. '<br/>';
                $data .= '<strong>Booked Date: </strong>' .$fdate. '<br/>';
                $data .= '<hr>';

            }
        }
    }


   
  
    $mpdf->WriteHTML($data);
    $mpdf->Output('booking.pdf','D');
}



?>
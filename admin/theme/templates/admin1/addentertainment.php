<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">
<div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Entertainment</h5>
                                           <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Entertainment Name</label>
                                          <input id="txtename" name="ename" type="text" class="form-control" required="" value="" >
                                         </div>
                                        
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Cost(Per Day) </label>
                                          <input id="txtename" name="ecost" type="text" class="form-control" required="" value="" >
                                         </div>
                                        
                                         
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Entertainment Description</label>
                                          <input id="txtedesc" name="edescription" type="text" class="input form-control" required="" value="">
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Entertainment Phone</label>
                                          <input id="txtedesc" name="ephone" type="text" class="input form-control" required="" value="">
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Entertainment Email</label>
                                          <input id="txtedesc" name="eemail" type="text" class="input form-control" required="" value="">
                                         </div>
                                         
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Entertainment Image-1</label>
                                          <input type="file" name="file1" class="input form-control" ></input> 
                                         </div>
                                         
                                        
                                         <input id="send" type="submit" name="esubmit" class="btn btn-success" data-loading="Loading" value="Register">
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
<?php

    if(isset ($_POST['esubmit']))
    {
        $name=$_POST['ename'];
        $description=$_POST['edescription'];
        $cost = $_POST['ecost'];
        $phone = $_POST['ephone'];
        $email = $_POST['eemail'];

        $target_dir = "C:\\xampp\\htdocs\\Event\\pimages\\entertainment\\";
        
     
        $target_file_1 = $target_dir.basename($_FILES["file1"]["name"]);
        $fname = $_FILES['file1']['name'];
     
       

            move_uploaded_file($_FILES['file1']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\entertainment\\".$_FILES['file1']['name']);
            
            $sql = "INSERT INTO entertainment(ename,eprice,edescription,ephone,eemail,eimage1) VALUES('$name','$cost','$description','$phone','$email','$fname')";
            $qry=mysqli_query($con,$sql);
            if($qry)
            {
                echo"<script>alert('Enteratinment Added Successfully.')</script>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                echo"<script>alert('Unable to Add.')</script>";
            }

            mysqli_close($con);
      
   

    }
?>

                 

<?php
                include 'abottom.php';
            ?>
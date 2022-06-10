<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">
<div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Venue</h5>
                                           <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Name</label>
                                          <input id="txtename" name="vname" type="text" class="form-control" required="" value="" >
                                         </div>
                                         <div class="mb-3">
                                        
                                         <label for="exampleInputEmail1" class="form-label">Venue Type</label>
                                           <select  id="type" name="type" class="form-select" aria-label="Default select example">
                                          
                                           <option>--Select--</option>
                                            <option value="Banuquet Hall">Banuquet Hall</option>
                                            <option value="Lawn/Farmhouse">Lawn/Farmhouse</option>
                                            <option value="Resort">Resort</option>
                                            <option value="4 Star Hotel">4 Star Hotel</option>
                                      </select>
                               
                                             </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Cost(Per Day) </label>
                                          <input id="txtename" name="vcost" type="text" class="form-control" required="" value="" >
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Maximum Capacity</label>
                                          <input id="txtename" name="vcapacity" type="text" class="form-control" required="" value="" >
                                                   
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Address</label>
                                          <input id="txtaddress" name="vaddress" type="text" class="form-control" required="" value="" >
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Description</label>
                                          <input id="txtedesc" name="vdescription" type="text" class="input form-control" required="" value="">
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Header Image</label>
                                          <input type="file" name="header" class="form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Image-1</label>
                                          <input type="file" name="file1" class="input form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Image-2</label>
                                          <input type="file" name="file2" class="input form-control" ></input>  
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Image-3</label>
                                          <input type="file" name="file3" class="input form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Image-4</label>
                                          <input type="file" name="file4" class="input form-control" ></input>                                           
                                          </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Image-5</label>
                                          <input type="file" name="file5" class="input form-control" ></input>  
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Venue Image-6</label>
                                          <input type="file" name="file6" class="input form-control" ></input>  
                                         </div>
                                        
                                         <input id="send" type="submit" name="vsubmit" class="btn btn-success" data-loading="Loading" value="Register">
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
<?php

    if(isset ($_POST['vsubmit']))
    {
        $name=$_POST['vname'];
        $description=$_POST['vdescription'];
        $cost = $_POST['vcost'];
        $capacity = $_POST['vcapacity'];
        $address = $_POST['vaddress'];
        $type = $_POST['type'];

        $target_dir = "C:\\xampp\\htdocs\\Event\\pimages\\venue\\";
        
        $target_file_1 = $target_dir.basename($_FILES["header"]["name"]);
        $target_file = $target_dir.basename($_FILES["file1"]["name"]);
        $target_file_2 = $target_dir.basename($_FILES["file2"]["name"]);
        $target_file_3 = $target_dir.basename($_FILES["file3"]["name"]);
        $target_file_4 = $target_dir.basename($_FILES["file4"]["name"]);
        $target_file_5 = $target_dir.basename($_FILES["file5"]["name"]);
        $target_file_6 = $target_dir.basename($_FILES["file6"]["name"]);
        
        $himage = $_FILES['header']['name'];
        $fname = $_FILES['file1']['name'];
        $fname2 = $_FILES['file2']['name'];
        $fname3 = $_FILES['file3']['name'];
        $fname4 = $_FILES['file4']['name'];
        $fname5 = $_FILES['file5']['name'];
        $fname6 = $_FILES['file6']['name'];

        if(file_exists($target_file))
        {
            echo"<script>alert('Sorry File Already Exist.')</script>";
            exit();
        }
        // else if($_FILES["file"]["size"]>1048576555)
        // {
        //      echo"<script>alert('File Too big.')</script>";
        //     exit();
        // }
        else{

            move_uploaded_file($_FILES['header']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['header']['name']);
            move_uploaded_file($_FILES['file1']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['file1']['name']);
            move_uploaded_file($_FILES['file2']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['file2']['name']);
            move_uploaded_file($_FILES['file3']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['file3']['name']);
            move_uploaded_file($_FILES['file4']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['file4']['name']);
            move_uploaded_file($_FILES['file5']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['file5']['name']);
            move_uploaded_file($_FILES['file6']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\venue\\".$_FILES['file6']['name']);

            

            $sql = "INSERT INTO venue(vname,vtype,vcost,vcapacity,vaddress,vdescription,himage,vimage,vimage2,vimage3,vimage4,vimage5,vimage6) VALUES('$name','$type','$cost','$capacity','$address','$description','$himage','$fname','$fname2','$fname3','$fname4','$fname5','$fname6')";
            $qry=mysqli_query($con,$sql);
            if($qry)
            {
                echo"<script>alert('Venue Added Successfully.')</script>";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                echo"<script>alert('Unable to Add.')</script>";
            }

            mysqli_close($con);
        }

        
        
        

    }
?>                   

<?php
                include 'abottom.php';
            ?>
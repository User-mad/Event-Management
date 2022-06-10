<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">
<div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Food Combo</h5>
                                           <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Combo Name</label>
                                          <input id="txtename" name="fname" type="text" class="form-control" required="" value="" >
                                         </div>
                                        
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Cost(Per Plate) </label>
                                          <input id="txtename" name="fcost" type="text" class="form-control" required="" value="" >
                                         </div>
                                        
                                         
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Combo Description</label>
                                          <input id="txtedesc" name="fdescription" type="text" class="input form-control" required="" value="">
                                         </div>
                                         <div class="mb-3">
                                        
                                        <label for="exampleInputEmail1" class="form-label">Food Combo Type</label>
                                          <select  id="type" name="ftype" class="form-select" aria-label="Default select example">
                                         
                                          <option>--Select--</option>
                                           <option value="Wedding">Wedding</option>
                                           <option value="Birthday">Birthday</option>
                                           <option value="Party">Party</option>
                                         
                                     </select>
                              
                                            </div>
                                            <div class="mb-3">
                                        
                                        <label for="exampleInputEmail1" class="form-label">Food Combo Category</label>
                                          <select  id="type" name="fcategory" class="form-select" aria-label="Default select example">
                                         
                                          <option>--Select--</option>
                                           <option value="Veg">Veg</option>
                                           <option value="Non-Veg">Non-Veg</option>
                                         
                                         
                                     </select>
                              
                                            </div>
                                         
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label"> Food Image-1</label>
                                          <input type="file" name="file1" class="input form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Image-2</label>
                                          <input type="file" name="file2" class="input form-control" ></input>  
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Image-3</label>
                                          <input type="file" name="file3" class="input form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Image-4</label>
                                          <input type="file" name="file4" class="input form-control" ></input>                                           
                                          </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Image-5</label>
                                          <input type="file" name="file5" class="input form-control" ></input>  
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Food Image-6</label>
                                          <input type="file" name="file6" class="input form-control" ></input>  
                                         </div>
                                        
                                         <input id="send" type="submit" name="psubmit" class="btn btn-success" data-loading="Loading" value="Register">
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
<?php

    if(isset ($_POST['psubmit']))
    {
        $name=$_POST['fname'];
        $description=$_POST['fdescription'];
        $cost = $_POST['fcost'];
        $type = $_POST['ftype'];
        $category = $_POST['fcategory'];

        $target_dir = "C:\\xampp\\htdocs\\Event\\pimages\\catering\\";
        
       
        $target_file_1 = $target_dir.basename($_FILES["file1"]["name"]);
        $target_file_2 = $target_dir.basename($_FILES["file2"]["name"]);
        $target_file_3 = $target_dir.basename($_FILES["file3"]["name"]);
        $target_file_4 = $target_dir.basename($_FILES["file4"]["name"]);
        $target_file_5 = $target_dir.basename($_FILES["file5"]["name"]);
        $target_file_6 = $target_dir.basename($_FILES["file6"]["name"]);

 
        $fname = $_FILES['file1']['name'];
        $fname2 = $_FILES['file2']['name'];
        $fname3 = $_FILES['file3']['name'];
        $fname4 = $_FILES['file4']['name'];
        $fname5 = $_FILES['file5']['name'];
        $fname6 = $_FILES['file6']['name'];


       

             move_uploaded_file($_FILES['file1']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\catering\\".$_FILES['file1']['name']);
            move_uploaded_file($_FILES['file2']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\catering\\".$_FILES['file2']['name']);
            move_uploaded_file($_FILES['file3']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\catering\\".$_FILES['file3']['name']);
            move_uploaded_file($_FILES['file4']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\catering\\".$_FILES['file4']['name']);
            move_uploaded_file($_FILES['file5']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\catering\\".$_FILES['file5']['name']);
            move_uploaded_file($_FILES['file6']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\catering\\".$_FILES['file6']['name']);
            
            
            $sql = "INSERT INTO catering(cname,cdescription,ctype,ftype,ccost,cimage,cimage2,cimage3,cimage4,cimage5,cimage6) VALUES('$name','$description','$type','$category','$cost','$fname','$fname2','$fname3','$fname4','$fname5','$fname6')";
            $qry=mysqli_query($con,$sql);
            if($qry)
            {
                echo"<script>alert('Food Ciombo Added Successfully.')</script>";
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
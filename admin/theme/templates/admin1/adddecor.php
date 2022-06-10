<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">
<div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Decor & Florist</h5>
                                           <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Name</label>
                                          <input id="txtename" name="dname" type="text" class="form-control" required="" value="" >
                                         </div>
                                         <div class="mb-3">
                                        
                                         <label for="exampleInputEmail1" class="form-label">Decoration Type</label>
                                           <select  id="type" name="dtype" class="form-select" aria-label="Default select example">
                                          
                                           <option>--Select--</option>
                                            <option value="Wedding">Wedding</option>
                                            <option value="Birthday">Birthday</option>
                                            <option value="Party">Party</option>
                                          
                                      </select>
                               
                                             </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Cost(Per Day) </label>
                                          <input id="txtename" name="dcost" type="text" class="form-control" required="" value="" >
                                         </div>
                                        
                                         
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Description</label>
                                          <input id="txtedesc" name="ddescription" type="text" class="input form-control" required="" value="">
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Header Image</label>
                                          <input type="file" name="header" class="form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Image-1</label>
                                          <input type="file" name="file1" class="input form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Image-2</label>
                                          <input type="file" name="file2" class="input form-control" ></input>  
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Image-3</label>
                                          <input type="file" name="file3" class="input form-control" ></input> 
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Image-4</label>
                                          <input type="file" name="file4" class="input form-control" ></input>                                           
                                          </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Image-5</label>
                                          <input type="file" name="file5" class="input form-control" ></input>  
                                         </div>
                                         <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Decoration Image-6</label>
                                          <input type="file" name="file6" class="input form-control" ></input>  
                                         </div>
                                        
                                         <input id="send" type="submit" name="dsubmit" class="btn btn-success" data-loading="Loading" value="Register">
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
<?php

    if(isset ($_POST['dsubmit']))
    {
        $name=$_POST['dname'];
        $description=$_POST['ddescription'];
        $cost = $_POST['dcost'];
        $type = $_POST['dtype'];

        $target_dir = "C:\\xampp\\htdocs\\Event\\pimages\\decoration\\";
        
        $target_file_0 = $target_dir.basename($_FILES["header"]["name"]);
        $target_file_1 = $target_dir.basename($_FILES["file1"]["name"]);
        $target_file_2 = $target_dir.basename($_FILES["file2"]["name"]);
        $target_file_3 = $target_dir.basename($_FILES["file3"]["name"]);
        $target_file_4 = $target_dir.basename($_FILES["file4"]["name"]);
        $target_file_5 = $target_dir.basename($_FILES["file5"]["name"]);
        $target_file_6 = $target_dir.basename($_FILES["file6"]["name"]);

        $fname0 = $_FILES['header']['name']; 
        $fname = $_FILES['file1']['name'];
        $fname2 = $_FILES['file2']['name'];
        $fname3 = $_FILES['file3']['name'];
        $fname4 = $_FILES['file4']['name'];
        $fname5 = $_FILES['file5']['name'];
        $fname6 = $_FILES['file6']['name'];


       

            move_uploaded_file($_FILES['header']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['header']['name']);
            move_uploaded_file($_FILES['file1']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['file1']['name']);
            move_uploaded_file($_FILES['file2']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['file2']['name']);
            move_uploaded_file($_FILES['file3']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['file3']['name']);
            move_uploaded_file($_FILES['file4']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['file4']['name']);
            move_uploaded_file($_FILES['file5']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['file5']['name']);
            move_uploaded_file($_FILES['file6']['tmp_name'],"C:\\xampp\\htdocs\\Event\\pimages\\decoration\\".$_FILES['file6']['name']);
            
            
            $sql = "INSERT INTO decoration(dname,ddescription,dtype,dheader,dimage1,dimage2,dimage3,dimage4,dimage5,dimage6,dcost) VALUES('$name','$description','$type','$fname0','$fname','$fname2','$fname3','$fname4','$fname5','$fname6','$cost')";
            $qry=mysqli_query($con,$sql);
            if($qry)
            {
                echo"<script>alert('Decoration Added Successfully.')</script>";
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
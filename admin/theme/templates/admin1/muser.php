<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">

                <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Users</h5>
                            <?php
                           $query = "SELECT * FROM user_register";

                         

                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                            <p class="card-description"><?php $count; echo $count; ?> Users found.</p>
                            
                            <table class="table table-hover">
                              <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">PHONE</th>
                              <th scope="col">WALLET</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <?php
                            while($r = mysqli_fetch_array($result))
                            {
                        ?>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo $r['uid']; ?></th>
                              <td><?php echo $r['uname']; ?></td>
                             <td><?php echo $r['uemail']; ?></td>
                             <td><?php echo $r['uphone']; ?></td>
                             <td>Rs.<?php echo $r['wallet']; ?></td>
                              <td><a href="duser.php?id=<?php echo $r['uid']; ?>" class="btn btn-outline-danger m-b-xs">   Delete    </a></td>
                            </tr>
                           </tbody>
                          <?php
                                    
                                }
                            ?>
                        
                          </table>
                        </div>
                    </div>
                </div>
            </div>
          
</div>
</div>
 
<?php
                include 'abottom.php';
            ?>
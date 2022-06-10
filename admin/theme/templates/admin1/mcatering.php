<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">

                <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Catering</h5>
                            <?php
                           $query = "SELECT * FROM catering";

                         

                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                            <p class="card-description"><?php $count; echo $count; ?> Catering found.</p>
                            
                            <table class="table table-hover">
                              <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">PRICE</th>
                              <th scope="col">TYPE</th>
                              <th scope="col">MEAL</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <?php
                            while($r = mysqli_fetch_array($result))
                            {
                        ?>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo $r['id']; ?></th>
                              <td><?php echo $r['cname']; ?></td>
                              <td>Rs.<?php echo $r['ccost']; ?>/Plate</td>
                              <td><?php echo $r['ctype']; ?></td>
                              <td><?php echo $r['ftype']; ?></td>
                              <td><a href="dcatering.php?id=<?php echo $r['id']; ?>" class="btn btn-outline-danger m-b-xs">   Delete    </a></td>
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
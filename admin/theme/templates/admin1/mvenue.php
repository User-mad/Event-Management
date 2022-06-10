<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">

                <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Venues</h5>
                            <?php
                           $query = "SELECT * FROM venue";

                           


                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                            <p class="card-description"><?php $count; echo $count; ?> Venues found.</p>
                            
                            <table class="table table-hover">
                              <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">PRICE</th>
                              <th scope="col">TYPE</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <?php
                            while($r = mysqli_fetch_array($result))
                            {
                        ?>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo $r['vid']; ?></th>
                              <td><?php echo $r['vname']; ?></td>
                              <td>Rs.<?php echo $r['vcost']; ?>/Day</td>
                              <td><?php echo $r['vtype']; ?></td>
                              <td><a href="dvenue.php?id=<?php echo $r['vid']; ?>" class="btn btn-outline-danger m-b-xs">   Delete    </a></td>
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
<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">

                <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Photographer</h5>
                            <?php
                           $query = "SELECT * FROM photographer";

                           


                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                            <p class="card-description"><?php $count; echo $count; ?> Photographer found.</p>
                            
                            <table class="table table-hover">
                              <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">PRICE</th>
                              <th scope="col">TYPE</th>
                              <th scope="col">CONTACT</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <?php
                            while($r = mysqli_fetch_array($result))
                            {
                        ?>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo $r['pid']; ?></th>
                              <td><?php echo $r['pname']; ?></td>
                              <td>Rs.<?php echo $r['price']; ?>/Event</td>
                              <td><?php echo $r['ptype']; ?></td>
                              <td><?php echo $r['phone']; ?></td>
                              <td><a href="dphotographer.php?id=<?php echo $r['pid']; ?>" class="btn btn-outline-danger m-b-xs">   Delete    </a></td>
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
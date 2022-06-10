<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">

                <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Decoration</h5>
                            <?php
                           $query = "SELECT * FROM decoration";

                           


                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                            <p class="card-description"><?php $count; echo $count; ?> Decorations found.</p>
                            
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
                              <th scope="row"><?php echo $r['id']; ?></th>
                              <td><?php echo $r['dname']; ?></td>
                              <td>Rs.<?php echo $r['dcost']; ?>/Event</td>
                              <td><?php echo $r['dtype']; ?></td>
                              <td><a href="ddecoration.php?id=<?php echo $r['id']; ?>" class="btn btn-outline-danger m-b-xs">   Delete    </a></td>
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
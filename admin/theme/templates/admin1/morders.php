<?php
                include 'atop.php';
            ?>

<div class="page-content">
                <div class="main-wrapper">

                <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Orders</h5>
                            <?php
                           $query = "SELECT * FROM booking";

                         

                   $result = mysqli_query($con,$query);
                   $count=$result->num_rows;
                    ?>
                            <p class="card-description"><?php $count; echo $count; ?> Booking found.</p>
                            
                            <table class="table table-hover">
                              <thead>
                            <tr>
                              <th scope="col">BID</th>
                              <th scope="col">UNAME</th>
                              <th scope="col">TAMOUNT</th>
                              <th scope="col">FDATE</th>
                              <th scope="col">TDATE</th>
                              <th scope="col">PDATE</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <?php
                            while($r = mysqli_fetch_array($result))
                            {
                                $uid = $r['u_id'];
                                $str2 = "SELECT * FROM user_register where uid ='$uid' ";
                                $query2 = mysqli_query($con,$str2);
                                while ($r2 = mysqli_fetch_array($query2)) {
                                    $uname= $r2['uname'];
                                    ?>
                          <tbody>
                            <tr>
                              <th scope="row"><?php echo $r['b_id']; ?></th>
                              <td><?php echo $uname ?></td>
                              <td>Rs.<?php echo $r['t_amount']; ?>/Event</td>
                              <td><?php echo $r['date_from']; ?></td>
                              <td><?php echo $r['date_to']; ?></td>
                              <td><?php echo $r['p_date']; ?></td>
                              <td> <a href="adownloadpdf.php?id=<?php echo $r['b_id']; ?>"  class="btn btn-outline-danger m-b-xs">  Download  </a></td>

                            </tr>
                           </tbody>
                          <?php
                                }     
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
<?php
                include 'atop.php';
            ?>

<?php
      
$str="SELECT COUNT(uid) FROM user_register";


$query=mysqli_query($con,$str);
$result=mysqli_fetch_array($query);
$r = $result[0];

    
$str1="SELECT COUNT(b_id) FROM booking";


$query1=mysqli_query($con,$str1);
$result1=mysqli_fetch_array($query1);
$r1 = $result1[0];

$str2="SELECT SUM(t_amount) FROM booking";


$query2=mysqli_query($con,$str2);
$result2=mysqli_fetch_array($query2);
$r2 = $result2[0];

$str3= "SELECT COUNT(uid) FROM cart";


$query3=mysqli_query($con,$str3);
$result3=mysqli_fetch_array($query3);
$r3 = $result3[0];

?>
<div class="page-content">
              <div class="main-wrapper">
                <div class="row">
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">New Customers</h5>
                              <h2><?= $r ?></h2>
                              <p>From last week</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                              <h2><?= $r1 ?></h2>
                              <p>Booked Orders</p>
                              <div class="progress">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Monthly Profit</h5>
                              <h2>Rs. <?= $r2 ?></h2>
                             
                              <div class="progress">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                              <h2><?= $r1 ?></h2>
                              <p>Orders in waitlist</p>
                              <div class="progress">
                                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-12 col-lg-8">
                      <div class="card table-widget">
                          <div class="card-body">
                              <h5 class="card-title">Recent Users</h5>
                              <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    
                                    
                                  </tr>
                                </thead>
                                <?php
                            $query4 = "SELECT * FROM user_register";

                                    
                                    


                            $result4 = mysqli_query($con,$query4);

                            while ($r4 = mysqli_fetch_array($result4)) {
                                ?>

                                <tbody>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image-2.png" alt=""><?php echo $r4['uname']; ?></th>
                                    <td><?php echo $r4['uemail']; ?> </td>
                                    <td><?php echo $r4['uphone']; ?></td>
                                    
                                    
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
                  <div class="col-sm-6 col-xl-4">
                    <div class="card stat-widget">
                      <div class="card-body">
                          <h5 class="card-title">Social Media</h5>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                  <i data-feather="thumbs-up"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>New post reached 7k+ likes</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                  <i data-feather="twitch"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>Developer AMA is now live</h4>
                                  <p>01 March</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-danger text-danger">
                                  <i data-feather="instagram"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>52 unread messages</h4>
                                  <p>23 February</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-warning text-warning">
                                  <i data-feather="shopping-bag"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>2 new orders from shop page</h4>
                                  <p>17 February</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                  <i data-feather="twitter"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>Hashtag #circl is trending</h4>
                                  <p>03 February</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-lg-8">
                      <div class="card table-widget">
                          <div class="card-body">
                              <h5 class="card-title">Recent Orders</h5>
                              <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image-1.png" alt="">Anna Doe</th>
                                    <td>Modern</td>
                                    <td>#53327</td>
                                    <td>$20</td>
                                    <td><span class="badge bg-info">Shipped</span></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image-2.png" alt="">John Doe</th>
                                    <td>Alpha</td>
                                    <td>#13328</td>
                                    <td>$25</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image-1.png" alt="">Anna Doe</th>
                                    <td>Lime</td>
                                    <td>#35313</td>
                                    <td>$20</td>
                                    <td><span class="badge bg-danger">Pending</span></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">John Doe</th>
                                    <td>Circl Admin</td>
                                    <td>#73423</td>
                                    <td>$23</td>
                                    <td><span class="badge bg-primary">Shipped</span></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><img src="../../assets/images/avatars/profile-image-1.png" alt="">Nina Doe</th>
                                    <td>Space</td>
                                    <td>#54773</td>
                                    <td>$20</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                  </div>
                  
                <div class="col-md-12 col-lg-4">
                  <div class="card stat-widget">
                      <div class="card-body">
                          <h5 class="card-title">Orders</h5>
                          <div id="apex2"></div>
                      </div>
                  </div>
                </div>
                  
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="card stat-widget">
                      <div class="card-body">
                          <h5 class="card-title">Tasks Overview</h5>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Project Managment</h4></a>
                                  <p>Management</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Design</h4></a>
                                  <p>Creative</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-secondary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Financial Accounting</h4></a>
                                  <p>Finance</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Testing</h4></a>
                                  <p>Manager</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-secondary text-secondary">
                                  <i data-feather="user"></i>
                                </div>
                                <div class="tr-text">
                                  <a href="#"><h4>Development</h4></a>
                                  <p>Developers</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <img src="../../assets/images/card-bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="card-meet-header">
                        <div class="card-meet-day">
                          <h6>WED</h6>
                          <h3>7</h3>
                        </div>
                        <div class="card-meet-text">
                          <h6>Developer AMA</h6>
                          <p>Meet project developers</p>
                        </div>
                      </div>
                      <p class="card-text m-b-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                      <a href="#" class="btn btn-info">Join</a>
                      <a href="#" class="btn btn-primary">Invite</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card stat-widget">
                      <div class="card-body">
                          <h5 class="card-title">Transactions</h5>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                  <i data-feather="thumbs-up"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>Facebook</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-success">+ $24</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-success text-success">
                                  <i data-feather="credit-card"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>Visa</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-success">+ $300</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-danger text-danger">
                                  <i data-feather="tv"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>Netflix</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-danger">- $17</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-warning text-warning">
                                  <i data-feather="shopping-cart"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>Themeforest</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-danger">- $220</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                  <i data-feather="dollar-sign"></i>
                                </div>
                                <div class="tr-text">
                                  <h4>PayPal</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-success">+20%</span></p>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              </div>
              
            </div>
</div>
             <?php
                include 'abottom.php';
            ?>
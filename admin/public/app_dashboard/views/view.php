<?php 

    $result = $paging;

    $analytics =  $engine->getDashboardCounts_SQL(); 
    // var_dump($analytics);
    // var_dump($analytics['requests_new']);
    // die();

?>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <h1 class="db-header-title">Hey Welcome,</h1>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Orders</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> <?php echo $analytics['requests_all']; ?></p>
                <p class="fs-12">48% From Last 24 Hours</p>
              </div>
            </div> <i class="flaticon-statistics"></i>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Finances</h6>
                <p class="ms-card-change">₵<?php echo $analytics['total']; ?></p>
                <p class="fs-12">2% Decreased from last budget</p>
              </div>
            </div> <i class="flaticon-stats"></i>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Customer Visits</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> <?php echo $analytics['requests_all']; ?></p>
                <p class="fs-12">48% From Last 24 Hours</p>
              </div>
            </div> <i class="flaticon-user"></i>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Delivery Cost Total</h6>
                <p class="ms-card-change">₵<?php echo $analytics['total_deliverycost']; ?></p>
                <p class="fs-12">2% Decreased from last budget</p>
              </div>
            </div> <i class="flaticon-reuse"></i>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Recent Orders</h6>
            </div>
            <div class="ms-panel-body p-0">
              <div class="table-responsive">
                <table class="table table-hover thead-light">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Order ID</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Customer Phone</th>
                      <th scope="col">Location</th>
                      <th scope="col">Total</th>
                      <!-- <th scope="col">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                        if($analytics['requests_new'] > 0 ){

                            $x=1;

                            foreach ($analytics['requests_new_array'] as $val){
                                $data =  $engine->getDataEncrypt($val);
                                // var_dump($val); die();

                                if($x < 6){
                                  
                    ?>


                      <tr>
                        <th scope="row"><?php echo $x; ?></th>
                        <td>ORD-<?php echo $val['CHKOUT_ID']; ?></td>
                        <td><?php echo $val['CHKOUT_NAME']; ?></td>
                        <td><?php echo $val['CHKOUT_PHONE']; ?></td>
                        <td><?php echo $val['CHKOUT_LOCATION']; ?></td>
                        <td>₵<?php echo $val['CHKOUT_ORDERTOTAL']; ?></td>
                        <!-- <td>
                          <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab" style="border: 2px solid #5594bc;border-radius: 4px;padding: 3px 6px;text-align: center;"
                          onclick="$('#pg').val('app_orders');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();"
                          >
                            <i class="flaticon-list" style="color: #1357ac;margin-right: 8px;"></i> 
                            <span style="color: #1357ac;">
                              Details 
                            </span>
                          </a>
                        </td>  -->
                      </tr>

                      
                    <?php
                    
                                }
                                $x= $x + 1;
                            }

                        }else{
                    ?>
                      <tr>
                        <td>
                          <p style="text-align: left;"><span class="badge badge-primary font-14">No Orders Available</span></p>
                        </td>
                      </tr>
                    <?php
                        }

                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Messages</h6>
            </div>
            <div class="ms-panel-body">
              <ul class="ms-activity-log">
                <li>
                  <div class="ms-btn-icon btn-pill icon btn-success"> <i class="flaticon-tick-inside-circle"></i>
                  </div>
                  <h6>Hello Administrator</h6>
                  <span> <i class="material-icons">event</i>1 January, 2018</span>
                  <p class="fs-14">You are welcome to the backend of Kweyi Foods. Manage Orders and Menu from the tabs on your right.</p>
                </li>
                <li>
                  <div class="ms-btn-icon btn-pill icon btn-danger"> <i class="flaticon-alert-1"></i>
                  </div>
                  <h6>Go to the main Kweyi Foods Page</h6>
                  <span> <i class="material-icons">event</i>1 March, 2020</span>
                  <p class="fs-14">Select Main Page from the the pop-up in the top far right corner.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Latest Menu</h6>
              <p>Some of the foods on our Menu</p>
            </div>
            <div class="ms-panel-body">
              <div class="row">
                  <?php 
                    if($analytics['products_all'] > 0 ){

                        $x=1;

                        foreach ($analytics['products_all_array'] as $val){
                            $data =  $engine->getDataEncrypt($val);
                            // var_dump($val); die();

                            if($x < 5){                    
                  ?>
                  
                                                  
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="media/upload/<?php echo $val['PROD_PICTUREURL']; ?>" alt="card_img">
                        </div>
                        <div class="ms-card-body">

                          <div class="new">
                            <h6 class="mb-0"><?php echo $val['']; ?> </h6>
                            <h6 class="ms-text-primary mb-0" style="color: #333;">Cost Price: <b>₵<?php echo $val['PROD_PURCHASEPRICE']; ?></b></h6>
                            <h6 class="ms-text-primary mb-0" style="color: #333;">Sales Price: <b>₵<?php echo $val['PROD_SALESPRICE']; ?></b></h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:<?php echo $val['PROD_QUANTITY']; ?> </p>
                            <span class="badge badge-success">In Stock</span>
                          </div>
                          <p><?php echo $val['PROD_DESCRIPTION']; ?></p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary" onclick="$('#pg').val('app_menu');$('#view').val('');$('#class_call').val('delete');$('#keys').val('<?php echo $val['PROD_CODE']; ?>');document.myform.submit();">Remove</button>
                            <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary" onclick="$('#pg').val('app_menu');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();">Edit</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    
                  <?php
                      
                                }
                                $x= $x + 1;
                            }

                        }else{
                    ?>
                      <tr>
                        <td>
                          <p style="text-align: left;"><span class="badge badge-primary font-14">No Orders Available</span></p>
                        </td>
                      </tr>
                    <?php
                        }

                    ?>


                <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-img">
                      <img src="media/img/costic/food-2.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="new">
                        <h6 class="mb-0">Garlic Bread </h6>
                        <h6 class="ms-text-primary mb-0">₵45.50</h6>
                      </div>
                      <div class="new meta">
                        <p>Qty:6224 </p>
                        <span class="badge badge-primary">Out of Stock</span>
                      </div>

                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                      <div class="new mb-0">
                        <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                        <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-img">
                      <img src="media/img/costic/food-3.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="new">
                        <h6 class="mb-0">Veg Sandwich </h6>
                        <h6 class="ms-text-primary mb-0">₵45.50</h6>
                      </div>
                      <div class="new meta">
                        <p>Qty:1467 </p>
                        <span class="badge badge-success">In Stock</span>
                      </div>

                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                      <div class="new mb-0">
                        <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                        <button type="button" class="btn  grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-img">
                      <img src="media/img/costic/food-4.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="new">
                        <h6 class="mb-0">Roast Sandwich</h6>
                        <h6 class="ms-text-primary mb-0">₵45.50</h6>
                      </div>
                      <div class="new meta">
                        <p>Qty:6224 </p>
                        <span class="badge badge-primary">Out of Stock</span>
                      </div>


                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                      <div class="new mb-0">
                        <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                        <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-xl-5 col-md-5">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>most sellings projects</h6>
            </div>
            <div class="ms-panel-body"> <span class="progress-label">HTML & CSS Projects</span><span class="progress-status">83%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div> <span class="progress-label">Wordpress Projects</span><span class="progress-status">50%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div> <span class="progress-label">PSD Projects</span><span class="progress-status">75%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div> <span class="progress-label">Code Snippets</span><span class="progress-status">92%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-md-5">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Top Sales</h6>
              <p>Your highest selling projects</p>
            </div>
            <div class="ms-panel-body p-0">
              <div class="ms-quick-stats">
                <div class="ms-stats-grid">
                  <p class="ms-text-success">+47.18%</p>
                  <p class="ms-text-dark">8,033</p> <span>Admin Dashboard</span>
                </div>
                <div class="ms-stats-grid">
                  <p class="ms-text-success">+17.24%</p>
                  <p class="ms-text-dark">6,039</p> <span>Wordpress Theme</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>

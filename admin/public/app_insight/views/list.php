<?php 

    $result = $paging;

    $analytics =  $engine->getDashboardCounts_SQL(); 
    // var_dump($analytics);
    // var_dump($analytics['requests_new']);
    // die();

?>

<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Get informed on activities on Roam.</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Insight</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-refresh-cw"></i> &nbsp; Refresh</button>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-6">
                        <!-- Start row -->
                        <div class="row">
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <div class="row align-items-center">
                                            <div class="col-9">
                                                <h5 class="card-title mb-0">Revenue Statistics</h5>
                                            </div>
                                            <div class="col-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetRevenue" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetRevenue">
                                                        <a class="dropdown-item font-13" href="#">Refresh</a>
                                                        <a class="dropdown-item font-13" href="#">Export</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3">
                                                <div class="revenue-box border-bottom mb-2">
                                                    <h4>+ <?php echo $result['stmt_profit_total']; ?></h4>
                                                    <p>Profit Total</p>
                                                </div>
                                                <div class="revenue-box">
                                                    <h4>- <?php echo $result['stmt_expenses_total']; ?></h4>
                                                    <p>Expense Total</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="apex-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col --> 
                            <!-- Start col -->
                            <div class="col-lg-6 col-xl-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="media">
                                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                                            <div class="media-body">
                                                <p class="mb-0">Riders</p>
                                                <h5 class="mb-0"><?php echo $result['stmt_riders_count']; ?></h5>                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-6 col-xl-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="media">
                                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-clipboard"></i></span>
                                            <div class="media-body">
                                                <p class="mb-0">Clients</p>
                                                <h5 class="mb-0"><?php echo $result['stmt_clients_count']; ?></h5>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                        </div>
                        <!-- End row -->                        
                    </div>
                    <!-- End col -->                    
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card m-b-30 dash-widget">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <h5 class="card-title mb-0">Index</h5>
                                    </div>
                                    <div class="col-7">
                                        <ul class="nav nav-pills float-right" id="pills-index-tab-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-sales-tab-justified" data-toggle="pill" href="#pills-sales-justified" role="tab" aria-selected="true">Rides</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-clients-tab-justified" data-toggle="pill" href="#pills-clients-justified" role="tab" aria-selected="false">Clients</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0 pl-0 pr-2">
                                <div id="apex-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-9">
                        <!-- Start row -->
                        <div class="row">
                            <!-- Start col -->
                            <div class="col-lg-6 col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <h5 class="card-title mb-0">Issues</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-pie-chart"></div>
                                        <div class="row">
                                            <div class="col-6 text-right">
                                                <p class="mb-1">Open<i class="mdi mdi-circle text-primary ml-2"></i></p>
                                                <h5 class="mb-0">105</h5>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-1"><i class="mdi mdi-circle text-light mr-2"></i>Close</p>
                                                <h5 class="mb-0">45</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-6 border-right">
                                                <p class="my-2"><span class="font-18 f-w-6 text-primary">75%</span></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="my-2">See All</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-6 col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <h5 class="card-title mb-0">Progress</h5>
                                    </div>
                                    <?php

                                        $inprogress_percent = ($result['stmt_rides_inprogress'] / $result['stmt_allrides']) * 100;
                                        $completed_percent = ($result['stmt_rides_completed'] / $result['stmt_allrides']) * 100;
                                        $cancelled_percent = ($result['stmt_rides_cancelled'] / $result['stmt_allrides']) * 100;

                                    ?>


                                    <div class="card-body">
                                        <h5 class="mb-4">Current System Progress</h5>
                                        <p>In-Progress Rides <span class="float-right"> <?php echo round((float)$inprogress_percent, 2); ?> </span> </p>
                                        <div class="progress mb-4" style="height: 4px;">
                                          <div class="progress-bar" role="progressbar" style="width: <?php echo round((float)$inprogress_percent, 2); ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Completed Rides<span class="float-right"> <?php echo round((float)$completed_percent, 2); ?> </span></p>
                                        <div class="progress mb-4" style="height: 4px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width:  <?php echo round((float)$completed_percent, 2); ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Cancelled Rides <span class="float-right"> <?php echo round((float)$cancelled_percent, 2); ?></span></p>
                                        <div class="progress mb-1" style="height: 4px;">
                                          <div class="progress-bar bg-secondary" role="progressbar" style="width:  <?php echo round((float)$cancelled_percent, 2); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>                                        
                                    </div>
                                    <div class="card-footer">
                                        <span class="mr-3">Teams : </span>
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                    <img src="media/images/users/men.svg" alt="avatar" class="rounded-circle">
                                                </a>
                                            </div>
                                            <div class="avatar">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                                    <img src="media/images/users/women.svg" alt="avatar" class="rounded-circle">
                                                </a>
                                            </div>
                                        </div>
                                        <span class="float-right mt-2"><i class="feather icon-paperclip mr-1"></i>5</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-6 col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-body text-center">
                                        <div class="user-slider">

                                        <?php 

                                            if(count($result['stmt_staffs']) > 0 ){

                                                $page = (empty($page))? 1:$page;
                                                $num = (isset($page))? ($list->limit*($page-1))+1:1;
                                                
                                                $x=1;

                                                foreach ($result['stmt_staffs'] as $val){
                                                    // var_dump($val); die();
                                        ?>
                                            <div class="user-slider-item">
                                                <img src="media/images/users/men.svg" alt="avatar" class="rounded-circle mt-3 mb-4">
                                                <h5><?php echo $val['STF_LASTNAME']; ?> <?php echo $val['STF_FIRSTNAME']; ?></h5>
                                                <p><?php echo $val['STF_USERLEVEL']; ?></p>
                                                <p><?php echo $val['STF_PHONE']; ?></p>
                                                <p><?php echo $val['STF_HOMEADDRESS']; ?></p>
                                            </div>
                                          
                                        <?php
                                            // $x= $x + 1;
                                            }
                                        }else{
                                        ?>

                                            <!-- Start col -->
                                            <div class="col-lg-6 col-xl-12">
                                                <div class="card m-b-30">
                                                    <div class="card-body">
                                                        <div style="text-align: center;">
                                                            <b>No Notifications Found</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>


                                            <div class="user-slider-item">
                                                <img src="media/images/users/women.svg" alt="avatar" class="rounded-circle mt-3 mb-4">
                                                <h5>James Smith</h5>
                                                <p>Senior Rides Executive</p>
                                                <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                                            </div>
                                            <div class="user-slider-item">
                                                <img src="media/images/users/girl.svg" alt="avatar" class="rounded-circle mt-3 mb-4">
                                                <h5>James Smith</h5>
                                                <p>Senior Rides Executive</p>
                                                <p>55 Avenue, North Street Road, Carolina State, New York City, USA</p>
                                            </div>


                                        </div>                                        
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-6 border-right">
                                                <p class="my-2">Follow</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="my-2">Message</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-6 col-xl-6">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <div class="row align-items-center">
                                            <div class="col-7">
                                                <h5 class="card-title mb-0">Recent Activity</h5>
                                            </div>
                                            <div class="col-5">
                                                <button class="btn btn-secondary-rgba float-right font-13">View All</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="activities-history">
                                            
                                            <?php 

                                                if(count($result['stmt_activities']) > 0 ){

                                                    $page = (empty($page))? 1:$page;
                                                    $num = (isset($page))? ($list->limit*($page-1))+1:1;
                                                    
                                                    $x=1;

                                                    foreach ($result['stmt_activities'] as $val){
                                                        // var_dump($val); die();
                                            ?>

                                                <div class="activities-history-list">
                                                    <div class="activities-history-item">                                            
                                                        <h6><?php echo $val['ACTV_MESSAGE']; ?>Finished prototyping Project X.</h6>
                                                        <p class="mb-0"><?php echo $val['ACTV_DATE']; ?></p>
                                                    </div>
                                                </div>
                                            
                                            <?php
                                                    // $x= $x + 1;
                                                    }
                                                }else{
                                            ?>

                                                <!-- Start col -->
                                                <div class="col-lg-6 col-xl-12">
                                                    <div class="card m-b-30">
                                                        <div class="card-body">
                                                            <div style="text-align: center;">
                                                                <b>No Activities Found</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php
                                                }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                            <!-- Start col -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card m-b-30">
                                    <div class="card-header">                                
                                        <div class="row align-items-center">
                                            <div class="col-9">                                                
                                                <h5 class="card-title mb-0">Top Riders</h5>
                                            </div>
                                            <div class="col-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetPerformers" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetPerformers">
                                                        <a class="dropdown-item font-13" href="#">Refresh</a>
                                                        <a class="dropdown-item font-13" href="#">Export</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 

                                                        if(count($result['stmt_riders_list']) > 0 ){

                                                            $page = (empty($page))? 1:$page;
                                                            $num = (isset($page))? ($list->limit*($page-1))+1:1;
                                                            
                                                            $x=1;

                                                            foreach ($result['stmt_riders_list'] as $val){
                                                                // var_dump($val); die();
                                                    ?>
                                                        
                                                        <tr>
                                                            <td><img src="media/images/users/men.svg" class="img-fluid" width="35" alt="customer"></td>
                                                            <td><?php echo $val['RDR_LASTNAME'].' '.$val['RDR_FIRSTNAME']; ?></td>
                                                            <td><?php echo $val['RDR_PHONE']; ?></td>
                                                        </tr>
                                                    
                                                    <?php
                                                            // $x= $x + 1;
                                                            }
                                                        }else{
                                                    ?>

                                                        <!-- Start col -->
                                                        <div class="col-lg-6 col-xl-12">
                                                            <div class="card m-b-30">
                                                                <div class="card-body">
                                                                    <div style="text-align: center;">
                                                                        <b>No Activities Found</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End col -->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-9">                                                
                                        <h5 class="card-title mb-0">User Sources</h5>
                                    </div>
                                    <div class="col-3">
                                        <div class="dropdown">
                                            <button class="btn btn-link p-0 font-18 float-right" type="button" id="widgetLeads" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="widgetLeads">
                                                <a class="dropdown-item font-13" href="#">Refresh</a>
                                                <a class="dropdown-item font-13" href="#">Export</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div id="apex-radial-chart"></div>
                                <h4 class="mb-3">Roam Overview</h4>
                                <p class="mb-5">List of system's general overview</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="mb-1">All Requests</p>
                                        <h4><?php echo $result['stmt_allrides']; ?></h4>
                                        <p class="text-danger mb-5"><i class="feather icon-arrow-down-right mr-1"></i>7.5</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1">In-Progress</p>
                                        <h4><?php echo $result['stmt_rides_inprogress']; ?></h4>
                                        <p class="text-success mb-4"><i class="feather icon-arrow-up-right mr-1"></i>5.1</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1">Completed</p>
                                        <h4><?php echo $result['stmt_rides_completed']; ?></h4>
                                        <p class="text-success mb-5"><i class="feather icon-arrow-up-right mr-1"></i>3.5</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-1">Cancelled</p>
                                        <h4><?php echo $result['stmt_rides_cancelled']; ?></h4>
                                        <p class="text-danger mb-4"><i class="feather icon-arrow-down-right mr-1"></i>8.3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->


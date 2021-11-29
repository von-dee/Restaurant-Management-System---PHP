  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="<?php echo $nav->navigate('app_dashboard')?>"> <img src="media/img/logo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_dashboard')?>" aria-controls="dashboard"  style="color: black !important;">
          <span style="color: black !important;"><i class="material-icons fs-16">dashboard</i><span style="color: black !important;">Dashboard</span></span>
        </a>
      </li>
      <!-- /Dashboard -->

      
      <!-- orders -->
      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_orders')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fas fa-clipboard-list fs-16"></i><span style="color: black !important;">Orders</span></span>
        </a>
      </li>
      <!-- orders end -->

      <!-- orders -->
      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_largeorders')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fas fa-utensils fs-16"></i><span style="color: black !important;">Large Orders</span></span>
        </a>
      </li>
      <!-- orders end -->
      
      <!-- product -->
      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_menu')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fa fa-archive fs-16"></i><span style="color: black !important;">Menus </span></span>
        </a>
      </li>
      <!-- product end -->

      <!-- restaurants -->
      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_restaurants')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fa fa-tasks fs-16"></i><span style="color: black !important;">Restaurants</span></span>
        </a>
      </li>
      <!-- restaurants end -->

      <!-- Invoice -->

      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_invoice')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fas fa-file-invoice fs-16"></i><span style="color: black !important;">Invoice</span> </span>
        </a>
      </li>
      <!-- Invoice end -->

      <!-- customers-->

      <!-- <li class="menu-item">
        <a href="<?php //echo $nav->navigate('app_customers')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fas fa-user-friends fs-16"></i>Customers</span>
        </a>
      </li> -->
      <!-- Customers  end -->

      <!-- sales -->
      <!-- <li class="menu-item">
        <a href="<?php //echo $nav->navigate('app_sales')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fa fa-briefcase fs-16"></i>Sales</span>
        </a>
      </li> -->

      <!-- contact -->
      <li class="menu-item">
        <a href="<?php echo $nav->navigate('app_contactus')?>" style="color: black !important;">
          <span style="color: black !important;"><i class="fa fa-comment-alt fs-16"></i>Contact Us</span>
        </a>
      </li>


      <!-- sales end  -->

    </ul>


  </aside>

  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">

    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>

        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>

    <div class="ms-aside-body">

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>


      </div>

    </div>

  </aside>

  <!-- Main Content -->
  <main class="body-content">

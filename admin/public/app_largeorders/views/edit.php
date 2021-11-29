
<div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            
            <div class="row">
              <div class="col-6">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Large Order</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                </ol>
              </div>
              <div class="col-6">
                <button type="button" class="btn btn-danger" style="float: right;height: 2em;padding: 0;margin-right: 1em;" onclick="$('#pg').val('app_orders');$('#view').val('');$('#class_call').val('');$('#keys').val('');document.myform.submit();">
                  <i class="fa fa-arrow-left"></i> &nbsp; &nbsp; Back
                </button>
              </div>
            </div>

          </nav>
          <div class="ms-panel">
            <div class="ms-panel-header header-mini">
              <div class="d-flex justify-content-between">
                <h6>Invoice</h6>
                <h6>#ORD-<?php echo $result['RES_ID']; ?></h6>
              </div>
            </div>
            <div class="ms-panel-body">
              <!-- Invoice To -->
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="invoice-address">
                    <h3>Reciever: </h3>
                    <h5>Name: <?php echo $result['RES_NAME']; ?></h5>
                    <p>Phone: <?php echo $result['RES_PHONE']; ?></p>
                    <p class="mb-0">Date: <?php echo $result['RES_DATE']; ?></p>
                    <p class="mb-0">Time: <?php echo $result['RES_TIME']; ?></p>
                    <p class="mb-0">Status: 
                      <?php 
                       if($result['CHKOUT_STATUS'] == 0){
                      ?>
                        <span class="badge badge-dark">Cancelled</span>
                      <?php 
                       }else if($result['CHKOUT_STATUS'] == 1){
                      ?>
                        <span class="badge badge-primary">Pending</span>
                      <?php 
                       }else if($result['CHKOUT_STATUS'] == 2){
                      ?>
                        <span class="badge badge-success">Completed</span>
                      <?php 
                       } 
                      ?>
                    </p>
                  </div>
                </div>
                <div class="col-md-6 text-md-right">
                  <ul class="invoice-date">
                    <li>Invoice Date : <?php echo $result['RES_DATEADDED']; ?></li>
                    <li>More Info : <?php echo $result['RES_SPECIAL']; ?></li>
                  </ul>
                </div>
              </div>
              <!-- Invoice Table -->
              <div class="ms-invoice-table table-responsive mt-5">
              </div>
              <div class="invoice-buttons text-right"> 
				        <a href="#" class="btn btn-danger mr-2"  onclick="$('#pg').val('app_orders');$('#view').val('');$('#class_call').val('update');$('#ekeys').val('0');$('#keys').val('<?php echo $result['RES_CODE']; ?>');document.myform.submit();">Cancel Order</a>
                <a href="#" class="btn btn-success"  onclick="$('#pg').val('app_orders');$('#view').val('');$('#class_call').val('update');$('#ekeys').val('2');$('#keys').val('<?php echo $result['RES_CODE']; ?>');document.myform.submit();">Delivered</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
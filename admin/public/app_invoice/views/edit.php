
<div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            
            <div class="row">
              <div class="col-6">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Invoice</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
                </ol>
              </div>
              <div class="col-6">
                <button type="button" class="btn btn-danger" style="float: right;height: 2em;padding: 0;margin-right: 1em;" onclick="$('#pg').val('app_invoice');$('#view').val('');$('#class_call').val('');$('#keys').val('');document.myform.submit();">
                  <i class="fa fa-arrow-left"></i> &nbsp; &nbsp; Back
                </button>
              </div>
            </div>

          </nav>
          <div class="ms-panel">
            <div class="ms-panel-header header-mini">
              <div class="d-flex justify-content-between">
                <h6>Invoice</h6>
                <h6>#ORD-<?php echo $result['CHKOUT_ID']; ?></h6>
              </div>
            </div>
            <div class="ms-panel-body">
              <!-- Invoice To -->
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="invoice-address">
                    <h3>Reciever: </h3>
                    <h5>Name: <?php echo $result['CHKOUT_NAME']; ?></h5>
                    <p>Phone: <?php echo $result['CHKOUT_PHONE']; ?></p>
                    <p class="mb-0">Location: <?php echo $result['CHKOUT_LOCATION']; ?></p>
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
                    <li>Invoice Date : <?php echo $result['CHKOUT_DATEADDED']; ?></li>
                    <li>Due Date : <?php echo $result['CHKOUT_ORDERDATE'].' '.$result['CHKOUT_ORDERTIME']; ?></li>
                  </ul>
                </div>
              </div>
              <!-- Invoice Table -->
              <div class="ms-invoice-table table-responsive mt-5">
                <table class="table table-hover text-right thead-light">
                  <thead>
                    <tr class="text-capitalize">
                      <th class="text-center w-5">id</th>
                      <th class="text-left">description</th>
                      <th>qty</th>
                      <th>Unit Cost</th>
                      <th>total</th>
                    </tr>
                  </thead>
                  <tbody>
					 <?php

						$rs = $result['CHKOUT_ITEMS'];
						$rs = json_decode($rs, true);
						$x = 1;
						foreach ($rs as $val){
							// var_dump($val); die();
							$total = $val['item_quantity'] * $val['item_price'];
					?>
						<tr>
							<td class="text-center"><?php echo $x; ?></td>
							<td class="text-left"><?php echo $val['item_name']; ?></td>
							<td><?php echo $val['item_quantity']; ?></td>
							<td>₵<?php echo $val['item_price']; ?></td>
							<td>₵<?php echo $total; ?></td>
						</tr>
					
					<?php
					
							$x = $x +1;
						}
					?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="4">Subtotal Cost:</td>
                      <td>₵<?php echo $result['CHKOUT_SUBTOTAL']; ?></td>
					</tr>
					<tr>
                      <td colspan="4">Delivery Cost:</td>
                      <td>₵<?php echo $result['CHKOUT_DELIVERYCOST']; ?></td>
					</tr>
					<tr>
                      <td colspan="4">Total Cost:</td>
                      <td>₵<?php echo $result['CHKOUT_ORDERTOTAL']; ?></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="invoice-buttons text-right"> 
				        <!-- <a href="#" class="btn btn-danger mr-2"  onclick="$('#pg').val('app_invoice');$('#view').val('');$('#class_call').val('update');$('#ekeys').val('0');$('#keys').val('<?php echo $result['CHKOUT_CODE']; ?>');document.myform.submit();">Cancel Order</a>
                <a href="#" class="btn btn-success"  onclick="$('#pg').val('app_invoice');$('#view').val('');$('#class_call').val('update');$('#ekeys').val('2');$('#keys').val('<?php echo $result['CHKOUT_CODE']; ?>');document.myform.submit();">Delivered</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
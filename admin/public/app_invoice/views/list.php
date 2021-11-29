<?php //echo "LIST ";
$rs= $paging->paginate();
?>


<div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="<?php echo $nav->navigate('app_contactus')?>"><i class="material-icons">home</i> Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Invoice List</a>
              </li>
            </ol>
          </nav>
          <div class="col-12">
            <div class="ms-panel">
              <div class="ms-panel-header">
                <h6>Invoice List</h6>
              </div>
              <div class="ms-panel-body">
                <div class="table-responsive">
                  <table class="table table-hover thead-primary">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Phone</th>
                        <th scope="col">Location</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
                        if($paging->total_rows > 0 ){

                            $page = (empty($page))? 1:$page;
                            $num = (isset($page))? ($list->limit*($page-1))+1:1;
                            
                            $x=1;

                            foreach ($rs as $val){
                                $data =  $engine->getDataEncrypt($val);
                                // var_dump($val); die();
                    ?>

                      <tr>
                        <th scope="row"><?php echo $x; ?></th>
                        <td>ORD-<?php echo $val['CHKOUT_ID']; ?></td>
                        <td><?php echo $val['CHKOUT_NAME']; ?></td>
                        <td><?php echo $val['CHKOUT_PHONE']; ?></td>
                        <td><?php echo $val['CHKOUT_LOCATION']; ?></td>
                        <td>₵<?php echo $val['CHKOUT_SUBTOTAL']; ?></td>
                        <td>₵<?php echo $val['CHKOUT_ORDERTOTAL']; ?></td>
                        <td>
                          <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab" style="border: 2px solid #5594bc;border-radius: 4px;padding: 3px 6px;text-align: center;"
                          onclick="$('#pg').val('app_orders');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();"
                          >
                            <!-- <i class="flaticon-pencil" style="color: #1357ac;margin-right: 8px;"></i> 
                            <span style="color: #1357ac;">
                              Edit 
                            </span> -->
                            <i class="flaticon-list" style="color: #1357ac;margin-right: 8px;"></i> 
                            <span style="color: #1357ac;">
                              Details 
                            </span>
                          </a>
                        </td> 
                      </tr>

                    
                    <?php
                            $x= $x + 1;
                        }

                      }else{
                    ?>

                      <tr>
                        <td>
                          <p style="text-align: left;"><span class="badge badge-primary font-14">No Orderd Available</span></p>
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
        </div>
      </div>
    </div>
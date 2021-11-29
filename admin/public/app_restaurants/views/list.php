<?php //echo "LIST ";
$rs= $paging->paginate();
?>



<div class="ms-content-wrapper">
      <div class="row">

        <div class="col-md-12">

          <div class="row">
            <div class="col-6">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?php echo $nav->navigate('app_restaurants')?>"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Restaurants</li>
                </ol>
              </nav>
            </div>
            <div class="col-6">
              <button type="button" class="btn btn-info" style="float: right;height: 2em;padding: 0;" onclick="$('#pg').val('app_restaurants');$('#view').val('add');$('#class_call').val('');$('#keys').val('');document.myform.submit();">
                <i class="fa fa-plus"></i> &nbsp; &nbsp; Add
              </button>
            </div>
          </div>
          
          <!-- Active Orders Graph -->
          <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="ms-panel">
            <div class="ms-panel-header new">
              <h6>List of Restaurants</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Restaurant</th>
                      <th scope="col">Location</th>
                      <th scope="col">Contact's Name</th>
                      <th scope="col">Contact's Phone</th>
                      <th scope="col">Status</th>
                      <th scope="col">Dateadded</th>
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
                      <td><?php echo $x; ?></td>
                      <td class="ms-table-f-w"> <img src="media/upload/<?php echo $val['RES_PROFILEPIC']; ?>" alt="people" style="height: 2em;width: 2em;"><?php echo $val['RES_NAME']; ?> </td>
                      <td><?php echo $val['RES_LOCATION']; ?></td>
                      <td><?php echo $val['RES_CONTACTNAME']; ?></td>
                      <td><?php echo $val['RES_CONTACTNUMBER']; ?></td>
                      <td>
                          <?php 
                            if($val['RES_STATUS'] == "0"){
                          ?>
                            <span class="badge badge-danger">Inactive</span>
                          <?php 
                            }else if($val['RES_STATUS'] == "1"){
                          ?>
                            <span class="badge badge-success">Active</span>
                          <?php 
                            }
                          ?>
                        </td>

                      <td><?php echo $val['RES_DATEADDED']; ?></td>
                      <td>
                        <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab" style="border: 2px solid #5594bc;border-radius: 4px;padding: 3px 6px;text-align: center;"
                        onclick="$('#pg').val('app_orders');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();"
                        >
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
                    <td></td><td></td><td></td>
                      <td>
                        <div>
                            <p style="text-align: center;"><span class="badge badge-primary font-14">No Restaurants Added</span></p>
                        </div>
                      </td> 
                    </tr>
                  <?php
                    }
                  ?>
                    
                    <!-- <tr>
                      <td class="ms-table-f-w"> <img src="media/img/costic/french-fries.jpg" alt="people"> French Fries </td>
                      <td>$14</td>
                      <td>789393819</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="media/img/costic/cereals.jpg" alt="people"> Multigrain Hot Cereal </td>
                      <td>$25</td>
                      <td>137893137</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="media/img/costic/egg-sandwich.jpg" alt="people"> Fried Egg Sandwich </td>
                      <td>$10</td>
                      <td>235193138</td>
                    </tr> -->

                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>

      </div>
    </div>
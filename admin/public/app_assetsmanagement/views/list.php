
<?php //echo "LIST ";
$rs= $paging->paginate();
?>

<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Assets Management</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $nav->navigate('app_dashboard')?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo $nav->navigate('app_assetsmanagement')?>">Assets</a></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
				<button class="btn btn-primary-rgba" onclick="$('#pg').val('app_assetsmanagement');$('#view').val('add');$('#class_call').val('');$('#keys').val('');document.myform.submit();"> Add New &nbsp; <i class="feather icon-plus-square"></i></button>
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
        <div class="col-lg-12 col-xl-12">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12 col-xl-12">
                    <div class="card m-b-30">
						<div class="table-responsive">
							<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4" style="padding: 2em;">
								<div class="row align-items-center">
					
									<div class="col-sm-12 col-md-1">
										<label>Show </label>
									</div>
									
									<div class="col-sm-12 col-md-3">
										<div>
											<?php echo $paging->renderFirst('<span class="fa fa-angle-double-left"></span>');?>
											<?php echo $paging->renderPrev('<span class="fa fa-arrow-circle-left"></span>','<span class="fa fa-arrow-circle-left"></span>');?>
											<input name="page" size="5" type="text" class="pagedisplay short pag_input" value="<?php echo $paging->renderNavNum();?>" readonly />
											<?php echo $paging->renderNext('<span class="fa fa-arrow-circle-right"></span>','<span class="fa fa-arrow-circle-right"></span>');?>
											<?php echo $paging->renderLast('<span class="fa fa-angle-double-right"></span>');?>
											<?php $paging->limitList($list->limit,"myform");?>
										</div>
									</div>	

									
									<div class="col-sm-12 col-md-1">
										<label>Search:</label>
									</div>

									<div class="col-sm-12 col-md-3">
										<input type="search" class="form-control form-control-sm search_input" placeholder="" aria-controls="dataTable">
									</div>

									<div class="col-sm-12 col-md-1">
									</div>	
											
								</div>
								<br>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
											role="grid" aria-describedby="dataTable_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="dataTable" 			rowspan="1" colspan="1" aria-sort="ascending"
														aria-label="Name: activate to sort column descending"
														style="width: 40px;">#</th>
													<th class="sorting_asc" tabindex="0" aria-controls="dataTable" 			rowspan="1" colspan="1" aria-sort="ascending"
														aria-label="Name: activate to sort column descending"
														style="width: 150px;">Type</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Position: activate to sort column ascending"
														style="width: 140px;">Name</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Office: activate to sort column ascending"
														style="width: 120px;">Info</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Age: activate to sort column ascending"
														style="width: 120px;">Description</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Age: activate to sort column ascending"
														style="width: 120px;">Purchase Date</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Age: activate to sort column ascending"
														style="width: 120px;">Price</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Salary: activate to sort column ascending"
														style="width: 110px;">Quantity</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Salary: activate to sort column ascending"
														style="width: 100px;">Status</th>
													<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
														colspan="1" aria-label="Salary: activate to sort column ascending"
														style="width: 180px;">Action</th>
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

												<tr role="row" class="odd">
													<td class="sorting_1"><?php echo $x;?></td>
													<td><?php echo $val['AST_TYPE']; ?></td>
													<td><?php echo $val['AST_NAME']; ?></td>
													<td><?php echo $val['AST_INFO']; ?></td>
													<td><?php echo $val['AST_DESCRIPTION']; ?></td>
													<td><?php echo $val['AST_DATE_PURCHASE']; ?></td>
													<td><?php echo $val['AST_PRICE']; ?></td>
													<td><?php echo $val['AST_QUANTITY']; ?></td>
													<td>
														<?php
															if($val['AST_STATUS'] == "0"){
														?>
															<span style="color: red;">Inactive</span>
														<?php
															}else if($val['AST_STATUS'] == "1"){
														?>
															<span style="color: green;">Active</span>
														<?php
															}
														?>
													</td>
													<td> 
														<div class="row">
															<?php
															if($val['AST_STATUS'] == "1"){
															?>
															<div class="col-sm-12 col-md-6">
																<a  href="javascript:void(0);" onclick="$('#pg').val('app_assetsmanagement');$('#view').val('edit');$('#class_call').val('details');$('#keys').val('<?php echo $data; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" >
																	<span class="icon text-white-50">
																		<i class="feather icon-edit"></i>
																	</span>
																	<span class="text">Edit</span>
																</a>
															</div>

															<div class="col-sm-12 col-md-6">
																<a  href="javascript:void(0);" onclick="$('#pg').val('app_assetsmanagement');$('#view').val('delete');$('#class_call').val('delete');$('#keys').val('<?php echo $val['AST_CODE']; ?>');delete_func()" class="btn btn-danger btn-icon-split" >
																	<span class="icon text-white-50">
																		<i class="feather icon-trash-2"></i>
																	</span>
																	<span class="text">Delete</span>
																</a>
															</div>
															<?php } ?>
														</div>
													</td>
												</tr>


												<?php
															$x= $x + 1;
														}

													}

												?>

												
											</tbody>
											
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-5">
										<div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
										Showing <?php echo $paging->renderNavNum();?>of <?php echo $paging->max_pages; ?> pages
											<span class="separator">|</span>

											Total <?php  echo $paging->total_rows; ?> records

										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
				<!-- End col -->
			</div>
		</div>
	</div>
</div>



<style>
	.shipper_note_bold {
		text-transform: uppercase;
		font-size: 0.8em;
		color: #9e9e9e;
	}


	.shipper_note {
		font-size: 0.8em;
		color: #9e9e9e;
	}

	.det_title {
		margin-bottom: 0.5em;
		color: #2b2b2b;
	}

	.det_container {
		margin-top: 3em;
	}

	.note_marg_top {
		margin-top: 0.5em !important;
	}

	h6{
		font-size: 1.2em;
	}

	.wait_text{
		color: #cb9751;
	}

	.org_color{
		color: #009fff;
	}

	.back_btn_ {
        float: right;
        background: transparent;
        border: 1.5px solid #ed9d98;
        color: #ed9d98;
        padding: 0.1em 1.2em;
        border-radius: 5px;
    }
</style>



<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Requests</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Requests</a></li>
					<li class="breadcrumb-item"><a href="#">Details</a></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
				<button class="btn btn-dark" onclick="$('#pg').val('app_riders');$('#view').val('');$('#class_call').val('');$('#keys').val('');document.myform.submit();"> <i class="feather icon-arrow-left"></i> &nbsp; Back </button>
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
        <div class="col-lg-6 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="align-items-center">
						<div class="row">
							<div class="col-lg-3">
								<h5 class="det_title">Request Details</h5>
							</div>
							<div class="col-lg-6">
							</div>
							<div class="col-lg-3">
								<?php 
									$arr_inner = array("0", $engine->getDataEncrypt($result));
									$implode_data_cancel = implode("@@",$arr_inner);
									
									if($result['REQ_STATUS'] == "0"){		
								?>
									<span style="color: #f00;"> <b class="org_color">Status:</b> <i class="mdi mdi-close-octagon"></i> Request Cancelled</span>
								<?php 
									}elseif($result['REQ_STATUS'] == "1"){
								?>
									<!-- <button class="btn btn-rounded social-btn-outlined btn-dribbble"  onclick="$('#pg').val('appshipments');$('#view').val('details');$('#class_call').val('status_update');$('#keys').val('<?php //echo $implode_data_cancel; ?>');document.myform.submit();"><i class="mdi mdi-close-octagon"></i> Cancel Request</button> -->
									<span> <b class="org_color">Status:</b> <i class="mdi mdi-close-octagon"></i> Cancel Request</span>
								<?php 
									}elseif($result['REQ_STATUS'] == "2"){
								?>
									<span><b class="org_color">Status:</b> <i class="mdi mdi-truck-delivery"></i> Driver Assigned</span>
								<?php 
									}elseif($result['REQ_STATUS'] == "3"){
								?>
									<span><b class="org_color">Status:</b> <i class="mdi mdi-road-variant"></i> In Transit</span>
								<?php 
									}elseif($result['REQ_STATUS'] == "4"){
								?>
									<span><b class="org_color">Status:</b> <i class="mdi mdi-home-map-marker"></i> At Destination</span>
								<?php 
									}elseif($result['REQ_STATUS'] == "5"){
								?>
									<button class="btn btn-rounded social-btn-outlined btn-twitter"  onclick="$('#pg').val('appshipments');$('#view').val('details');$('#class_call').val('status_update');$('#keys').val('<?php echo $implode_data_cancel; ?>');document.myform.submit();"><i class="mdi mdi-bookmark-check"></i> Completed </button>
								<?php 
									}
								?>
							</div>

							<!-- <div class="col-lg-1">
								<button class="back_btn_" onclick="$('#pg').val('appshipments');$('#view').val('lists');$('#class_call').val('');document.myform.submit();"> Back</button>
							</div> -->
						</div>

						<div class="row det_container">
							<div class="col-lg-5">
								<h6 class="det_title">Shipper Note</h6>
								<p class="shipper_note_bold"> Make sure all your details are correct please do well to contact the Rider when the request is accepted. </p>
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-5">
								<h6 class="det_title">Order Reference</h6>
								<div class="row">
									<div class="col-lg-6">
										<span>Purchase Order #</span> <br>
										<span class="shipper_note"><?php echo $result['REQ_REQUEST_CODE']; ?> </span>
									</div>
									<div class="col-lg-6">
										<span>Pick Up #</span> <br>
										<span class="shipper_note"><?php echo "PKU182"; ?> </span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-6">
										<span>Pickup Locaton (From)</span> <br>
										<span class="shipper_note"><?php echo $result['REQ_LOCATION_FROM']; ?>  </span>
									</div>
									<div class="col-lg-6">
										<span>Destination (To)</span> <br>
										<span class="shipper_note"><?php echo $result['REQ_LOCATION']; ?> </span>
									</div>
								</div>
							</div>
						</div>

						<div class="row det_container">
							<div class="col-lg-5">
								<h6 class="det_title">Commodity</h6>
								<div class="row">
									<div class="col-lg-4">
										<span>Item Type<span> <br>
												<span class="shipper_note"> <?php echo $result['REQ_ITEMS']; ?> </span>
									</div>
									<div class="col-lg-4">
										<span>Total Quantity</span> <br>
										<span class="shipper_note"> <?php echo $result['REQ_TOTAL_ITEMS']; ?> </span>
									</div>
									<div class="col-lg-4">
										<span>Total Amount</span> <br>
										<span class="shipper_note"> <?php echo $result['REQ_TOTAL_AMOUNT']; ?> </span>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<p class="note_marg_top">
											<span>Info<span> <br>
											<span class="shipper_note"> 
												These are the Items the ider would be carrying 
											</span>
										</p>

									</div>
								</div>
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-5">
								<h6 class="det_title">Appointment</h6>
								<div class="row">
									<div class="col-lg-4">
										<span>Date<span> <br>
												<span class="shipper_note"> <?php echo preg_replace("/\s.*$/","",$result['REQ_PICKUP_DATE']); ?> </span>
									</div>
									<div class="col-lg-4">
										<span>Time</span> <br>
										<span class="shipper_note"> <?php echo $result['REQ_PICKUP_TIME']; ?> </span>
									</div>
									<div class="col-lg-4">
										<span>Vehicle Type</span> <br>
										<span class="shipper_note"> Motor Bike </span>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<p class="note_marg_top">
											<span>Description<span> <br>
											<span class="shipper_note"> <?php echo $result['REQ_DESCRIPTION']; ?>. 
											</span>
										</p>

									</div>
								</div>
							</div>
						</div>

						<div class="row det_container">
							<div class="col-lg-5">
								<h6 class="det_title">Client's Details</h6>
								<div class="row">
									<div class="col-lg-6">
										<p>
											<span>Fullname</span> <br>
											<span class="shipper_note"> <?php echo $result['REQ_REQUESTORNAME']; ?> </span>
										</p>
									</div>
									<div class="col-lg-6">
										<p>
											<span>Phone Number</span> <br>
											<span class="shipper_note"> <?php echo $result['REQ_REQUESTOR_PHONE']; ?> </span>
										</p>
									</div>
								</div>
							</div>

							<div class="col-lg-1"></div>
							
							<div class="col-lg-6">
								<h6 class="det_title">Rider's Details</h6>

								<?php 
									if( empty($result['REQ_RIDERNAME']) && empty($result['REQ_RIDERPHONE'])){
								?>

									<div>
										<b class="wait_text">Waiting for a Driver to accept request</b>
									</div>

								<?php 
									}else{
								?>

									<div>

										<div class="row note_marg_top">
											<div class="col-lg-6">
												<span>Fullname<span> <br>
														<span class="shipper_note"> <?php echo $result['REQ_RIDERNAME']; ?> </span>
											</div>
											<div class="col-lg-6">
												<span>Phone Number</span> <br>
												<span class="shipper_note"> <?php echo $result['REQ_RIDERPHONE']; ?> </span>
											</div>
										</div>

										<div class="row note_marg_top">
											<div class="col-lg-6">
												<span>Company's Name<span> <br>
														<span class="shipper_note"> <?php echo $result['REQ_RIDER_COMP_NAME']; ?>  </span>
											</div>
											<div class="col-lg-6">
												<span>Company's Number</span> <br>
												<span class="shipper_note"> <?php echo $result['REQ_RIDER_COMP_PHONE']; ?>  </span>
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
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->


</div>
<!-- End Contentbar -->




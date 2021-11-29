<div class="ms-content-wrapper">
	<div class="row">

		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				</ol>
			</nav>
		</div>



		<div class="col-12">
			<div class="ms-panel">
				<div class="ms-panel-header">
					<h6>Contact Us</h6>
				</div>
				<div class="ms-panel-body">
					<div class="row">
						<div class="col-sm-3">
						</div>

						<div class="col-sm-6">		
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="driver_fname">Subject</label></div>
								<div class="col-md-9 showcase_content_area">
									<select class="form-control" style="width: 15em;" id="feed_subject" name="feed_subject">
										<option value="Defult">Select Subject</option>
										<option value="Customer Issue">Customer Issue</option>
										<option value="Order Issue">Order Issue</option>
										<option value="System Error">System Error</option>
										<option value="Other">Other</option>
									</select>
								</p>
								</div>
							</div>

							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"><label
										for="feed_message">Message</label></div>
								<div class="col-md-9 showcase_content_area">
									<textarea class="form-control" name="feed_message" id="feed_message" cols="30" rows="5"></textarea>
								</div>
							</div>
							
							<div class="form-group row showcase_row_area">
								<div class="col-md-3 showcase_text_area"></div>
								<div class="col-md-9 showcase_content_area">
									<button type="submit" class="btn btn-success" onclick="$('#pg').val('app_contactus');$('#view').val('');$('#class_call').val('add');$('#keys').val('<?php echo ''; ?>');document.myform.submit();">Submit</button>
								</div>
							</div>

						</div>

						<div class="col-sm-3">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
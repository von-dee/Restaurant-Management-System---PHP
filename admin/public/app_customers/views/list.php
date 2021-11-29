<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="<?php echo $nav->navigate('app_contactus')?>"><i class="material-icons">home</i> Home</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Customers</a>
					</li>
				</ol>
			</nav>
			<div class="ms-panel">
				<div class="ms-panel-header">
					<h6>Customer List</h6>
				</div>
				<div class="ms-panel-body">
					<div class="table-responsive">
						<div id="data-table-4_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="dataTables_length" id="data-table-4_length"><label>Show <select
												name="data-table-4_length" aria-controls="data-table-4"
												class="custom-select custom-select-sm form-control form-control-sm">
												<option value="10">10</option>
												<option value="25">25</option>
												<option value="50">50</option>
												<option value="100">100</option>
											</select> </label></div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div id="data-table-4_filter" class="dataTables_filter"><label><input type="search"
												class="form-control form-control-sm" placeholder="Search Data..."
												aria-controls="data-table-4"></label></div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<table class="table w-100 thead-primary dataTable no-footer"
										role="grid"  style="width: 926px;">
										<thead>
											<tr role="row">
												<th class="sorting_asc" tabindex="0" aria-controls="data-table-4"
													rowspan="1" colspan="1" aria-sort="ascending"
													aria-label="Customer ID: activate to sort column descending"
													style="width: 127px;">Customer ID</th>
												<th class="sorting" tabindex="0" aria-controls="data-table-4"
													rowspan="1" colspan="1"
													aria-label="Customer Name: activate to sort column ascending"
													style="width: 160px;">Customer Name</th>
												<th class="sorting" tabindex="0" aria-controls="data-table-4"
													rowspan="1" colspan="1"
													aria-label="Location: activate to sort column ascending"
													style="width: 94px;">Location</th>
												<th class="sorting" tabindex="0" aria-controls="data-table-4"
													rowspan="1" colspan="1"
													aria-label="Email ID: activate to sort column ascending"
													style="width: 115px;">Email ID</th>
												<th class="sorting" tabindex="0" aria-controls="data-table-4"
													rowspan="1" colspan="1"
													aria-label="Ordered Item: activate to sort column ascending"
													style="width: 133px;">Ordered Item</th>
												<th class="sorting" tabindex="0" aria-controls="data-table-4"
													rowspan="1" colspan="1"
													aria-label="Bill: activate to sort column ascending"
													style="width: 45px;">Bill</th>
											</tr>
										</thead>
										<tbody>
											<tr role="row" >
												<td class="sorting_1">11475</td>
												<td><img src="media/img/costic/customer-3.jpg" style="width:50px; height:30px;"> Joe</td>
												<td>Street 21</td>
												<td>dhj@gfail.com</td>
												<td> Sandwich</td>
												<td>$46</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>


							<div class="row">
								<div class="col-sm-12 col-md-5">
									<div class="dataTables_info" id="data-table-4_info" role="status"
										aria-live="polite">Showing 1 to 10 of 36 entries</div>
								</div>
								<div class="col-sm-12 col-md-7">
									<div class="dataTables_paginate paging_simple_numbers" id="data-table-4_paginate">
										<ul class="pagination has-gap">
											<li class="paginate_button page-item previous disabled"
												id="data-table-4_previous"><a href="#" aria-controls="data-table-4"
													data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
											<li class="paginate_button page-item active"><a href="#"
													aria-controls="data-table-4" data-dt-idx="1" tabindex="0"
													class="page-link">1</a></li>
											<li class="paginate_button page-item "><a href="#"
													aria-controls="data-table-4" data-dt-idx="2" tabindex="0"
													class="page-link">2</a></li>
											<li class="paginate_button page-item "><a href="#"
													aria-controls="data-table-4" data-dt-idx="3" tabindex="0"
													class="page-link">3</a></li>
											<li class="paginate_button page-item "><a href="#"
													aria-controls="data-table-4" data-dt-idx="4" tabindex="0"
													class="page-link">4</a></li>
											<li class="paginate_button page-item next" id="data-table-4_next"><a
													href="#" aria-controls="data-table-4" data-dt-idx="5" tabindex="0"
													class="page-link">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
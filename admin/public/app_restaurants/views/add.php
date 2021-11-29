<div class="ms-content-wrapper">
      <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="col-6">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Restaurant</li>
                </ol>
              </nav>
            </div>
            <div class="col-6">
             
              <button type="button" class="btn btn-success" style="float: right;height: 2em;padding: 0;" onclick="$('#pg').val('app_menu');$('#view').val('add');$('#class_call').val('add');$('#keys').val('');document.myform.submit();">
                <i class="fa fa-plus"></i> &nbsp; &nbsp; Submit
              </button>

              <button type="button" class="btn btn-info" style="float: right;margin-right: 1em;height: 2em;padding: 0;" onclick="$('#pg').val('app_menu');$('#view').val('');$('#class_call').val('');$('#keys').val('');document.myform.submit();">
                <i class="fa fa-arrow-left"></i> &nbsp; &nbsp; Back
              </button>

            </div>
          </div>

          <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully read this important alert message.
          </div>
        </div>



        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Add Restaurant Form</h6>
            </div>
            <div class="ms-panel-body">
              <form class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Restaurant Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" name="restaurantTitle" placeholder="Restaurant's Name" value="" required="">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
				  
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom24">Contact's Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="restaurantContactname" id="validationCustom24" placeholder="eg Kofi Asamoah" required="">
                      <div class="invalid-feedback">
					  	Contact's Name
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom24">Contact's Phone</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="restaurantContactphone" id="validationCustom24" placeholder="eg 233678658875" required="">
                      <div class="invalid-feedback">
					  	Contact's Phone
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Location</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="restaurantLocation" id="validationCustom25" placeholder="eg East Legon Accra " required="">
                      <div class="invalid-feedback">
                        Location
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">More Info</label>
                    <div class="input-group">
                      <textarea rows="5"  name="restaurantInfo"  id="validationCustom12" class="form-control" placeholder="More Info" required=""></textarea>
                      <div class="invalid-feedback">
                        Please provide a message.
                      </div>
                    </div>
                  </div>
                  
                </div>




              </form>

            </div>
          </div>

        </div>

        <div class="col-xl-6 col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="ms-panel">
                <div class="ms-panel-header">
                  <h6>Restaurant </h6>
                </div>
                <div class="ms-panel-body">
                  <div class="">
                    <label for="validationCustom12">Restaurant Image</label>
                    <div class="custom-file">
                      <input type="file"  name="restaurantImage"  class="custom-file-input" id="validatedCustomFile">
                      <label class="custom-file-label" for="validatedCustomFile">Upload Images...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>
                </div>
                <div class="ms-panel-header new">
                  <p class="medium">Status Available</p>
                  <div>
                    <label class="ms-switch">
                      <input type="checkbox" checked="">
                      <span class="ms-switch-slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="ms-panel-header new">
                  <!-- <button class="btn btn-secondary d-block" type="submit">Save</button> -->
                  <button class="btn btn-success d-block" type="submit" onclick="$('#pg').val('app_menu');$('#view').val('add');$('#class_call').val('add');$('#keys').val('');document.myform.submit();">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
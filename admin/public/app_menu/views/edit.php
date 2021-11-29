
<div class="ms-content-wrapper">
      <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="col-6">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
              </nav>
            </div>
            <div class="col-6">
             
              <button type="button" class="btn btn-success" style="float: right;height: 2em;padding: 0;" onclick="$('#pg').val('app_menu');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['PROD_CODE'] ?>');document.myform.submit();">
                <i class="fa fa-plus"></i> &nbsp; &nbsp; Submit
              </button>

              <button type="button" class="btn btn-info" style="float: right;
    margin-right: 1em;height: 2em;padding: 0;" onclick="$('#pg').val('app_menu');$('#view').val('');$('#class_call').val('');$('#keys').val('');document.myform.submit();">
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
              <h6>Add Product Form</h6>
            </div>
            <div class="ms-panel-body">
              <form class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom18">Product Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom18" name="productTitle" value="<?php echo $result['PROD_NAME']; ?>" placeholder="Product Name" value="" required="">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom22">Select Day</label>
                    <div class="input-group">
                      <select class="form-control" id="validationCustom22" name="productDay" required="">
                        <option value="">Select Day</option>
                        <option <?php  if($result['PROD_DAY'] == "Monday"){echo "selected";} ?> value="Monday">Monday</option>
                        <option <?php  if($result['PROD_DAY'] == "Tuesday"){echo "selected";} ?> value="Tuesday">Tuesday</option>
                        <option <?php  if($result['PROD_DAY'] == "Wednesday"){echo "selected";} ?> value="Wednesday">Wednesday</option>
                        <option <?php  if($result['PROD_DAY'] == "Thursday"){echo "selected";} ?> value="Thursday">Thursday</option>
                        <option <?php  if($result['PROD_DAY'] == "Friday"){echo "selected";} ?> value="Friday">Friday</option>
                        <option <?php  if($result['PROD_DAY'] == "Saturday"){echo "selected";} ?> value="Saturday">Saturday</option>
                        <option <?php  if($result['PROD_DAY'] == "Sunday"){echo "selected";} ?> value="Sunday">Sunday</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a Day.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom24">Quantity</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $result['PROD_QUANTITY']; ?>" name="productQuantity" id="validationCustom24" placeholder="00" required="">
                      <div class="invalid-feedback">
                        Quantity
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Cost Price</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $result['PROD_PURCHASEPRICE']; ?>" name="productCost" id="validationCustom25" placeholder="₵00.00" required="">
                      <div class="invalid-feedback">
                        Cost Price
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom25">Selling Price</label>
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $result['PROD_SALESPRICE']; ?>" name="productPrice" id="validationCustom25" placeholder="₵00.00" required="">
                      <div class="invalid-feedback">
                        Selling Price
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom23">Currency</label>
                    <div class="input-group">
                      <select class="form-control" name="productCurrency" id="validationCustom23" required="">
                        <option value="₵" selected>GHC (₵)</option>
                        <option value="$">USD ($)</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a Currency
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom12">Description</label>
                    <div class="input-group">
                      <textarea rows="5"  name="productDescription"  id="validationCustom12" class="form-control" placeholder="Description" required=""><?php echo $result['PROD_DESCRIPTION']; ?></textarea>
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
                  <h6>Product </h6>
                </div>
                <div class="ms-panel-body">
                  <div class="">
                    <img style="height: 15em;" src="media/upload/<?php echo $result['PROD_PICTUREURL']; ?>" alt="">
                    <input type="hidden" id="productImageOld" name="productImageOld" value="<?php echo $result['PROD_PICTUREURL'] ?>">
                  </div>
                  <div class="">
                    <label for="validationCustom12">Product Image</label>
                    <div class="custom-file">
                      <input type="file"  name="productImage"  class="custom-file-input" id="validatedCustomFile">
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
                  <p class="medium">Discount Active</p>
                  <div>
                    <label class="ms-switch">
                      <input type="checkbox" checked="">
                      <span class="ms-switch-slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="ms-panel-header new">
                  <!-- <button class="btn btn-secondary d-block" type="submit">Save</button> -->
                  <button class="btn btn-success d-block" type="submit" onclick="$('#pg').val('app_menu');$('#view').val('');$('#class_call').val('update');$('#keys').val('<?php echo $result['PROD_CODE'] ?>');document.myform.submit();">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
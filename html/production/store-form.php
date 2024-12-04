<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Add Store</h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	            <form id="general-form">
	            	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Store Head<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control">
                     <option>Select User</option>
                     <option>Anand Singh</option>
                     <option>Mark Taylor</option>
                   </select>
                </div>
              </div>
	            	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="shortcode">Store Name<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="shortcode" name="short_code" required="required" placeholder="Store Name" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="shortcode">Short Code<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="shortcode" name="short_code" required="required" placeholder="Short Code" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinefirst">Address Line 1 <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="addresslinefirst" required="required" placeholder="Address Line 1" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinesecond">Address Line 2 <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="addresslinesecond" required="required" placeholder="Address Line 2" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="city">City <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="city" required="required" placeholder="City" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="state">State <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="state" required="required" placeholder="State" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="country">Country <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="country" required="required" placeholder="Country" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="pincode">Pin code <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="pincode" required="required" placeholder="Pin code" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Store Currency<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control">
                     <option>Select Currency</option>
                     <option>INR</option>
                     <option>USD</option>
                   </select>
                </div>
              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="pincode">Status<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select class="form-control">
                      <option>Choose Status</option>
                      <option>Active</option>
                      <option>Disabled</option>
                    </select>
	                </div>
	              </div>

	              <div class="clearfix"></div>
	              <div class="ln_solid"></div>
	              <div class="form-group">
	                <div class="col-md-6 col-md-offset-3">
	                  <button type="submit" class="btn btn-success">Save</button>
	                </div>
	              </div>

	            </form>
	          </div>
	        </div>
	      </div>
	</div>
<?php include('footer.php') ?>
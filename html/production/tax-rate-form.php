<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>General Form <small>Users</small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	            <form id="general-form">

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="tax_identifier">Tax Identifier <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="tax_identifier" required="required" placeholder="Tax Identifier" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="country">Country <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select class="form-control" id="country">
	                  	<option>Select Country</option>
	                  	<option>India</option>
	                  	<option>US</option>
	                  	<option>USA</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="state">State <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select class="form-control" id="state">
	                  	<option>Select State</option>
	                  	<option>West Bengal</option>
	                  	<option>Bihar</option>
	                  	<option>Jharkhand</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="zip_post_range">Zip/Post is Range <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select class="form-control" id="zip_post_range">
	                  	<option class="range_yes">Yes</option>
	                  	<option class="range_no" selected="selected">No</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 zip_range">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="zip_from">Zip/Post From <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="zipfrom" required="required" placeholder="Zip/Post From" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 zip_range">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="zip_to">Zip/Post To <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="zipto" required="required" placeholder="Zip/Post To" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 zip_code">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="zip_code">Zip/Post Code <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="zipcode" required="required" placeholder="Zip/Post Code" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="rate_percent">Rate Percent <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="rate_percent" required="required" placeholder="Rate Percent" class="form-control col-md-7 col-xs-12">
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
<script type="text/javascript">
$('#zip_post_range').change(function(){
  if($('.range_yes').is(':selected')){
    $('.zip_range').show(200);
    $('.zip_code').hide(200);
  }else if($('.range_no').is(':selected')){
    $('.zip_range').hide(200);
    $('.zip_code').show(200);
  }
});
</script>

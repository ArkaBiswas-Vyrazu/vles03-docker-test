<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Add Tax Rule <small>Users</small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	            <form id="general-form">

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="name">Name <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="name" required="required" placeholder="Name" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="tax_class">Tax Class <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select  class=" form-control select_multiple" id="tax_class" multiple="multiple">
	                  	<option selected="selected">Taxable Goods</option>
	                  	<option>Shipping</option>
	                  	<option>Retail & Customer</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="tax_rate">Tax Rate <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select  class=" form-control select_multiple" id="tax_rate" multiple="multiple">
	                  	<option selected>US.CA-*-Rate 1</option>
	                  	<option>US.NY-*-Rate 1</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="priority">Priority <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="priority" required="required" placeholder="Priority" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="calculateofftotal">Calculate off Subtotal Only <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="checkbox" id="calculateofftotal" required="required">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="sort_order">Sort Order <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="sort_order" required="required" placeholder="Sort Order" class="form-control col-md-7 col-xs-12">
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
<!-- <script type="text/javascript">
$(".select_multiple").select2({
  placeholder: "Select tax class"
});
</script> -->

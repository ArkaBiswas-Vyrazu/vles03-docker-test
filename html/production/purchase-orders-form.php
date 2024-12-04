<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Purchase Order Form <small>Users</small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	            <form id="product_order_form">

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="select_supplier">Select Supplier <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <!-- <input type="text" id="name" required="required" placeholder="Select Supplier" class="form-control col-md-7 col-xs-12"> -->
	                  <select class="form-control" id="select_supplier">
	                  	<option>Select Supplier Name</option>
	                  	<option>name</option>
	                  	<option>name</option>
	                  	<option>name</option>
	                  </select>
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="estimated_delivery_date">Estimated Delivery Date <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="estimated_delivery_date" required="required" placeholder="Estimated Delivery Date" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="final_eta_del_date">Final ETA Delivery Date <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="final_eta_del_date" required="required" placeholder="Final ETA Delivery Date" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="po_invoice">PO/Invoice <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="po_invoice" required="required" placeholder="PO/Invoice" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="purchase_order_comment">Comment <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <!-- <input type="text" id="purchase_order_comment" required="required" placeholder="Address Line 1" class="form-control col-md-7 col-xs-12"> -->
	                  <textarea class="form-control" id="purchase_order_comment"></textarea>
	                </div>
	              </div>

	              <div class="clearfix"></div>
	              <div class="ln_solid"></div>
	              <div class="form-group">
	                <div class="col-md-6 col-md-offset-3">
	                  <button type="submit" class="btn btn-success">Add Purchse Order</button>
	                </div>
	              </div>

	            </form>
	          </div>
	        </div>
	        <div class="x_panel">
	        	<div class="row">
	        		<div class="x_content">
	        		<form id="search_product_button">
		        		  <div class="form-group">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                          	<div class="input-group">
							      <input type="text" class="form-control" placeholder="Search for Sku">
							      <span class="input-group-btn">
							        <button class="btn btn-primary" type="button">Search By Sku</button>
							      </span>
							    </div>
	                        </div>
	                      </div>

	                      <div class="form-group">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                          <div class="input-group">
							      <input type="text" class="form-control" placeholder="Search for Name">
							      <span class="input-group-btn">
							        <button class="btn btn-primary" type="button">Search By Name</button>
							      </span>
							    </div>
	                        </div>
	                      </div>

	                      <!-- <div class="form-group">
			                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			                  <button type="submit" class="btn btn-success pull-right">Create Purchase Order</button>
			                </div>
			              </div> -->
		        	</form>
		        	</div>
	        	</div>
	        	<div class="x_content table-responsive">
                    <table id="purchase_orders_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Product Name</th>
                          <th>Sku</th>
                          <th>Unit Price </th>
                          <th>QTY </th>
                          <th>Cost </th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
	        </div>
	       
	      </div>
	       <div class="clearfix"></div>
	</div>
<?php include('footer.php') ?>
<script type="text/javascript">
function datepickers(arg){
	$(arg).daterangepicker({
	        singleDatePicker: true,
	        singleClasses: "picker_4",
	        showDropdowns: true
	});
}
$(document).ready(function(){
	datepickers('#estimated_delivery_date');
	datepickers('#final_eta_del_date');
});
</script>
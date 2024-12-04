<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Purchase Order Details <small>Users</small></h2>
              <a href="javascript:void(0);" class="btn btn-success pull-right save_btn">Save</a>
              <a href="javascript:void(0);" class="btn btn-primary pull-right edit_btn">Edit</a>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
              <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="x_content">
                <div class="x_title">
                  <h2>Order Id <span>1233456443</span> <small>Users</small></h2>
                  <div class="clearfix"></div>
                </div>
                <form id="order_details">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="order_date">Order Date <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="order_date" required="required" placeholder="Order Date" class="form-control col-md-7 col-xs-12 disabled_input" value="01/10/2017">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="estimated_arrival_date">Est. Arrival Date <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="estimated_arrival_date" required="required" placeholder="Estimated Arrival Date" value="01/10/2017" class="form-control col-md-7 col-xs-12 disabled_input">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="final_eta_notice">Final ETA Notice <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="final_eta_notice" required="required" placeholder="Final ETA Notice" class="form-control col-md-7 col-xs-12 disabled_input" value="01/10/2017">
                    </div>
                  </div>

                </form>
                </div>
              </div>
              <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="x_content">
                <div class="x_title">
                  <h2>Supplier Information <small>Users</small></h2>
                  <div class="clearfix"></div>
                </div>
                <form id="order_details">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="supplier_name">Supplier Name <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <!-- <input type="text" id="order_date" required="required" placeholder="Order Date" class="form-control col-md-7 col-xs-12"> -->
                      <textarea class="form-control disabled_input" id="supplier_name" placeholder="Supplier Name">Supplier Name, Supplier Name, Supplier Name</textarea>
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="email">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="email" id="email" required="required" placeholder="Email" class="form-control col-md-7 col-xs-12 disabled_input" value="email@email.com">
                    </div>
                  </div>

                </form>
                </div>
              </div>
	          </div>
	        </div>
	        <div class="x_panel">
	        	<div class="x_title">
                  <h2>Items Ordered <small>Users</small></h2>
                  <div class="clearfix"></div>
                </div>
	        	<div class="x_content table-responsive">
                    <table id="purchase_orders_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>PO/Invoice</th>
                          <th>Created Date</th>
                          <th>Est. Arrival Date </th>
                          <th>Final ETA Notice</th>
                          <th>Supplier</th>
                          <th>Product Information</th>
                          <th>Grand Total</th>
                          <th>Comments</th>
                          <th>Status</th>
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
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
	        </div>

          <div class="row">
              <div class="x_content">
                <div class="row">
                <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="x_content">
                  <div class="x_title">
                    <h2>Comments History <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <form id="order_details">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="status">Status <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control" id="status">
                          <option>Select Status</option>
                          <option>Arrived</option>
                          <option>Delayed</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="comments">Comments <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" id="comments" placeholder="Write Comments Here..."></textarea>
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success pull-right">Save</button>
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="ln_solid"></div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="Created_on">Created <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="Created_on" required="required" placeholder="Created" class="form-control col-md-7 col-xs-12 disabled_input" value="Created on 01/10/2017" disabled="disabled">
                      </div>
                      <p class="cmnt">Comment: Paid 30%(9016.14) to start order</p>
                    </div>

                  </form>
                  </div>
                </div>
                <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="x_content">
                  <div class="x_title">
                    <h2>Order Total <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <form id="order_details">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" for="email">Grand Total <span class="required">*</span>
                      </label>
                      <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" required="required" placeholder="Grand Total" class="form-control col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right disabled_input" value="$30,000.00">
                      </div>
                    </div>

                  </form>
                  </div>
                </div>
                </div>
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
  datepickers('#order_date');
	datepickers('#estimated_arrival_date');
	datepickers('#final_eta_notice');
  $('.disabled_input').prop('disabled' , true);
  $('.edit_btn').click(function(){
    $('.disabled_input').prop('disabled' , false);
  });
  $('.save_btn').click(function(){
    $('.disabled_input').prop('disabled' , true);
  });
});
</script>
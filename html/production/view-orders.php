<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Order Details <small>Users</small></h2>
              <a href="javascript:void(0);" class="btn btn-success pull-right save_btn">Save</a>
              <a href="javascript:void(0);" class="btn btn-primary pull-right edit_btn">Edit</a>
              <a href="packing-slip.php" class="btn btn-info pull-right packaging_slip">Packing Slip</a>
              <a href="shipping-label.php" class="btn btn-info pull-right shipping_label">Shipping Label</a>
              <a href="invoice.php" class="btn btn-info pull-right invoice_btn">Invoice</a>
	            <div class="clearfix"></div>
	          </div>
	        </div>
          <div class="row">
          <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
            <div class="row">
            <div class="x_title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
              <h2 title="Order Id 1233456443 (The order confirmation email was sent)">Order Id <span>1233456443</span> (The order confirmation email was sent)<small>Users</small></h2>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="sales_order_status">Order Status <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="sales_order_status" required="required" placeholder="Order Status" value="Pending" class="form-control col-md-7 col-xs-12 disabled_input">
                </div>
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="sales_payment_type">Payment Type <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="sales_payment_type" required="required" placeholder="Payment Type" value="COD" class="form-control col-md-7 col-xs-12 disabled_input">
                </div>
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="sales_currency">Currency <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="sales_currency" required="required" placeholder="Currency" value="USD" class="form-control col-md-7 col-xs-12 disabled_input">
                </div>
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="flat_rate">Flat Rate <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="flat_rate" required="required" placeholder="Flat Rate" value="Fixed $0.00" class="form-control col-md-7 col-xs-12 disabled_input">
                </div>
              </div>
<!-- 
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="purchased_from">Purchased From <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control disabled_input" id="purchased_from" placeholder="Purchased From">Supplier Name, Supplier Name, Supplier Name</textarea>
                </div>
              </div> -->

            </form>
            </div>
            </div>
          </div>
          <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
            <div class="row">
            <div class="x_title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
              <h2>Account Information <small>Users</small></h2>
              <div class="clearfix"></div>
            </div>
            <form id="account_info">
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="customer_name">Customer Name <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="customer_name" required="required" placeholder="Customer Name" value="Customer Name" class="form-control col-md-7 col-xs-12 disabled_input">
                </div>
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="email">Email <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email" required="required" placeholder="Email" class="form-control col-md-7 col-xs-12 disabled_input" value="email@email.com">
                </div>
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="c_phone">Phone <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="c_phone" required="required" placeholder="Phone" class="form-control col-md-7 col-xs-12 disabled_input" value="9893126312">
                </div>
              </div>

            </form>
            </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="x_title">
                <h2>Billing Address <small>Users</small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
              <div class="row">
                <form id="billing_address">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="billing_add_name">Name <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="billing_add_name" required="required" placeholder="Name" class="form-control col-md-7 col-xs-12 disabled_input" value="Name">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="billing_add_email">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="email" id="billing_add_email" required="required" placeholder="Email" class="form-control col-md-7 col-xs-12 disabled_input" value="email@email.com">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="billing_add_phone">Phone <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="billing_add_phone" required="required" placeholder="Phone" class="form-control col-md-7 col-xs-12 disabled_input" value="9875133547">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="billing_add_address">Address <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <!-- <input type="text" id="billing_add_address" required="required" placeholder="Address" class="form-control col-md-7 col-xs-12 disabled_input" value="Name"> -->
                      <textarea class="form-control disabled_input" id="billing_add_address" placeholder="Billing Address">Address, Address, Address, Address, Address</textarea>
                    </div>
                  </div>

                </form>
                </div>
              </div>
            </div>


            <div class="x_panels col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="x_title">
                <h2>Shipping Address <small>Users</small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
              <div class="row">
                <form id="shipping_address">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="shipping_add_name">Name <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="shipping_add_name" required="required" placeholder="Name" class="form-control col-md-7 col-xs-12 disabled_input" value="Name">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="shipping_add_email">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="email" id="shipping_add_email" required="required" placeholder="Email" class="form-control col-md-7 col-xs-12 disabled_input" value="email@email.com">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="shipping_add_phone">Phone <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="shipping_add_phone" required="required" placeholder="Phone" class="form-control col-md-7 col-xs-12 disabled_input" value="9875133547">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="shipping_add_address">Address <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <!-- <input type="text" id="billing_add_address" required="required" placeholder="Address" class="form-control col-md-7 col-xs-12 disabled_input" value="Name"> -->
                      <textarea class="form-control disabled_input" id="shipping_add_address" placeholder="Shipping Address">Address, Address, Address, Address, Address</textarea>
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
                          <th>Product</th>
                          <th>Item Status</th>
                          <th>Original Price</th>
                          <th>Price</th>
                          <th>Qty</th>
                          <th>Subtotal</th>
                          <th>Tax Amount</th>
                          <th>Tax Percent</th>
                          <th>Discount Amount</th>
                          <th>Row Total</th>
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
                      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <input type="checkbox" name="notify_email" id="notify_email">
                          </div>
                          <label class="control-label col-lg-10 col-md-10 col-sm-10 col-xs-10" for="notify_email">Notify Customer by Email <span class="required">*</span>
                          </label>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <input type="checkbox" name="visible_frontend" id="visible_frontend">
                          </div>
                          <label class="control-label col-lg-10 col-md-10 col-sm-10 col-xs-10" for="visible_frontend">Visible On Frontend <span class="required">*</span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 pull-right">
                        <button type="submit" class="btn btn-success">Save</button>
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="ln_solid"></div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="created_on">Created At <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="created_on" required="required" placeholder="Created At" class="form-control col-md-7 col-xs-12 disabled_input" value="Created on 01/10/2017" disabled="disabled">
                      </div>
                      <p class="notify"><span><i class="fa fa-check">&nbsp;</i></span>Customer Notified</p>
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
                      <label class="control-label col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" for="sub_total">Sub Total <span class="required">*</span>
                      </label>
                      <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="sub_total" required="required" placeholder="Sub Total" class="form-control col-lg-7 col-md-7 col-sm-7 col-xs-12 disabled_input text-right" value="$30,000.00">
                      </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" for="shipping_handling">Shipping & Handling <span class="required">*</span>
                      </label>
                      <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="shipping_handling" required="required" placeholder="Shipping & Handling" class="form-control col-lg-7 col-md-7 col-sm-7 col-xs-12 disabled_input text-right" value="$0.00">
                      </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right" for="email">Grand Total <span class="required">*</span>
                      </label>
                      <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" required="required" placeholder="Email" class="form-control col-lg-7 col-md-7 col-sm-7 col-xs-12 disabled_input text-right" value="$30,000.00">
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
	// datepickers('#estimated_arrival_date');
	// datepickers('#final_eta_notice');
  $('.disabled_input').prop('disabled' , true);
  $('.edit_btn').click(function(){
    $('.disabled_input').prop('disabled' , false);
  });
  $('.save_btn').click(function(){
    $('.disabled_input').prop('disabled' , true);
  });
});
</script>
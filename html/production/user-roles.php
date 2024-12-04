<?php include('header.php') ?>

	<div class="right_col inventory-menu-wrapper" role="main">
	<div class="page-title">
	    <div class="title_left">
	      <h3>Add Roles</h3>
	    </div>
	</div>
	  <div class="row">
		<div class="clearfix"></div>
		  <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		      <div class="x_panel">
		        <div class="x_title">
		          <h2>Create Roles for Your Organisation</h2>
		          <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<form id="roles-form">

		              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="role_name">Role Name <span class="required">*</span>
		                </label>
		                <div class="col-md-6 col-sm-6 col-xs-12">
		                  <input type="text" id="role_name" required="required" placeholder="Role Name" class="form-control col-md-7 col-xs-12">
		                </div>
		              </div>

		            </form>
		        </div>
		        <div class="x_title">
		          <h2>User Roles</h2>
		          <div class="clearfix"></div>
		        </div>
		         <div class="x_content">
		         	<div class="row">
		                <div class="fileTree">
		                  <ul class="list-inline">
		                      <li class="main-menu">
		                      <input type="checkbox" name="salesinventory" id="salesinventory" class="parent-checkbox">
		                      <label for="salesinventory">Sales Inventory</label>
		                      	<ul class="submenu list-inline">
								   <li>
								   <input type="checkbox" name="items" id="items" class="child-checkbox">
								   <label for="items">Items</label></li>
								   <li>
								   <input type="checkbox" name="salesattributes" id="salesattributes" class="child-checkbox">
								   <label for="salesattributes">Attributes</label></li>
								   <li>
								   <input type="checkbox" name="salescategory" id="salescategory" class="child-checkbox">
								   <label for="salescategory">Category</label></li>
								</ul>
		                      </li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="productioninventory" id="productioninventory" class="parent-checkbox">
		                      <label for="productioninventory">Production Inventory</label>
		                      	<ul class="submenu list-inline">
								   <li>
								   <input type="checkbox" name="warehouseitems" id="warehouseitems" class="child-checkbox">
								   <label for="warehouseitems">Warehouse Items</label></li>
								   <li>
								   <input type="checkbox" name="productionorders" id="productionorders" class="child-checkbox">
								   <label for="productionorders">Orders</label></li>
								   <li>
								   <input type="checkbox" name="productionattributes" id="productionattributes" class="child-checkbox">
								   <label for="productionattributes">Attributes</label></li>
								   <li>
								   <input type="checkbox" name="productioncategory" id="productioncategory" class="child-checkbox">
								   <label for="productioncategory">Category</label></li>
								</ul>
		                      </li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="purchaseorders" id="purchaseorders" class="parent-checkbox">
		                      <label for="purchaseorders">Purchase Orders</label>
		                      	<ul class="submenu list-inline">
								   <li>
								   <input type="checkbox" name="vendors" id="vendors" class="child-checkbox">
								   <label for="vendors">Vendors</label></li>
								   <li>
								   <input type="checkbox" name="createpo" id="createpo" class="child-checkbox">
								   <label for="createpo">Create PO</label></li>
								   <li>
								   <input type="checkbox" name="po" id="po" class="child-checkbox">
								   <label for="po">PO</label></li>
								   <li>
								   <input type="checkbox" name="postatus" id="postatus" class="child-checkbox">
								   <label for="postatus">PO Status</label></li>
								</ul>
		                      </li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="sales" id="sales" class="parent-checkbox">
		                      <label for="sales">Sales</label>
		                      	<ul class="submenu list-inline">
								   <li>
								   <input type="checkbox" name="salesorder" id="salesorder" class="child-checkbox">
								   <label for="salesorder">Order</label></li>
								   <li>
								   <input type="checkbox" name="invoices" id="invoices" class="child-checkbox">
								   <label for="invoices">Invoices</label></li>
								   <li>
								   <input type="checkbox" name="shipments" id="shipments" class="child-checkbox">
								   <label for="shipments">Shipments</label></li>
								   <li>
								   <input type="checkbox" name="orderstatus" id="orderstatus" class="child-checkbox">
								   <label for="orderstatus">Order Status</label></li>
								   <li>
								   <input type="checkbox" name="pay" id="pay" class="child-checkbox">
								   <label for="pay">Pay</label></li>
								   <li>
								   <input type="checkbox" name="shippingmethods" id="shippingmethods" class="child-checkbox">
								   <label for="shippingmethods">Shipping Methods</label></li>
								   <li>
								   <input type="checkbox" name="paymentmethods" id="paymentmethods" class="child-checkbox">
								   <label for="paymentmethods">Payment Methods</label></li>
								</ul>
		                      </li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="orderattributes" id="orderattributes" class="parent-checkbox">
		                      <label for="orderattributes">Order Attributes</label></li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="predictiveinventory" id="predictiveinventory" class="parent-checkbox">
		                      <label for="predictiveinventory">Predictive Inventory</label>
		                      	<ul class="submenu list-inline">
								   <li>
								   <input type="checkbox" name="masterproducts" id="masterproducts" class="child-checkbox">
								   <label for="masterproducts">Master Products</label></li>
								   <li>
								   <input type="checkbox" name="inventorystocks" id="inventorystocks" class="child-checkbox">
								   <label for="inventorystocks">Inventory Stocks</label></li>
								</ul>
		                      </li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="users" id="users" class="parent-checkbox">
		                      <label for="users">Users</label></li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="acl" id="acl" class="parent-checkbox">
		                      <label for="acl">ACL</label></li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="customerlogin" id="customerlogin" class="parent-checkbox">
		                      <label for="customerlogin">Customer Login</label></li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="vendorpanel" id="vendorpanel" class="parent-checkbox">
		                      <label for="vendorpanel">Vendor Panel</label></li> 
		                      <li class="main-menu">
		                      <input type="checkbox" name="accounts" id="accounts" class="parent-checkbox">
		                      <label for="accounts">Accounts</label>
		                      	<ul class="submenu list-inline">
								   <li>
								   <input type="checkbox" name="pendingpo" id="pendingpo" class="child-checkbox">
								   <label for="pendingpo">Pending PO</label></li>
								   <li>
								   <input type="checkbox" name="approvepo" id="approvepo" class="child-checkbox">
								   <label for="approvepo">Approve PO</label></li>
								   <li>
								   <input type="checkbox" name="listpo" id="listpo" class="child-checkbox">
								   <label for="listpo">List PO</label></li>
								</ul>
		                      </li> 
		                  </ul>
		                </div>
		            </div>
		         </div>
		       </div>
		    </div>
		  </div>
	  </div>
	</div>
<!-- Js -->

<?php include('footer.php') ?>
 <script type="text/javascript">
	$(document).ready(function(){
	// new edition

		$(".parent-checkbox").change(function () {
		    $(this).parent().children('ul').children('li').find('input').prop('checked' , $(this).prop('checked'));
		});

		$(".child-checkbox").on("change" , function(){
		  var pcname = $(this).parent().parent().parent().find(".parent-checkbox").siblings("label").text();
		  var chkcnt = $(this).parent().parent().parent().find(".parent-checkbox").parent().children("ul").children("li").find(".child-checkbox:checkbox:checked").length;
		  console.log(pcname + " :- " + chkcnt);
		  if (chkcnt >= 1) {
		    $(this).parent().parent().parent().find(".parent-checkbox").each(function(){
		      $(this).prop("checked" , true);
		    });
		  }

		  else if(chkcnt < 1){
		    $(this).parent().parent().parent().find(".parent-checkbox").each(function(){
		      $(this).prop("checked" , false);
		    });
		  }

		});

	});
</script>

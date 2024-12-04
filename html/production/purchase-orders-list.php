<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Purchase Orders List <small>Users</small></h2>
                    <a href="purchase-orders-form.php" class="btn btn-success pull-right">Add Purchase Orders</a>
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
                          <td>45456642DEF34</td>
                          <td>2017/01/25</td>
                          <td>2017/02/15</td>
                          <td>Maximum 2017/02/25</td>
                          <td>Supplier Name</td>
                          <td>Short Product Description</td>
                          <td>$610,000</td>
                          <td>Good</td>
                          <td>Active</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>45456642DEF34</td>
                          <td>2017/01/25</td>
                          <td>2017/02/15</td>
                          <td>Maximum 2017/02/25</td>
                          <td>Supplier Name</td>
                          <td>Short Product Description</td>
                          <td>$610,000</td>
                          <td>Good</td>
                          <td>Active</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>45456642DEF34</td>
                          <td>2017/01/25</td>
                          <td>2017/02/15</td>
                          <td>Maximum 2017/02/25</td>
                          <td>Supplier Name</td>
                          <td>Short Product Description</td>
                          <td>$610,000</td>
                          <td>Good</td>
                          <td>Active</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>45456642DEF34</td>
                          <td>2017/01/25</td>
                          <td>2017/02/15</td>
                          <td>Maximum 2017/02/25</td>
                          <td>Supplier Name</td>
                          <td>Short Product Description</td>
                          <td>$610,000</td>
                          <td>Good</td>
                          <td>Active</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>45456642DEF34</td>
                          <td>2017/01/25</td>
                          <td>2017/02/15</td>
                          <td>Maximum 2017/02/25</td>
                          <td>Supplier Name</td>
                          <td>Short Product Description</td>
                          <td>$610,000</td>
                          <td>Good</td>
                          <td>Active</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>45456642DEF34</td>
                          <td>2017/01/25</td>
                          <td>2017/02/15</td>
                          <td>Maximum 2017/02/25</td>
                          <td>Supplier Name</td>
                          <td>Short Product Description</td>
                          <td>$610,000</td>
                          <td>Good</td>
                          <td>Active</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>
<?php include('footer.php'); ?>
<script type="text/javascript">
	$('#purchase_orders_table').DataTable();
</script>
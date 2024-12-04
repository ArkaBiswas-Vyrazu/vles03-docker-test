<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Orders List <small>Users</small></h2>
                    <a href="orders-form.php" class="btn btn-success pull-right">Add Order</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="order_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Order No.</th>
                          <th>Purchased From(Store)</th>
                          <th>Purchased On</th>
                          <th>Bill To Name</th>
                          <th>Ship TO Name</th>
                          <th>G.T. (Base)</th>
                          <th>G.T. (Purchased)</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>1237Fd4345DE</td>
                          <td>Store Name</td>
                          <td>01/01/2017</td>
                          <td>Test Name</td>
                          <td>Test Name</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>active</td>
                          <td>
                            <a href="view-orders.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>1237Fd4345DE</td>
                          <td>Store Name</td>
                          <td>01/01/2017</td>
                          <td>Test Name</td>
                          <td>Test Name</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>active</td>
                          <td>
                            <a href="view-orders.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>1237Fd4345DE</td>
                          <td>Store Name</td>
                          <td>01/01/2017</td>
                          <td>Test Name</td>
                          <td>Test Name</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>active</td>
                          <td>
                            <a href="view-orders.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>1237Fd4345DE</td>
                          <td>Store Name</td>
                          <td>01/01/2017</td>
                          <td>Test Name</td>
                          <td>Test Name</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>active</td>
                          <td>
                            <a href="view-orders.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>1237Fd4345DE</td>
                          <td>Store Name</td>
                          <td>01/01/2017</td>
                          <td>Test Name</td>
                          <td>Test Name</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>active</td>
                          <td>
                            <a href="view-orders.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>1237Fd4345DE</td>
                          <td>Store Name</td>
                          <td>01/01/2017</td>
                          <td>Test Name</td>
                          <td>Test Name</td>
                          <td>$320,800</td>
                          <td>$320,800</td>
                          <td>active</td>
                          <td>
                            <a href="view-orders.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
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
	$('#order_table').DataTable();
</script>
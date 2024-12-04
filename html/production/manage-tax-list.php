<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Tax List <small>Users</small></h2>
                    <a href="manage-tax-form.php" class="btn btn-success pull-right">Add Tax</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="attr-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Name</th>
                          <th>Tax Class</th>
                          <th>Tax Rate</th>
                          <th>Priority</th>
                          <th>Calculate Subtotal Only</th>
                          <th>Sort Order</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Tiger Nixon</td>
                          <td>Retail & Customer</td>
                          <td>US.CA-*-Rate 1</td>
                          <td>Active</td>
                          <td>$320,800</td>
                          <td>1</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Garrett Winters</td>
                          <td>Retail & Customer</td>
                          <td>US.CA-*-Rate 1</td>
                          <td>Active</td>
                          <td>$170,750</td>
                          <td>2</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Garrett Winters</td>
                          <td>Retail & Customer</td>
                          <td>US.CA-*-Rate 1</td>
                          <td>Active</td>
                          <td>$170,750</td>
                          <td>3</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rhona Davidson</td>
                          <td>Retail & Customer</td>
                          <td>US.CA-*-Rate 1</td>
                          <td>Active</td>
                          <td>$327,900</td>
                          <td>4</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Colleen Hurst</td>
                          <td>Retail & Customer</td>
                          <td>US.CA-*-Rate 1</td>
                          <td>Active</td>
                          <td>$205,500</td>
                          <td>5</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Sonya Frost</td>
                          <td>Retail & Customer</td>
                          <td>US.CA-*-Rate 1</td>
                          <td>Active</td>
                          <td>$103,600</td>
                          <td>6</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
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
	$('#attr-table').DataTable();
</script>
<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Warehouses List <small>Users</small></h2>
                    <a href="warehouses-form.php" class="btn btn-success pull-right">Add Warehouse</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="warehouse_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Warehouse Head</th>
                          <th>Warehouse Name</th>
                          <th>Short Code</th>
                          <th>Full Address</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Tiger Nixon</td>
                          <td>Warehouse Name</td>
                          <td>EDEFG</td>
                          <td>Address, Address, Address, Address, Address</td>
                          <td>Active</td>
                          <td>
                            <a href="warehouses-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Garrett Winters</td>
                          <td>Warehouse Name</td>
                          <td>EDEFG</td>
                          <td>Address, Address, Address, Address, Address</td>
                          <td>Active</td>
                          <td>
                            <a href="warehouses-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Ashton Cox</td>
                          <td>Warehouse Name</td>
                          <td>EDEFG</td>
                          <td>Address, Address, Address, Address, Address</td>
                          <td>Active</td>
                          <td>
                            <a href="warehouses-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Cedric Kelly</td>
                          <td>Warehouse Name</td>
                          <td>EDEFG</td>
                          <td>Address, Address, Address, Address, Address</td>
                          <td>Active</td>
                          <td>
                            <a href="warehouses-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Airi Satou</td>
                          <td>Warehouse Name</td>
                          <td>EDEFG</td>
                          <td>Address, Address, Address, Address, Address</td>
                          <td>Active</td>
                          <td>
                            <a href="warehouses-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Brielle Williamson</td>
                          <td>Warehouse Name</td>
                          <td>EDEFG</td>
                          <td>Address, Address, Address, Address, Address</td>
                          <td>Active</td>
                          <td>
                            <a href="warehouses-form.php"><i class="fa fa-edit"></i></a>
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
	$('#warehouse_table').DataTable();
</script>
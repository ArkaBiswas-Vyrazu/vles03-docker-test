<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menus <small>Users</small></h2>
                    <a href="menus-form.php" class="btn btn-success pull-right">Add New</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="menus-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Menu Name</th>
                          <th>URL</th>
                          <th>Icon</th>
                          <th>Sort Order</th>
                          <th>Parent</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Dashboard</td>
                          <td>Dashboard</td>
                          <td><i class="fa fa-home"></i></td>
                          <td>1</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Organisations</td>
                          <td>Organisations</td>
                          <td><i class="fa fa-building"></i></td>
                          <td>2</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Users</td>
                          <td>Users</td>
                          <td><i class="fa fa-user"></i></td>
                          <td>3</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Sales Inventory</td>
                          <td>Sales Inventory</td>
                          <td><i class="fa fa-ship"></i></td>
                          <td>4</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Production Inventory</td>
                          <td>Production Inventory</td>
                          <td><i class="fa fa-truck"></i></td>
                          <td>5</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Sales Orders</td>
                          <td>Sales Orders</td>
                          <td><i class="fa fa-shopping-cart"></i></td>
                          <td>6</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Purchase Orders</td>
                          <td>Purchase Orders</td>
                          <td><i class="fa fa-credit-card"></i></td>
                          <td>7</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>Predictive Inventory</td>
                          <td>Predictive Inventory</td>
                          <td><i class="fa fa-bullhorn"></i></td>
                          <td>8</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>Tax</td>
                          <td>Tax</td>
                          <td><i class="fa fa-calculator"></i></td>
                          <td>9</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Settings</td>
                          <td>Settings</td>
                          <td><i class="fa fa-cog"></i></td>
                          <td>10</td>
                          <td>Root</td>
                          <td>
                            <a href="menus-form.php"><i class="fa fa-edit"></i></a>
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
	$('#menus-table').DataTable();
</script>
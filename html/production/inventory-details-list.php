<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inventory Details List <small>Users</small></h2>
                    <!-- <a href="inventory-details-form.php" class="btn btn-success pull-right">Add Inventory</a> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="inventory_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>SKU</th>
                          <th>Product</th>
                          <th>Qty in Stock</th>
                          <th>Days Lead Time</th>
                          <th>Total Sold</th>
                          <th>Daily Sales</th>
                          <th>Stock Days</th>
                          <th>Inventory Alerts</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>ADEU124345</td>
                          <td>Product Name</td>
                          <td>46</td>
                          <td>6</td>
                          <td>1000</td>
                          <td>50</td>
                          <td>8</td>
                          <td>Active</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>ADEU124345</td>
                          <td>Product Name</td>
                          <td>46</td>
                          <td>6</td>
                          <td>1000</td>
                          <td>50</td>
                          <td>8</td>
                          <td>Active</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>ADEU124345</td>
                          <td>Product Name</td>
                          <td>46</td>
                          <td>6</td>
                          <td>1000</td>
                          <td>50</td>
                          <td>8</td>
                          <td>Active</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>ADEU124345</td>
                          <td>Product Name</td>
                          <td>46</td>
                          <td>2</td>
                          <td>1000</td>
                          <td>50</td>
                          <td>8</td>
                          <td>Active</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>ADEU124345</td>
                          <td>Product Name</td>
                          <td>46</td>
                          <td>3</td>
                          <td>1000</td>
                          <td>50</td>
                          <td>8</td>
                          <td>Active</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>ADEU124345</td>
                          <td>Product Name</td>
                          <td>46</td>
                          <td>6</td>
                          <td>1000</td>
                          <td>50</td>
                          <td>8</td>
                          <td>Active</td>
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
	$('#inventory_table').DataTable();
</script>
<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master Products List <small>Users</small></h2>
                    <a href="master-products-form.php" class="btn btn-success pull-right">Add Master Product</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="master_product_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>SKU</th>
                          <th>Product</th>
                          <th>Stock Qty</th>
                          <th>Days Lead Time</th>
                          <th>Related Products</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>2324g324GD</td>
                          <td>Product Name</td>
                          <td>1000</td>
                          <td>61</td>
                          <td>Related Product Name</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>2324g324GD</td>
                          <td>Product Name</td>
                          <td>1000</td>
                          <td>63</td>
                          <td>Related Product Name</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>2324g324GD</td>
                          <td>Product Name</td>
                          <td>1000</td>
                          <td>66</td>
                          <td>Related Product Name</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>2324g324GD</td>
                          <td>Product Name</td>
                          <td>1000</td>
                          <td>22</td>
                          <td>Related Product Name</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>2324g324GD</td>
                          <td>Product Name</td>
                          <td>1000</td>
                          <td>33</td>
                          <td>Related Product Name</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>2324g324GD</td>
                          <td>Product Name</td>
                          <td>1000</td>
                          <td>61</td>
                          <td>Related Product Name</td>
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
	$('#master_product_table').DataTable();
</script>
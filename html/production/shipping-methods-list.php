<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Shipping Methods List <small>Users</small></h2>
                    <a href="shipping-methods-form.php" class="btn btn-success pull-right">Add Shipping Methods</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="shipping_methods_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>
                            <a><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
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
	$('#shipping_methods_table').DataTable();
</script>
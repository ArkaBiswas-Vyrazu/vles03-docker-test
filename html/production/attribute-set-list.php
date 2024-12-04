<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Attribute Sets</h2>
                    <a href="add-attribute-set.php" class="btn btn-success pull-right">Add Attribute Sets</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="production-items-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Name</th>
                          <th>Action(s)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Edinburgh Saxton</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Tiger Nixon</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Edinburgh Saxto</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Tiger Nixon</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Edinburgh Saxto</td>
                          <td>
                            <a href="purchase-order-details.php"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Tiger Nixon</td>
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
	$('#production-items-table').DataTable();
</script>
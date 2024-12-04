<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Invoices List <small>Users</small></h2>
                    <!-- <a href="invoices-form.php" class="btn btn-success pull-right">Add Invoice</a> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="inovice_table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl</th>
                          <th>Invoice No.</th>
                          <th>Invoice Date</th>
                          <th>Order</th>
                          <th>Order Date</th>
                          <th>Bill to Name</th>
                          <th>Status</th>
                          <th>Amount</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>345324798</td>
                          <td>2011/04/25</td>
                          <td>ADRT234234</td>
                          <td>20/01/2017</td>
                          <td>Cust Name</td>
                          <th>Active</th>
                          <td>$320,800</td>
                          <td>
                            <a href="invoice.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>345324798</td>
                          <td>2011/07/25</td>
                          <td>ADRT234234</td>
                          <td>20/01/2017</td>
                          <td>Cust Name</td>
                          <th>Active</th>
                          <td>$170,750</td>
                          <td>
                            <a href="invoice.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>345324798</td>
                          <td>2009/01/12</td>
                          <td>ADRT234234</td>
                          <td>20/01/2017</td>
                          <td>Cust Name</td>
                          <th>Active</th>
                          <td>$86,000</td>
                          <td>
                            <a href="invoice.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>345324798</td>
                          <td>2012/03/29</td>
                          <td>ADRT234234</td>
                          <td>20/01/2017</td>
                          <td>Cust Name</td>
                          <th>Active</th>
                          <td>$433,060</td>
                          <td>
                            <a href="invoice.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>345324798</td>
                          <td>2008/11/28</td>
                          <td>ADRT234234</td>
                          <td>20/01/2017</td>
                          <td>Cust Name</td>
                          <th>Active</th>
                          <td>$162,700</td>
                          <td>
                            <a href="invoice.php"><i class="fa fa-edit"></i></a>
                            <a><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>345324798</td>
                          <td>2012/12/02</td>
                          <td>ADRT234234</td>
                          <td>20/01/2017</td>
                          <td>Cust Name</td>
                          <th>Active</th>
                          <td>$372,000</td>
                          <td>
                            <a href="invoice.php"><i class="fa fa-edit"></i></a>
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
	$('#inovice_table').DataTable();
</script>
<?php include('header.php'); ?>
<style type="text/css">
  @media print{
    .logo-class{
      max-width: 5%;
    }
  }
</style>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_content">

            <section class="content invoice">
              <!-- title row -->
              <div class="row add-margin-padding">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 invoice-header">
                      <h1>
                          <i class="fa fa-globe"></i> Packing Slip
                          <!-- <small class="pull-right">Date: 16/08/2016</small> -->
                      </h1>
                      <a href="javascript:void(0);"><img src="images/logo.png" class="img-responsive logo-class" /></a>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 invoice-col invoice-col-margin">
                  <b>Invoice #007612</b>
                  <br>
                  <b>Order Date:</b> 16/01/2017
                  <br>
                  <b>Order ID:</b> 4F3S8J
                  <br>
                  <b>Payment Due:</b> 2/22/2014
                  <br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 invoice-col">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <b>Shipping From</b>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                      <address>
                        <strong>Iron Admin, Inc.</strong>
                        <br>795 Freedom Ave, Suite 600
                        <br>New York, CA 94107
                        <br>Phone: 1 (804) 123-9876
                        <br>Email: ironadmin.com
                      </address>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 invoice-col">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <b>Shipping To</b>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                      <address>
                        <strong>John Doe</strong>
                        <br>795 Freedom Ave, Suite 600
                        <br>New York, CA 94107
                        <br>Phone: 1 (804) 123-9876
                        <br>Email: jon@ironadmin.com
                      </address>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-xs-12 table-responsive">
                  <table class="table table-striped total-price">
                    <thead>
                      <tr>
                        <th>Sl</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Qty</th>
                        <th style="width: 40%">Description</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>455-981-221</td>
                        <td>1</td>
                        <td>El snort testosterone trophy driving gloves handsome gerry Richardson helvetica tousled
                        </td>
                        <td>$64.50</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Need for Speed IV</td>
                        <td>247-925-726</td>
                        <td>1</td>
                        <td>Wes Anderson umami biodiesel</td>
                        <td>$50.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                  <p class="lead payment-method">Payment Methods:</p>
                  <img src="images/visa.png" alt="Visa">
                  <img src="images/mastercard.png" alt="Mastercard">
                  <img src="images/american-express.png" alt="American Express">
                  <img src="images/paypal.png" alt="Paypal">
                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pull-right">
                  <!-- <p class="lead">Amount Due 2/22/2014</p> -->
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th style="width:50%">Subtotal:</th>
                          <td>$250.30</td>
                        </tr>
                        <tr>
                          <th>Tax (9.3%)</th>
                          <td>$10.34</td>
                        </tr>
                        <tr>
                          <th>Shipping:</th>
                          <td>$5.80</td>
                        </tr>
                        <tr>
                          <th>Total:</th>
                          <td>$265.24</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <p><b> Thanks For Business </b></p>
                  <p><h4><b> Inventory Management </b></h4></p>
                  <p> Address Address/ AddressAddress/ Address/ Address. </p>
                  <p> email@email.com/ +343452213/ @account </p>
                  <p><a href="javascript:void(0);"> www.website.com </a></p>
                </div>
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print hidden-print">
                <div class="col-xs-12">
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                  <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                  <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php include('footer.php'); ?>

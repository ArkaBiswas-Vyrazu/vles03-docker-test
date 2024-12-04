<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Add Warehouse Item<small>Production items in your warehouse</small></h2>
	            <button type="submit" class="btn btn-primary pull-right">Save</button>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content padding-less">
          		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 padding-less">
                  <!-- required for floating -->
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs tabs-left">
                    <li class="active" role="presentation"><a href="#product_info" data-toggle="tab">Information</a></li>
                    <li role="presentation"><a href="#product_img" data-toggle="tab">Images</a></li>
                    <li role="presentation"><a href="#barcode" data-toggle="tab">Barcode</a></li>
                    <li role="presentation"><a href="#procuct_custom" data-toggle="tab">Custom</a></li>
                  </ul>
                </div>

                <form id="general-form">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                  <!-- Tab panes -->
                 <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="product_info">

		                  <div class="x_title" style="border-bottom: 1px solid #E6E9ED;">
			                <h2>Product Information</h2>
			                <div class="clearfix"></div>
			              </div>
			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="name">Name <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  <input type="text" id="name" required="required" placeholder="Name" class="form-control col-md-7 col-xs-12">
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Select Category<span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  	<select class="form-control">
			                      <option>Choose Category</option>
			                      <option>Category 1</option>
			                      <option>Category 2</option>
			                      <option>Category 3</option>
			                    </select>
			                </div>
			              </div> 

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinesecond">Select Warehouse <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  	<select class="form-control">
			                      <option>Choose Warehouse</option>
			                      <option>All</option>
			                      <option>Warehouse 1</option>
			                      <option>Warehouse 2</option>
			                    </select>
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="email">Description <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  <textarea type="text" id="email" required="required" placeholder="Description" class="form-control col-md-7 col-xs-12"></textarea>
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="website">Sku <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  <input type="text" id="website" required="required" placeholder="Sku" class="form-control col-md-7 col-xs-12">
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="phonenumber">Qty <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  <input type="text" id="phonenumber" required="required" placeholder="Qty" class="form-control col-md-7 col-xs-12">
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Select Qty Unit<span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  	<select class="form-control">
			                      <option>Choose a unit</option>
			                      <option>ml</option>
			                      <option>Kg</option>
			                      <option>liter</option>
			                      <option>meter</option>
			                      <option>units</option>
			                    </select>
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinefirst">Price<span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  <input type="text" id="addresslinefirst" required="required" placeholder="Price" class="form-control col-md-7 col-xs-12">
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinesecond">Status <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  	<select class="form-control">
			                      <option>Choose Status</option>
			                      <option>Active</option>
			                      <option>Disabled</option>
			                    </select>
			                </div>
			              </div>

			              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinesecond">Out of Stock <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  	<select class="form-control">
			                      <option>Choose Status</option>
			                      <option>Yes</option>
			                      <option>No</option>
			                    </select>
			                </div>
			              </div>

			              <div class="clearfix"></div>
                 </div>
                 <div role="tabpanel" class="tab-pane fade " id="product_img">
                      <div class="x_title">
	                    <h2>Images List</h2>
	                    <a href="javascript:void(0);" class="btn btn-success pull-right img-browse-btn">Add Images<input type="file" name="add_images"></a>
	                    <div class="clearfix"></div>
	                  </div>
	                  <div class="x_content table-responsive">
	                    <table id="production-images-table" class="table table-striped">
	                      <thead>
	                        <tr>
	                          <th>Image</th>
	                          <th>Image Label</th>
	                          <th>Sort</th>
	                          <th>Visible</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td><div class="img-div"><img src="images/iPhone7.jpg" alt="Product Images"></div></td>
	                          <td><input type="text" name="label_checkbox" class="form-control"></td>
	                          <td><input type="text" name="sort_checkbox" class="form-control"></td>
	                          <td><input type="checkbox" name="status_checkbox"></td>
	                        </tr>
	                        <tr>
	                          <td><div class="img-div"><img src="images/MBP13_PFOP.jpg" alt="Product Images"></div></td>
	                          <td><input type="text" name="label_checkbox" class="form-control"></td>
	                          <td><input type="text" name="sort_checkbox" class="form-control"></td>
	                          <td><input type="checkbox" name="status_checkbox"></td>
	                        </tr>
	                        <tr>
	                          <td><div class="img-div"><img src="images/Awards_p.jpg" alt="Product Images"></div></td>
	                          <td><input type="text" name="label_checkbox" class="form-control"></td>
	                          <td><input type="text" name="sort_checkbox" class="form-control"></td>
	                          <td><input type="checkbox" name="status_checkbox"></td>
	                        </tr>
	                        <tr>
	                          <td><div class="img-div"><img src="images/ipods.jpg" alt="Product Images"></div></td>
	                          <td><input type="text" name="label_checkbox" class="form-control"></td>
	                          <td><input type="text" name="sort_checkbox" class="form-control"></td>
	                          <td><input type="checkbox" name="status_checkbox"></td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  	</div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="barcode">
                      <div class="x_title">
	                    <h2>Barcodes</h2>
	                    <!-- <a href="javascript:void(0);" class="btn btn-success pull-right img-browse-btn">Add Barcode<input type="file" name="add_images"></a> -->
	                    <div class="clearfix"></div>
	                  </div>
	                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                  	<img src="images/barcode1.png" class="img-responsive barcode-img" alt="Barcode">
	                  </div>
	                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                  	<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="name">Barcode No. <span class="required">*</span>
			                </label>
			                <div class="col-md-8 col-sm-8 col-xs-12">
			                  <input type="text" id="name" required="required" placeholder="Name" class="form-control col-md-7 col-xs-12">
			                </div>
			              </div>
	                  </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="procuct_custom">Custom Tab.</div>
                  </div>
                </div>

                <div class="clearfix"></div>
            </form>
	            
	          </div>
	        </div>
	      </div>
	</div>
<?php include('footer.php') ?>
<script type="text/javascript">
	// $('#production-images-table').DataTable();
	// $(".select-category").select2({
 //      maximumSelectionLength: 4,
 //      placeholder: "With Max Selection limit 4",
 //      allowClear: true
 //    });
</script>
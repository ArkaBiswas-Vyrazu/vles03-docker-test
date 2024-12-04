<?php include('header.php') ?>
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>General Form <small>Users</small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	            <form id="general-form">

	              <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="name">Name <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="name" required="required" placeholder="Name" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div> -->

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	              	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		              	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prof-img-div">
		                	<img src="images/upload_photo.png" class="img-thumbnail" id="prof_img" alt="Profile Image">
		                	<input type="file" id="upload" title="Click Here To Upload Your Image" required="required" class="upload-prof-img">
		                </div>
	                </div>
	              </div>

	              <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="upload">Upload Photo <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="file" id="upload" required="required" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div> -->

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="email">Email <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="email" required="required" placeholder="Email" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="website">Website <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="website" required="required" placeholder="Website" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="phonenumber">Phone Number <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="phonenumber" required="required" placeholder="Phone Number" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinefirst">Address Line 1 <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="addresslinefirst" required="required" placeholder="Address Line 1" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="addresslinesecond">Address Line 2 <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="addresslinesecond" required="required" placeholder="Address Line 2" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="city">City <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="city" required="required" placeholder="City" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="state">State <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="state" required="required" placeholder="State" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="country">Country <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="country" required="required" placeholder="Country" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="pincode">Pin code <span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="pincode" required="required" placeholder="Pin code" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>

	              <div class="clearfix"></div>
	              <div class="ln_solid"></div>
	              <div class="form-group">
	                <div class="col-md-6 col-md-offset-3">
	                  <button type="submit" class="btn btn-success">Save</button>
	                </div>
	              </div>

	            </form>
	          </div>
	        </div>
	      </div>
	</div>
<?php include('footer.php') ?>
<script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
              $("#prof_img").attr("src", e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
        // setTimeout(function(){ imagecrop(); }, 500);
        
        
    }
    
    $("#upload").change(function(){
        readURL(this);
    });
</script>
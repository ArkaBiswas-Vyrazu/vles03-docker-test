<?php include('header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
          <div class="title_left">
            <h3>Add Menus</h3>
          </div>
        </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Menus for your organization. <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="attr-form">

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="menuname">Menu Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="menuname" required="required" placeholder="Menu Name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="url">Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="url" required="required" placeholder="Choose Url" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="icon">Icon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="icon" required="required" placeholder="Icon" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="sortorder">Sort Order <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="sortorder" required="required" placeholder="Sort Order" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Parent<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Options</option>
                            <option>Options</option>
                            <option>Options</option>
                          </select>
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
<?php include('footer.php'); ?>
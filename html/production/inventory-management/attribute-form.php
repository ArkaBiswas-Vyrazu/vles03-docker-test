<?php include('Inventory-header.php'); ?>
    <div class="right_col" role="main">
    	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Attributes Form <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="attr-form">

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right" for="attrcode">Atttribute Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="attrcode" required="required" placeholder="Atttribute Code" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Input Type<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Text</option>
                            <option>Email</option>
                            <option>Text Area</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Unique  Value<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Values Requested<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Input Validation<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>None</option>
                            <option>Number</option>
                            <option>Email</option>
                          </select>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
    </div>
<?php include('Inventory-footer.php'); ?>
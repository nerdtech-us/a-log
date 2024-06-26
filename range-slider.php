<?php include('partial/header.php');?>         
<link rel="stylesheet" type="text/css" href="assets/css/vendors/range-slider.css">    
<?php include('partial/loader.php');?>
    
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- Page Header Start-->
  <?php include('partial/topbar.php');?>
  <!-- Page Header Ends -->
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <?php include('partial/sidebar.php');?>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
        <?php include('partial/breadcrumb.php'); ?>
      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Ion Range Slider</h5>
              </div>
              <div class="card-body">
                <form class="theme-form form-label-align-right range-slider">
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label sm-left-text" for="u-range-01">Default</label>
                    <div class="col-md-10">
                      <input id="u-range-01" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-02">Min-Max Value</label>
                    <div class="col-md-10">
                      <input id="u-range-02" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-03">Prefix</label>
                    <div class="col-md-10">
                      <input id="u-range-03" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-04">Nagative value</label>
                    <div class="col-md-10">
                      <input id="u-range-04" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-05">Steps</label>
                    <div class="col-md-10">
                      <input id="u-range-05" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-06">Custom Values</label>
                    <div class="col-md-10">
                      <input id="u-range-06" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-07">Prettify Numbers</label>
                    <div class="col-md-10">
                      <input id="u-range-07" type="text">
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <label class="col-md-2 control-label sm-left-text" for="u-range-08">Disabled</label>
                    <div class="col-md-10">
                      <input id="u-range-08" type="text">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>
    
    <?php include('partial/footer.php');?>
  </div>
</div>
<?php include('partial/scripts.php'); ?>
<script src="assets/js/range-slider/ion.rangeSlider.min.js"></script>
<script src="assets/js/range-slider/rangeslider-script.js"></script>
<script src="assets/js/tooltip-init.js"></script>
<?php include('partial/footer-end.php'); ?>
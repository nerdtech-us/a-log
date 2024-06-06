<?php include('partial/header.php');?>

<?php include('partial/loader.php');?>

<!-- page-wrapper Start-->
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
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Horizontal Style</h5><span>For Create inline megaoption add <code>.mega-horizontal</code> class in form tag</span>
                            </div>
                            <div class="card-body">
                                <form class="mega-horizontal">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mega-title">Delivery Option</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="form-check radio radio-primary me-3">
                                                        <input class="form-check-input" id="radio30" type="radio" name="radio1" value="option1">
                                                        <label class="form-check-label" for="radio30"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
                                                        <p>Estimated 5 Day Shipping ( Duties end tax may be due delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <div class="card">
                                                <div class="media p-20">
                                                    <div class="form-check radio radio-secondary me-3">
                                                        <input class="form-check-input" id="radio31" type="radio" name="radio1" value="option1">
                                                        <label class="form-check-label" for="radio31"></label>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 mega-title-badge">Fast <span class="badge badge-secondary pull-right digits">100 INR</span></h6>
                                                        <p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            <div class="card-footer text-end">
                                <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                                <button class="btn btn-light" type="submit">Cancel</button>
                            </div>
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

<script src="assets/js/form-wizard/form-wizard-three.js"></script>
<script src="assets/js/form-wizard/jquery.backstretch.min.js"></script>
<script src="assets/js/scrollbar/custom.js"></script>

<?php include('partial/footer-end.php'); ?>
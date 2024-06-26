<?php include('partial/header.php');?>

<link rel="stylesheet" type="text/css" href="assets/css/vendors/date-time-picker.css">

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
                <div class="card">
                    <div class="card-header">
                        <h5>Date Time Picker</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="datetime-picker">
                                    <form class="theme-form">
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">Minimum Setup</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-minimum"
                                                    data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-minimum">
                                                    <div class="input-group-text" data-target="#dt-minimum"
                                                        data-toggle="datetimepicker"><i class="fa fa-calendar"> </i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">Using Locales</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-local" data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-local">
                                                    <div class="input-group-text" data-target="#dt-local"
                                                        data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">Time Only</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-time" data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-time">
                                                    <div class="input-group-text" data-target="#dt-time"
                                                        data-toggle="datetimepicker"><i class="fa fa-clock-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">Date Only</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-date" data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-date">
                                                    <div class="input-group-text" data-target="#dt-date"
                                                        data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">No Icon (input field
                                                only)</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <input class="form-control datetimepicker-input digits" id="dt-noicon"
                                                    type="text" data-toggle="datetimepicker" data-target="#dt-noicon">
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">Enabled/Disabled
                                                Dates</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-enab-disab-date"
                                                    data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-enab-disab-date">
                                                    <div class="input-group-text" data-target="#dt-enab-disab-date"
                                                        data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-end">View Mode</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-view" data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-view">
                                                    <div class="input-group-text" data-target="#dt-view"
                                                        data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3 mb-0">
                                            <label class="col-sm-3 col-form-label text-end">Disabled Days of the
                                                Week</label>
                                            <div class="col-xl-5 col-sm-7 col-lg-8">
                                                <div class="input-group date" id="dt-disab-days"
                                                    data-target-input="nearest">
                                                    <input class="form-control datetimepicker-input digits" type="text"
                                                        data-target="#dt-disab-days">
                                                    <div class="input-group-text" data-target="#dt-disab-days"
                                                        data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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

<script src="assets/js/datepicker/date-time-picker/moment.min.js"></script>
<script src="assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
<script src="assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>
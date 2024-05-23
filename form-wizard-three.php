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
                        <div class="card">
                            <div class="card-header">
                                <h5>Pronto para enviar online? Não é necessário conta - pague com cartão de crédito.</h5>
                            </div>
                            <div class="card-body">
                                <form class="f1" method="post">
                                    <div class="f1-steps">
                                        <div class="f1-progress">
                                            <div class="f1-progress-line" data-now-value="25"
                                                data-number-of-steps="4"></div>
                                        </div>
                                        <div class="f1-step active">
                                            <div class="f1-step-icon"><i class="fa fa-location-arrow"></i></div>
                                            <p>Origem e Destino</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i class="fa fa-archive"></i></div>
                                            <p>Detalhe do Envio</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i class="fa fa-calculator"></i></div>
                                            <p>Orçamento</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon"><i class="fa fa-truck"></i></div> 
                                            <p>Coleta</p>
                                        </div>                                        
                                    </div>
                                    <fieldset>
                                        <div class="mb-2">
                                            <label for="f1-first-name">Endereço Origem</label>
                                            <input class="form-control" id="f1-first-name" type="text"
                                                name="f1-first-name" placeholder="Av. Paulista, 1800" required="">
                                        </div>
                                        <div class="mb-2">
                                            <label for="f1-last-name">Endereço Destino</label>
                                            <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                                name="f1-last-name" placeholder="Rua dos Pinheiros, 30" required="">
                                        </div>
                                        <div class="f1-buttons">
                                            <button class="btn btn-primary btn-next" type="button">Próximo</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="mb-2">
                                            <label class="sr-only" for="f1-email">Embalagem</label>
                                            <input class="f1-email form-control" id="f1-email" type="text"
                                                name="f1-email" placeholder="" required="">
                                                <select class="form-select form-control-inverse" name="select">
                                            <option value="none">Selecione uma embalagem:</option>
                                            <option value="opt2">Type 2</option>
                                            <option value="opt3">Type 3</option>
                                            <option value="opt4">Type 4</option>
                                            <option value="opt5">Type 5</option>
                                            <option value="opt6">Type 6</option>
                                            <option value="opt7">Type 7</option>
                                            <option value="opt8">Type 8</option>
                                        </select>
                                        </div>
                                        
                                        <form class="needs-validation" novalidate="">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="form-label" for="validationCustom01">First name</label>
                                            <input class="form-control" id="validationCustom01" type="text" value="Mark"
                                                required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="validationCustom02">Last name</label>
                                            <input class="form-control" id="validationCustom02" type="text" value="Otto"
                                                required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationCustomUsername">Username</label>
                                            <div class="input-group"><span class="input-group-text"
                                                    id="inputGroupPrepend">@</span>
                                                <input class="form-control" id="validationCustomUsername" type="text"
                                                    placeholder="Username" aria-describedby="inputGroupPrepend"
                                                    required="">
                                                <div class="invalid-feedback">Please choose a username.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="validationCustom03">City</label>
                                            <input class="form-control" id="validationCustom03" type="text"
                                                placeholder="City" required="">
                                            <div class="invalid-feedback">Please provide a valid city.</div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="validationCustom04">State</label>
                                            <select class="form-select" id="validationCustom04" required="">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a valid state.</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label" for="validationCustom05">Zip</label>
                                            <input class="form-control" id="validationCustom05" type="text"
                                                placeholder="Zip" required="">
                                            <div class="invalid-feedback">Please provide a valid zip.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <div class="checkbox p-0">
                                                <input class="form-check-input" id="invalidCheck" type="checkbox"
                                                    required="">
                                                <label class="form-check-label" for="invalidCheck">Agree to terms and
                                                    conditions</label>
                                            </div>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Browser defaults</h5><span>Not interested in custom validation feedback messages or
                                    writing JavaScript to change form behaviors? All good, you can use the browser
                                    defaults. Try submitting the form below. Depending on your browser and OS, you’ll
                                    see a slightly different style of feedback.</span><span>While these feedback styles
                                    cannot be styled with CSS, you can still customize the feedback text through
                                    JavaScript.</span>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label class="form-label" for="validationDefault01">First name</label>
                                            <input class="form-control" id="validationDefault01" type="text"
                                                placeholder="First name" required="">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="validationDefault02">Last name</label>
                                            <input class="form-control" id="validationDefault02" type="text"
                                                placeholder="Last name" required="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationDefaultUsername">Username</label>
                                            <div class="input-group"><span class="input-group-text"
                                                    id="inputGroupPrepend2">@</span>
                                                <input class="form-control" id="validationDefaultUsername" type="text"
                                                    placeholder="Username" aria-describedby="inputGroupPrepend2"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="validationDefault03">City</label>
                                            <input class="form-control" id="validationDefault03" type="text"
                                                placeholder="City" required="">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="validationDefault04">State</label>
                                            <select class="form-select" id="validationDefault04" required="">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label class="form-label" for="validationDefault05">Zip</label>
                                            <input class="form-control" id="validationDefault05" type="text"
                                                placeholder="Zip" required="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <div class="checkbox p-0">
                                                <input class="form-check-input" id="invalidCheck2" type="checkbox"
                                                    required="">
                                                <label class="form-check-label" for="invalidCheck2">Agree to terms and
                                                    conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
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

<script src="assets/js/form-wizard/form-wizard-three.js"></script>
<script src="assets/js/form-wizard/jquery.backstretch.min.js"></script>
<script src="assets/js/scrollbar/custom.js"></script>

<?php include('partial/footer-end.php'); ?>
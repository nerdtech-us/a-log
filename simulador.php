<?php include ('partial/header.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/css/vendors/prism.css">
<?php include ('partial/loader.php'); ?>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include ('partial/topbar.php'); ?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include ('partial/sidebar.php'); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php include ('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Begin Form -->
                    <form class="mega-vertical">
                        <div class="col-sm-12 col-xl-12 box-col-12">
                            <div class="card height-equal shadow-none border">
                                <div class="card-header">
                                    <h5>Visualizar as nossas opções de entrega e tarifas!</h5><span>Preencha os campos
                                        abaixo de receba em segundos o valor estimado para envio de seu pacote</span>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>Endereço Origem</h6>
                                                </div>
                                                <div class="media p-20">

                                                    <div class="media-body">
                                                        <!-- <h6 class="mt-0 mega-title-badge mb-3">ENDEREÇO ORIGEM</h6> -->
                                                        <div class="row g-3">
                                                            <div class="col-md-2 mb-3">
                                                                <label class="form-label" for="txtCEPOrigem">CEP</label>
                                                                <input class="form-control" id="txtCEPOrigem"
                                                                    type="text" placeholder="CEP" required=""
                                                                    onblur="getOrigemAddress(this)">
                                                                <div class="invalid-feedback">Informe o
                                                                    CEP.</div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="txtLogradouroOrigem">Logradouro</label>
                                                                <input class="form-control" id="txtLogradouroOrigem"
                                                                    type="text" placeholder="Cidade" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    Logradouro.</div>
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <label class="form-label"
                                                                    for="txtLogradouroOrigemNumero">Número</label>
                                                                <input class="form-control"
                                                                    id="txtLogradouroOrigemNumero" type="text"
                                                                    placeholder="Número" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    Número.</div>
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <label class="form-label"
                                                                    for="txtLogradouroOrigemComplemento">Complemento</label>
                                                                <input class="form-control"
                                                                    id="txtLogradouroOrigemComplemento" type="text"
                                                                    placeholder="Complemento" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    complemento.</div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3">

                                                            <div class="col-md-8">
                                                                <label class="form-label"
                                                                    for="txtCidadeOrigem">Cidade</label>
                                                                <input class="form-control" id="txtCidadeOrigem"
                                                                    type="text" placeholder="Cidade" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    Cidade.</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label"
                                                                    for="ddlSiglaEstadoOrigem">Estado</label>
                                                                <select class="form-select" id="ddlSiglaEstadoOrigem"
                                                                    required="">
                                                                    <option selected="" disabled="" value="">
                                                                        Selecione...
                                                                    </option>
                                                                    <option value='AC'>Acre</option>
                                                                    <option value='AL'>Alagoas</option>
                                                                    <option value='AP'>Amapá</option>
                                                                    <option value='AM'>Amazonas</option>
                                                                    <option value='BA'>Bahia</option>
                                                                    <option value='CE'>Ceará</option>
                                                                    <option value='DF'>Distrito Federal</option>
                                                                    <option value='ES'>Espírito Santo</option>
                                                                    <option value='GO'>Goiás</option>
                                                                    <option value='MA'>Maranhão</option>
                                                                    <option value='MT'>Mato Grosso</option>
                                                                    <option value='MS'>Mato Grosso do Sul</option>
                                                                    <option value='MG'>Minas Gerais</option>
                                                                    <option value='PA'>Pará</option>
                                                                    <option value='PB'>Paraíba</option>
                                                                    <option value='PR'>Paraná</option>
                                                                    <option value='PE'>Pernambuco</option>
                                                                    <option value='PI'>Piauí</option>
                                                                    <option value='RJ'>Rio de Janeiro</option>
                                                                    <option value='RN'>Rio Grande do Norte</option>
                                                                    <option value='RS'>Rio Grande do Sul</option>
                                                                    <option value='RO'>Rondônia</option>
                                                                    <option value='RR'>Roraima</option>
                                                                    <option value='SC'>Santa Catarina</option>
                                                                    <option value='SP'>São Paulo</option>
                                                                    <option value='SE'>Sergipe</option>
                                                                    <option value='TO'>Tocantins</option>

                                                                </select>
                                                                <div class="invalid-feedback">Informe o
                                                                    Estado.</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6>Endereço Destino</h6>
                                                </div>
                                                <div class="media p-20">

                                                    <div class="media-body">
                                                        <!-- <h6 class="mt-0 mega-title-badge mb-3">ENDEREÇO DESTINO </h6> -->
                                                        <div class="row g-3">
                                                            <div class="col-md-2 mb-3">
                                                                <label class="form-label"
                                                                    for="txtCEPDestino">CEP</label>
                                                                <input class="form-control" id="txtCEPDestino"
                                                                    type="text" placeholder="CEP" required=""
                                                                    onblur="getDestinoAddress(this)">
                                                                <div class="invalid-feedback">Informe o
                                                                    CEP.</div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label"
                                                                    for="txtLogradouroDestino">Logradouro</label>
                                                                <input class="form-control" id="txtLogradouroDestino"
                                                                    type="text" placeholder="Cidade" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    Logradouro.</div>
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <label class="form-label"
                                                                    for="txtLogradouroDestinoNumero">Número</label>
                                                                <input class="form-control"
                                                                    id="txtLogradouroDestinoNumero" type="text"
                                                                    placeholder="Número" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    Número.</div>
                                                            </div>
                                                            <div class="col-md-2 mb-3">
                                                                <label class="form-label"
                                                                    for="txtLogradouroDestinoComplemento">Complemento</label>
                                                                <input class="form-control"
                                                                    id="txtLogradouroDestinoComplemento" type="text"
                                                                    placeholder="Complemento" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    complemento.</div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3">

                                                            <div class="col-md-8">
                                                                <label class="form-label"
                                                                    for="txtCidadeDestino">Cidade</label>
                                                                <input class="form-control" id="txtCidadeDestino"
                                                                    type="text" placeholder="Cidade" required="">
                                                                <div class="invalid-feedback">Informe o
                                                                    Cidade.</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="form-label"
                                                                    for="ddlSiglaEstadoDestino">Estado</label>
                                                                <select class="form-select" id="ddlSiglaEstadoDestino"
                                                                    required="">
                                                                    <option selected="" disabled="" value="">
                                                                        Selecione...
                                                                    </option>
                                                                    <option value='AC'>Acre</option>
                                                                    <option value='AL'>Alagoas</option>
                                                                    <option value='AP'>Amapá</option>
                                                                    <option value='AM'>Amazonas</option>
                                                                    <option value='BA'>Bahia</option>
                                                                    <option value='CE'>Ceará</option>
                                                                    <option value='DF'>Distrito Federal</option>
                                                                    <option value='ES'>Espírito Santo</option>
                                                                    <option value='GO'>Goiás</option>
                                                                    <option value='MA'>Maranhão</option>
                                                                    <option value='MT'>Mato Grosso</option>
                                                                    <option value='MS'>Mato Grosso do Sul</option>
                                                                    <option value='MG'>Minas Gerais</option>
                                                                    <option value='PA'>Pará</option>
                                                                    <option value='PB'>Paraíba</option>
                                                                    <option value='PR'>Paraná</option>
                                                                    <option value='PE'>Pernambuco</option>
                                                                    <option value='PI'>Piauí</option>
                                                                    <option value='RJ'>Rio de Janeiro</option>
                                                                    <option value='RN'>Rio Grande do Norte</option>
                                                                    <option value='RS'>Rio Grande do Sul</option>
                                                                    <option value='RO'>Rondônia</option>
                                                                    <option value='RR'>Roraima</option>
                                                                    <option value='SC'>Santa Catarina</option>
                                                                    <option value='SP'>São Paulo</option>
                                                                    <option value='SE'>Sergipe</option>
                                                                    <option value='TO'>Tocantins</option>

                                                                </select>
                                                                <div class="invalid-feedback">Informe o
                                                                    Estado.</div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="row g-3">

                                        <div class="col-sm-12 col-xl-12">
                                            <div class="card shadow-none border">
                                                <div class="card-header">
                                                    <h5>Embalagem</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="card shadow-none">
                                                                <div class="media p-20">
                                                                    <div class="form-check radio radio-primary me-3">
                                                                        <input class="form-check-input" id="rdbEmbalagemEN"
                                                                            type="radio" name="rdbEmbalagem" value="EN">
                                                                        <label class="form-check-label"
                                                                            for="rdbEmbalagemEN"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Envelope
                                                                            A4<span
                                                                                class="badge badge-primary pull-right digits">(32
                                                                                x 24 x 1 cm)</span></h6>
                                                                        <p>Ideal para envio de documentos </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="card shadow-none">
                                                                <div class="media p-20">
                                                                    <div class="form-check radio radio-secondary me-3">
                                                                        <input class="form-check-input" id="rdbEmbalagemCP"
                                                                            type="radio" name="rdbEmbalagem" value="CP">
                                                                        <label class="form-check-label"
                                                                            for="rdbEmbalagemCP"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Caixa
                                                                            Pequena<span
                                                                                class="badge badge-secondary pull-right digits">(23
                                                                                x 14 x 4 cm)</span></h6>
                                                                        <p>Ideal para envio de pequenos objetos.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="card shadow-none">
                                                                <div class="media p-20">
                                                                    <div class="form-check radio radio-success me-3">
                                                                        <input class="form-check-input" id="rdbEmbalagemCS"
                                                                            type="radio" name="rdbEmbalagem" value="CS">
                                                                        <label class="form-check-label"
                                                                            for="rdbEmbalagemCS"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Caixa de
                                                                            Sapato<span
                                                                                class="badge badge-success pull-right digits">(35
                                                                                x 20 x 15 cm)</span></h6>
                                                                        <p>Ideal para enviar mais de um objeto.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="card shadow-none">
                                                                <div class="media p-0 justify-content-center">
                                                                <img src="assets/images/EN.png" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="card shadow-none">
                                                                <div class="media p-0 justify-content-center">
                                                                <img src="assets/images/CP.png" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="card shadow-none">
                                                                <div class="media p-0 justify-content-center">
                                                                    <img src="assets/images/CS.png" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>


                                        </div>


                                    </div>

                                </div>



                                <div class="card-footer text-end">
                                    <button class="btn btn-primary m-r-15" type="submit">Calcular</button>
                                    <button class="btn btn-light" type="reset">Limpar</button>
                                </div>
                            </div>
                        </div>


                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <?php include ('partial/footer.php'); ?>
    </div>
</div>

<?php include ('partial/scripts.php'); ?>
<script src="assets/js/form-validation-custom.js"></script>
<script src="assets/js/prism/prism.min.js"></script>
<script src="assets/js/clipboard/clipboard.min.js"></script>
<script src="assets/js/custom-card/custom-card.js"></script>
<script src="assets/js/height-equal.js"></script>
<script src="assets/js/tooltip-init.js"></script>

<script>
    async function getCompleteAddressByCep(s) {

        const cep = s.trim();

        const url = "https://viacep.com.br/ws/" + cep + "/json/";

        try {
            const response = await fetch(url);

            if (!response.ok) {
                throw new Error('Erro ao consultar o CEP');
            }

            const data = await response.json();

            if (data.erro) {
                throw new Error('CEP não encontrado');
            }

            return data;

        } catch (error) {
            alert(error.message);
        }
        return null;
    }

    async function getOrigemAddress(s) {

        const data = await getCompleteAddressByCep(s.value);

        if (data && Object.keys(data).length > 0) {
            document.getElementById('txtLogradouroOrigem').value = data.logradouro;
            document.getElementById('txtCidadeOrigem').value = data.localidade;
            document.getElementById('ddlSiglaEstadoOrigem').value = data.uf;
            document.getElementById('txtLogradouroOrigemNumero').focus();
        }
    }

    async function getDestinoAddress(s) {

        const data = await getCompleteAddressByCep(s.value);

        if (data && Object.keys(data).length > 0) {
            document.getElementById('txtLogradouroDestino').value = data.logradouro;
            document.getElementById('txtCidadeDestino').value = data.localidade;
            document.getElementById('ddlSiglaEstadoDestino').value = data.uf;
            document.getElementById('txtLogradouroDestinoNumero').focus();
        }
    }
</script>


<?php include ('partial/footer-end.php'); ?>
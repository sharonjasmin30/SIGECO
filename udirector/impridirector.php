<?php
  require('../cuerpo/head.php');
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      require('sidebardirector.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
          require('../cuerpo/topbar.php');
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
                <!-- Inicio Begin Page Content -->
                <div class="container-fluid">
                    <!-- Basic Card Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Generar Reportes</h6>
                    </div>
                    <div class="card-body">
                        <form>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label text-left">De Primaria o Secundaria?</label>
                            <div class="col-sm-6">
                                <select id="inputState" class="form-control">
                                  <option selected>Primaria</option>
                                  <option>Secundaria</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Año</label>
                            <div class="col-sm-3">
                                <select id="inputState" class="form-control">
                                  <option selected>Primero de Primaria</option>
                                  <option>Segundo de Primaria</option>
                                  <option>Tercer de Primaria</option>
                                  <option>Cuarto de Primaria</option>
                                  <option>Quinto de Primaria</option>
                                  <option>Sexto de Primaria</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select id="inputState" class="form-control mt-1">
                                  <option selected>Primero de Secundaria</option>
                                  <option>Segundo de Secundaria</option>
                                  <option>Tercer de Secundaria</option>
                                  <option>Cuarto de Secundaria</option>
                                  <option>Quinto de Secundaria</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Sección</label>
                            <div class="col-sm-3">
                                <select id="inputState" class="form-control">
                                  <option selected>Sección A</option>
                                  <option>Sección B</option>
                                  <option>Sección C</option>
                                  <option>Sección D</option>
                                  <option>Sección E</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select id="inputState" class="form-control mt-1">
                                  <option selected>Sección A</option>
                                  <option>Sección B</option>
                                  <option>Sección C</option>
                                  <option>Sección D</option>
                                  <option>Sección E</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Notas de</label>
                            <div class="col-sm-3">
                                <select id="inputState" class="form-control">
                                  <option selected>Primer Bimestre</option>
                                  <option>Segundo Bimestre</option>
                                  <option>Tercer Bimestre</option>
                                  <option>Cuarto Bimestre</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select id="inputState" class="form-control mt-1">
                                  <option selected>Primer Trimestre</option>
                                  <option>Segundo Trimestre</option>
                                  <option>Tercer Trimestre</option>
                                </select>
                            </div>
                          </div>

                          <hr>
                          <div class="container">
                            <div class="row">
                              <div class="col text-center">
                                <button class="btn btn-default btn btn-danger">Consultar</button>
                              </div>
                            </div>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <!-- Fin Begin Page Content -->
            <!-- End DataTales Example -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
            require('../cuerpo/footer.php');
          ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button and Logout Modal-->
      <?php
        require('../udirector/modal.php');
      ?>

  <!--Librerias Bootstrap core JavaScript-->
    <?php
        require('../cuerpo/script.php');
    ?>

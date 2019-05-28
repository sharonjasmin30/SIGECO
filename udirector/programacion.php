<?php
  require("../cuerpo/head.php");
?>
<body id="page-top">

  <!-- Inicio Page Wrapper -->
      <div id="wrapper">

          <!--Inicio Sidebar -->
          <?php require('sidebardirector.php'); ?>
          <!-- Fin Sidebar -->

          <!--Inicio Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!--Inicio Main Content -->
            <div id="content">
              <!--Inicio Topbar -->
              <?php require("../cuerpo/topbar.php"); ?>
              <!-- Fin Topbar -->

              <!-- Inicio Begin Page Content -->
              <div class="container-fluid">
                  <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Periodo de Evaluacion</h6>
                  </div>
                  <div class="card-body">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Periodo de Evaluacion Primaria</h6>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Periodo</th>
                              <th>Fecha Inicio</th>
                              <th>Fecha Fin</th>
                              <th>Estado</th>
                              <th>Habilitar</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Primer Trimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificacion</button></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>Segundo Trimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificacion</button></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>Tercer Trimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificación</button></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>

                  <div class="card-body">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Periodo de Evaluacion Secundaria</h6>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>Periodo</th>
                              <th>Fecha Inicio</th>
                              <th>Fecha Fin</th>
                              <th>Estado</th>
                              <th>Habilitar</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Primer Bimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificacion</button></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>Segundo Bimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificacion</button></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>Tercer Bimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificación</button></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>Cuarto Bimestre</td>
                              <td></td>
                              <td></td>
                              <td>Sin Evaluación</td>
                              <td><button type="button" class="btn btn-primary btn-sm btn-block">Registro de Calificación</button></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              <!-- Fin Begin Page Content -->

            <!-- Fin Main container -->
          </div>
          <!--Inicio Content Wrapper -->

      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require('../cuerpo/footer.php'); ?>
      <!-- End of Footer -->
      </div>
      <!-- Fin Content Wrapper -->
  <!-- End of Page Wrapper -->

<!-- Inicio Css Javascript -->
<?php
  require('../cuerpo/script.php');
?>
<!-- Fin  Css Javascript -->
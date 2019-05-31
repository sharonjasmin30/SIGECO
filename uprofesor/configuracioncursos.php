<?php
  require("../cuerpo/head.php");
?>
<body id="page-top">

  <!-- Inicio Page Wrapper -->
      <div id="wrapper">

          <!--Inicio Sidebar -->
          <?php require('sidebarprofesor.php'); ?>
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
                        <h6 class="m-0 font-weight-bold text-primary">Configuración de Cursos</h6>
                    </div>
                    <!-- Custom fonts for this template-->
                    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                    <!-- Custom styles for this template-->
                    <link href="css/sb-admin-2.min.css" rel="stylesheet">
                    <!--<div class="card-body">
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
                    </div>-->
                    <form>
                        <br>
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Nivel</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="inputState" class="form-control">
                                        <option selected >Seleccione...</option>
                                        <option>Primaria</option>
                                        <option>Secundaria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Periodo</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="inputState" class="form-control">
                                        <option selected >Seleccione...</option>
                                        <option>I Bimestre</option>
                                        <option>II Bimestre</option>
                                        <option>III Bimestre</option>
                                        <option>I Trimestre</option>
                                        <option>II Trimestre</option>
                                        <option>III Trimestre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Grado</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="inputState" class="form-control">
                                        <option selected >Seleccione...</option>
                                        <option>1ro</option>
                                        <option>2do</option>
                                        <option>3ro</option>
                                        <option>4to</option>
                                        <option>5to</option>
                                        <option>6to</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Curso</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <select id="inputState" class="form-control">
                                        <option selected >Seleccione...</option>
                                        <option>Lógico Matemático</option>
                                        <option>Comunicación Integral</option>
                                        <option>Ciencia y Tecnologia</option>
                                        <option>Personal Social</option>
                                        <option>Arte</option>
                                        <option>Religión</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Competencias</label>
                                </div>
                                <div class="form-group col-md-1">
                                    <input type="text" class="form-control" id="inputDesempeños">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Capacidades</label>
                                </div>
                                <div class="form-group col-md-1">
                                    <input type="text" class="form-control" id="inputDesempeños">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputCity">Desempeños</label>
                                </div>
                                <div class="form-group col-md-1">
                                    <input type="text" class="form-control" id="inputDesempeños">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <br>
                            <br>
                        </div>
                    </form>

                  
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
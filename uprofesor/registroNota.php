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
                        <h6 class="m-0 font-weight-bold text-primary">Registro de Notas</h6>
                    </div>
                    <!-- Custom fonts for this template-->
                    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                    <!-- Custom styles for this template-->
                    <link href="css/sb-admin-2.min.css" rel="stylesheet">
                    <form>
                      <div class="col-md-12">
                        <!--TODO:se ha creado el formulario
                        FIXME:DFF-->
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Curso:</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Matematica" readonly>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputEmail4">Grado:</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="4to" readonly>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputPassword4">Sección:</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="B" readonly>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Periodo:</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="I Trimestre" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Profesor a cargo:</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Pedro Garcia Cardenas" readonly>
                            </div>
                        </div>
                        <hr class="style1">
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
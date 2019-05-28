<?php
  require('../cuerpo/head.php');
?>
<body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

          <!--Inicio Sidebar -->
          <?php require('sidebarprofesor.php'); ?>
          <!-- Fin Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
              <!--Inicio Topbar -->
              <?php require('../cuerpo/topbar.php'); ?>
              <!-- Fin Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid col-11">                 
                    <!-- Jumbotron -->
                    <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
                      <div class="text-white text-center py-5 px-4">
                        <div>
                          <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Bienvenido Usuario Profesor</strong></h2>
                          <p class="mx-5 mb-5">Esta es la interface de inicio del profesor.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Jumbotron -->
                <!--Fin Contenido Pagina -->
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
<!-- Inicio Css Javascript -->
<?php
  require('../cuerpo/script.php');
?>
<!-- Fin  Css Javascript -->
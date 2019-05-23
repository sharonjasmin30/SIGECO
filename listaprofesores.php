<?php
  require('head.php');
?>
<body id="page-top">

  <!-- Inicio Page Wrapper -->
      <div id="wrapper">

          <!-- Inicio Sidebar -->
            <?php
              require('sidebar.php');
            ?>
          <!-- Fin de Sidebar -->

          <!--Inicio Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
              <!--Inicio Main Content -->
                <?php
                  require('topbar.php');
                ?>
              <!-- Fin Main Content -->



            <!-- Inicio Contenido de body -->
              <div class="col-12 mb-4">
                <div class="card border-left-primary shadow h-100 ">
                  <!-- Titulo -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Lista de Profesores</h6>
                    </div>
                    <!-- Cuerpo -->
                    <div class="card-body">
                        <div class="chart-area">
                          
                        </div>
                      </div>
                </div>
              </div>
            <!-- Inicio Contenido de body -->

              <!-- Inicio Footer -->
                <?php
                  require('footer.php');
                ?>
              <!-- Fin Footer -->
            </div>
          <!-- Fin Content Wrapper -->
          
      </div>
  <!-- End of Page Wrapper -->

<!-- Inicio Css Javascript -->
<?php
  require('librerias.php');
?>
<!-- Fin  Css Javascript -->
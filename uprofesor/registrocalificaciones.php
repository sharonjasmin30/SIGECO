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
                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                  </div>
                  <div class="card-body">
                    The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
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
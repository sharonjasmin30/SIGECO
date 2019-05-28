<?php
  require('head.php');
?>
<body id="page-top">

  <!-- Inicio Page Wrapper -->
      <div id="wrapper">

          <!-- Inicio Sidebar -->
            <?php
              require('sidebardirector.php');
            ?>
          <!-- Fin de Sidebar -->

          <!--Inicio Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
              <!--Inicio Main Content -->
                <?php
                  require('topbar.php');
                ?>
              <!-- Fin Main Content -->

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
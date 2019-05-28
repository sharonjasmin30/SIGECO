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
            <?php
              require('estadisticareportes.php');
            ?>
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

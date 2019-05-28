<?php
  require_once("../cuerpo/conexion.php");
  $objeto = new conectar();
  $conexion = $objeto->conexion();

  $sql = "SELECT id_juego, nombre, anio, empresa FROM t_juegos";
  $result = mysqli_query($conexion, $sql);
  
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
                    <h6 class="m-0 font-weight-bold text-primary">Listado de profesores</h6>
                  </div>
                  <div class="card-body">
                      <div class="text-right p-1 col-12">
                          <button type="button" class="btn btn-primary btn btn-sm" data-toggle="modal" data-target="#nuevousuario">Agregar Nuevo Profesor
                            <span class="fa fa-plus-circle"></span>
                          </button>
                      </div>

                      <!-- Creacion de nuevo Usuario Profesor -->
                      <div class="modal fade" id="nuevousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Crear Usuaruo Profesor</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form class="user">
                                <div class="form-group">
                                      <input type="text" class="form-control form-control-user" id="" placeholder="DNI del profesor">
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="" placeholder="Contraseña">
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="" placeholder="Repita la Contraseña">
                                  </div>                    
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="" placeholder="Nombres del profesor">
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="" placeholder="Apellido Paterno">
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="" placeholder="Apellido Materno">
                                  </div>                    
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control form-control-user " id="" placeholder="Codigo de profesor">
                                  </div>                    
                                </div>

                                <!-- 
                                <div class="form-group row">
                                  <div class="col-sm-12">
                                    <label for="inputState">Profesor de Primaria o Secundaria</label>
                                      <select id="" class="form-control form-control-user">
                                          <option>Profesor de Primaria</option>
                                          <option>Profesor de Secundaria</option>
                                        </select>
                                  </div>                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user " id="" placeholder="Grado">
                                    </div> 
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user " id="" placeholder="Seccion">
                                    </div>                     
                                </div>

                                <div class="form-group row">
                                      <div class="col-sm-12">
                                          <input type="text" class="form-control form-control-user " id="" placeholder="Curso">
                                      </div>                    
                                </div>
                              -->                            
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">Registrar Profesor</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fin de la cracion -->

                      <div>
                          <table class="table table-hover table-condensed" id="iddatatable">
                            <thead class="bg-primary text-white">
                              <tr>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Año</th>
                                  <th scope="col">Empresa</th>
                                  <th scope="col">Editar</th>
                                  <th scope="col">Eliminar</th>
                              </tr>
                            </thead>
                            <tfoot class="bg-secondary text-white">
                              <tr>
                                  <td>Nombre</td>
                                  <td>Año</td>
                                  <td>Empresa</td>
                                  <td>Editar</td>
                                  <td>Eliminar</td>
                              </tr>
                            </tfoot>
                            <tbody>
                              <?php
                                  while($mostrar = mysqli_fetch_row($result)){
                              ?>
                              <tr>
                                  <td><?php echo $mostrar[1] ?></td>
                                  <td><?php echo $mostrar[2] ?></td>
                                  <td><?php echo $mostrar[3] ?></td>
                                  <td class="text-center">
                                    <span class="btn btn-warning">
                                      <span class="fa fa-pencil-square">
                                        </span>
                                    </span>
                                  </td>
                                  <td class="text-center">
                                    <span class="btn btn-danger">
                                      <span class="fa fa-trash">                                        
                                      </span>
                                    </span>
                                  </td>
                              </tr>
                              <?php
                               }
                              ?>
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

<script type="text/javascript">
  $(document).ready(function(){
    $('#iddatatable').DataTable();
  });
</script>
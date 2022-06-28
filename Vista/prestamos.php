<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prestamos</title>

    <!-- Custom fonts for this template -->
    <link href="http://localhost/PrinsParcial03/Vista/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/PrinsParcial03/Vista/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="http://localhost/PrinsParcial03/Vista/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- barra lateral -->
        <?php include("nav-ul.php"); ?>

        <!-- Fin de la barra lateral-->

        <!-- Envoltorio de contenido -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

               <!-- Barra superior -->
               <?php include("nav-button.php"); ?>
                <!-- FIN Barra superior -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">

                                <div class="col">
                                    <h6 class="m-0 font-weight-bold text-primary">PRESTAMOS</h6>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Titulo</th>
                                            <th scope="col" class="text-center">Codigo ISBN</th>
                                            <th scope="col" class="text-center">Codigo Ejemplar</th>
                                            <th scope="col" class="text-center">Nombre de Usuario</th>
                                            <th scope="col" class="text-center">Id. Usuario</th>
                                            <th scope="col" class="text-center">Devolver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data["prestamo"] as $data) { ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $data['nombre_libro']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['libro_ISBN']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['libro_ejemplar'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['nombre'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['usuario_cedula'] ?>
                                                </td>
                                                <td class="text-center"><a href="index.php?c=prestamo&a=devolver&id=<?php echo $data['libro_ISBN']; ?>&id2=<?php echo $data['libro_ejemplar']; ?>" class='btn btn-primary'>Devolver</a></td>
                                            </tr>
                                        <?php }  ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

<!-- Page level plugins -->
<script src="http://localhost/PrinsParcial03/Vista/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/PrinsParcial03/Vista/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/PrinsParcial03/Vista/js/demo/datatables-demo.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/PrinsParcial03/Vista/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/PrinsParcial03/Vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/PrinsParcial03/Vista/js/sb-admin-2.min.js"></script>

    

</body>

</html>
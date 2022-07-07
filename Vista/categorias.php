<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categorias</title>

    <!-- Custom fonts for this template -->
    <link href="Vista/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Vista/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="Vista/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">

                                <div class="col">
                                    <h6 class="m-0 font-weight-bold text-primary">CATEGORIAS</h6>
                                </div>
                                <div class="col ml-auto"><a href="index.php?c=categoria&a=nuevo" class="btn btn-primary btn-icon-split  float-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-book"></i>
                                        </span>
                                        <span class="text">Nueva Categoria</span>
                                    </a></div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Codigo</th>
                                            <th scope="col" class="text-center">Categoria</th>
                                            <th scope="col" class="text-center">Modificar</th>
                                            <!--th scope="col" class="text-center">Eliminar</th-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <?php foreach ($data["categoria"] as $data) { ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $data["id"]; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['nombre']; ?>
                                                </td>
                                                </td>
                                                <td class="text-center"><a href="index.php?c=categoria&a=modificarCategoria&id=<?php echo $data["id"];?>" class='btn btn-primary'>Modificar</a></td>
                                                <!--td class="text-center"><a href="index.php?c=categoria&a=prestar&id=<?php echo $data["id"];?>" class='btn btn-danger'>Eliminar</a></td-->
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
    <!-- Bootstrap core JavaScript-->
    <script src="Vista/vendor/jquery/jquery.min.js"></script>
    <script src="Vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  

    <!-- Custom scripts for all pages-->
    <script src="Vista/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="Vista/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="Vista/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="Vista/js/demo/datatables-demo.js"></script>

</body>

</html>
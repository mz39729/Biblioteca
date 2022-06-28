
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Libros</title>

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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">

                                <div class="col">
                                    <h6 class="m-0 font-weight-bold text-primary">LIBROS</h6>
                                </div>
                                <?php if (isset($_SESSION['username'])) { ?>
                                <div class="col ml-auto">
                                    <a href="index.php?c=libro&a=nuevo" class="btn btn-primary btn-icon-split  float-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-book"></i>
                                        </span>
                                        <span class="text">Registrar Libros</span>
                                    </a>
                                </div>
                                <?php  } ?>

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
                                            <th scope="col" class="text-center">Categoria</th>
                                            <th scope="col" class="text-center">Numero de paginas</th>
                                            <?php if (isset($_SESSION['username'])) { ?>
                                            <th scope="col" class="text-center">Modificar</th>
                                            <th scope="col" class="text-center">Prestar</th>
                                            <?php  } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data["libro"] as $data) { ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $data['nombre_libro']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['ISBN']; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['ejemplar'] ?>
                                                </td>
                                                <td class="text-center">
                                                <?php echo $data['nombre'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['n_paginas'] ?>
                                                </td>
                                                <?php if (isset($_SESSION['username'])) { ?>
                                                <td class="text-center"><a href="index.php?c=libro&a=modificarLibro&id=<?php echo $data['ISBN'];?>&id2=<?php echo $data['ejemplar'];?>" class='btn btn-primary'>Modificar</a></td>
                                                <td class="text-center"><a href="index.php?c=prestamo&a=prestar&id=<?php echo $data['ISBN'];?>&id2=<?php echo $data['ejemplar'];?>" class='btn btn-success '>Prestar</a></td>
                                                <?php }  ?>
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
    <script src="http://localhost/PrinsParcial03/Vista/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/PrinsParcial03/Vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="http://localhost/PrinsParcial03/Vista/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/PrinsParcial03/Vista/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/PrinsParcial03/Vista/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/PrinsParcial03/Vista/js/demo/datatables-demo.js"></script>

</body>

</html>
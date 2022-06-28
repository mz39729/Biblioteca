<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Libros</title>

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

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrar Libro</h1>
                                    </div>
                                    <form class="user" method="POST" action="index.php?c=libro&a=guardarLibro" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nombre" placeholder="Titulo del libro" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="isbn" placeholder="Codigo ISBN" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="ejemplar" placeholder="Codigo Ejemplar" required>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-select form-control form-control-user" name="categoria" placeholder="Categoria">
                                                <?php foreach ($data["categoria"] as $data) { ?>

                                                    <option value="<?php echo $data['id'];?>"><?php echo $data['nombre'];?></option>

                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="n_paginas" placeholder="Numero de Paginas" required>
                                        </div>
                                        <button name="guardar" type="submit" class="btn btn-primary btn-user btn-block">
                                            Registrar Libro
                                        </button>
                                    </form>
                                    <hr>
                                </div>
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

</body>

</html>
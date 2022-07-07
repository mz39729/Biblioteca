<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prestar Libro</title>

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

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Prestar Libro</h1>
                                    </div>
                                    <form class="user" method="POST" action="index.php?c=prestamo&a=prestamo">
                                        <input type="hidden" name="isbn" value="<?php echo $dataLibro["libro"]['ISBN']; ?>" />
                                        <input type="hidden" name="ejemplar" value="<?php echo $dataLibro["libro"]['ejemplar']; ?>" />

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label placeholder="Titulo del libro" class="m-0 font-weight-bold text-primary">Titulo del libro</label>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label placeholder="Titulo del libro"><?php echo $dataLibro["libro"]['nombre_libro']; ?></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label placeholder="Codigo ISBN" class="m-0 font-weight-bold text-primary">Codigo ISBN</label>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label placeholder="Codigo ISBN"><?php echo $dataLibro["libro"]['ISBN']; ?></label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label placeholder="Codigo Ejemplar" class="m-0 font-weight-bold text-primary">Codigo Ejemplar</label>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label placeholder="Codigo Ejemplar"><?php echo $dataLibro["libro"]['ejemplar']; ?></label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label placeholder="Usuario" class="m-0 font-weight-bold text-primary">Usuario</label>
                                            </div>
                                            <div class="col-sm-5 mb-3 mb-sm-0">
                                                <select class="form-select form-control form-control-user" name="cedula" placeholder="Usuario">
                                                    <?php
                                                    foreach ($dataUsuario['usuario'] as $dataU) { ?>
                                                            <option value="<?php echo $dataU['cedula'];?>"> <?php echo $dataU['nombre'];?></option>
                                                    <?php
                                                     }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <button name="guardar" type="submit" class="btn btn-primary btn-user btn-block">
                                            Prestar Libro
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
    <script src="Vista/vendor/jquery/jquery.min.js"></script>
    <script src="Vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="Vista/js/sb-admin-2.min.js"></script>

  
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Usuarios</title>

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
        <?php include("nav-ul.php");?>
        <!-- Fin de la barra lateral-->

        <!-- Envoltorio de contenido -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

                <!-- Barra superior -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Crear Cuenta</h1>
                                    </div>
                                    <form class="user" method="POST" action="index.php?c=usuario&a=guardarUsuario">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nombre" id="exampleLastName" placeholder="Nombre"required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" name="cedula" id="exampleInputEmail" placeholder="Numero de Identificación" required>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                <label placeholder="Fecha de Nacimiento">Fecha de Nacimiento</label>
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <input type="date" class="form-control form-control-user" name="fecha" id="fecha" placeholder="Fecha" required>
                                            </div>
                                            <div class="col-sm-1 mb-3 mb-sm-0">
                                                <label placeholder="Sexo">Sexo</label>
                                            </div>
                                            <div class="col-sm-5 mb-3 mb-sm-0">
                                                <select class="form-select form-control form-control-user" name="sexo" placeholder="Sexo">
                                                    <option value="F">Femenino</option>
                                                    <option value="M">Masculino</option>
                                                    <option value="O">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label placeholder="Tipo de usuario">Tipo de usuario</label>
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <select class=" form-control form-control-user" name="tipo" placeholder="tipo">
                                                    <option value="P">Profesor</option>
                                                    <option value="E">Estudiante</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button name="guardar" type="submit" class="btn btn-primary btn-user btn-block">
                                            Registrar Cuenta
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
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modificar Usuarios</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">Modificar Usuario</h1>
                                    </div>
                                    <form class="user" method="POST" action="index.php?c=usuario&a=modificar" autocomplete="off">

                                    <input type="hidden" id="cedula" name="cedula" value="<?php echo $data['usuario']['cedula']; ?>" />
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nombre" value="<?php echo $data['usuario']['nombre']; ?>" id="exampleLastName" placeholder="Nombre">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                <label placeholder="Fecha de Nacimiento">Fecha de Nacimiento</label>
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <input type="date" class="form-control form-control-user" name="fecha" value="<?php echo $data['usuario']['fecha_nacimiento']; ?>" id="fecha" placeholder="Fecha">
                                            </div>
                                            <div class="col-sm-1 mb-3 mb-sm-0">
                                                <label placeholder="Sexo">Sexo</label>
                                            </div>
                                            <div class="col-sm-5 mb-3 mb-sm-0">
                                                <select class="form-select form-control form-control-user" name="sexo" placeholder="Sexo"> sexo
                                                    <?php if ($data['usuario']['sexo'] == "F") { ?>
                                                        <option value="F" selected>Femenino</option>
                                                        <option value="M">Masculino</option>
                                                        <option value="O">Otro</option>

                                                    <?php }; ?>
                                                    <?php if ($data['usuario']['sexo'] == "M") { ?>
                                                        <option value="F">Femenino</option>
                                                        <option value="M" selected>Masculino</option>
                                                        <option value="O">Otro</option>
                                                    <?php }; ?>
                                                    <?php if ($data['usuario']['sexo'] == "O") { ?>
                                                        <option value="F">Femenino</option>
                                                        <option value="M">Masculino</option>
                                                        <option value="O" selected>Otro</option>
                                                    <?php }; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                <label placeholder="Tipo de usuario">Tipo de usuario</label>
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <select class=" form-control form-control-user" name="tipo" placeholder="tipo">
                                                    <?php if ($data['usuario']['tipo'] == "P") { ?>
                                                        <option value="P" selected>Profesor</option>
                                                        <option value="E">Estudiante</option>
                                                    <?php }; ?>
                                                    <?php if ($data['usuario']['tipo'] == "E") { ?>
                                                        <option value="P">Profesor</option>
                                                        <option value="E" selected>Estudiante</option>
                                                    <?php }; ?>
                                                </select>
                                            </div>

                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                <label placeholder="Tipo de usuario">Estado</label>
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <select class=" form-control form-control-user" name="estado" placeholder="tipo">
                                                    <?php if ($data['usuario']['estado'] == "0") { ?>
                                                        <option value="0" selected>Inactivo</option>
                                                        <option value="1">Activo</option>
                                                    <?php }; ?>
                                                    <?php if ($data['usuario']['estado'] == "1") { ?>
                                                        <option value="0" >Inactivo</option>
                                                        <option value="1" selected>Activo</option>
                                                    <?php }; ?>
                                                </select>
                                            </div>


                                        </div>
                                        <button name="guardar" type="submit" class="btn btn-primary btn-user btn-block">
                                            Modificar Usuario
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
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo1.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="register" >




                                <div class="form-group">
                                    <label>Nombre Completo</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Nombre Completo" required>
                                </div>

                                <div class="form-group">
                                    <label>Direccion de correo electronico</label>
                                    <input class="au-input au-input--full " type="email"  name="email" placeholder="correo electronico debe ser unico" required >
                                </div>



                                <div class="form-group">
                                    <label>Tipo de Usuario</label>

                                    <div class="form-group">
                                        <select id="TipoUsuario" class="custom-select" name="TipoUsuario" required>
                                            <option value="">Escoja una opcion</option>

                                            <option value="1">Administrador</option>
                                            <option value="2">Estandar</option>

                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label>Programa/Escuela</label>

                                    <div class="form-group">
                                        <select id="Programa" class="custom-select" name="Programa" required>
                                            <option value="">Escoja una opcion</option>
                                            <option value="Ninguno">Ninguno</option>
                                            <option value="Gestion y Liderazgo">Gestion y Liderazgo</option>
                                            <option value="Medicina">Medicina</option>
                                            <option value="Nutricion y dietetica">Nutricion y dietetica</option>
                                            <option value="Preventiva y Comunitaria">Preventiva y Comunitaria</option>
                                            <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
                                            <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                                            <option value="Odontologia">Odontologia</option>
                                            <option value="Biologia Marina">Biologia Marina</option>
                                            <option value="Psicologia">Psicologia</option>
                                            <option value="EANI">EANI</option>
                                            <option value="Basicas Exactas">Basicas Exactas</option>
                                            <option value="Medicina(Rotacion Clinica)">Medicina(Rotacion Clinica)</option>
                                            <option value="Derecho">Derecho</option>


                                        </select>
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Contraseña" minlength="8" required>
                                </div>

                                <div class="form-group">
                                    <label> Repetir Contraseña </label>
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Contraseña" minlength="8" required>
                                </div>

                                <button class="btn btn-danger btn-lg btn-block" type="submit">Registrarse</button>
                                <a href="<?php echo e(url('/')); ?>" class="btn btn-danger btn-lg btn-block">Volver</a>


                                <?php echo csrf_field(); ?>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/auth/register.blade.php ENDPATH**/ ?>
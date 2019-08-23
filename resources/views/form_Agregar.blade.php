<!DOCTYPE php>
<php lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Forms</title>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
            <!-- HEADER MOBILE-->

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo1.png" alt="Universidad Del Sinu" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Inicio</a>

                            </li>

                            <li class="active">
                                <a href="{{ url('form') }}">
                                    <i class="far fa-check-square"></i>Agregar Usuario</a>
                            </li>

                            <li>
                                <a href="chart.php">
                                    <i class="fas fa-chart-bar"></i>Graficas</a>
                            </li>
                            <li>
                                <a href="table.php">
                                    <i class="fas fa-table"></i>Tabla</a>
                            </li>




                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>





                                <div class="header-button">

                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">




                                            <div class="content">
                                                <a class="js-acc-btn" href="#">Andres Rueda</a>
                                            </div>


                                            <div class="account-dropdown js-dropdown">


                                                <div class="info clearfix">




                                                    <h5 class="name">
                                                        <a href="#">Andres Rueda</a>
                                                    </h5>
                                                    <span class="email">AndresRueda@example.com</span>

                                                </div>



                                                <div class="account-dropdown__footer">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">

                                </div>

                                <div class="col-lg-10">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="">Agregar </strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="{{url('/Personas')}}" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                {{ csrf_field() }}

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="Nombre" class=" form-control-label">Nombre:</label>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <input type="text" id="Nombre" name="Nombre" placeholder="" class="form-control">
                                                        <small class="form-text text-muted">Escriba el nombre Completo</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="Identificacion" class=" form-control-label">Identificacion</label>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <input type="Identificacion" id="Identificacion" name="Identificacion" placeholder="" class="form-control">

                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="Programa" class=" form-control-label">Programa/Escuela</label>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <select name="Programa" id="Programa" class="form-control">
                                                            <option value="">Escoja una opcion</option>
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


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="Vinculacion" class=" form-control-label">Vinculacion</label>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <select name="Vinculacion" id="Vinculacion" class="form-control">
                                                            <option value="">Escoja una opcion</option>
                                                            <option value="Docente">Docente</option>
                                                            <option value="Estudiante">Estudiante</option>
                                                            <option value="Investigador">Investigador</option>


                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="TMovilidad" class=" form-control-label">Tipo de Movilidad</label>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <select name="TMovilidad" id="TMovilidad" class="form-control">
                                                            <option value="">Escoja una opcion</option>
                                                            <option value="Entrante">Entrante</option>
                                                            <option value="Saliente">Saliente</option>



                                                        </select>
                                                    </div>

                                                        <input type="submit" value="Agregar">












                                                </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="copyright">
                                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                                </div>
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

</php>
<!-- end document-->
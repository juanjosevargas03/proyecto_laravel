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
        <title></title>

        <!-- Fontfaces CSS-->
        <link href="/css/font-face.css" rel="stylesheet" media="all">
        <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        

        <!-- Vendor CSS-->
        <link href="/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="/css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block" >
                <div class="logo" >
                    <a href="#">
                        <img src="/images/icon/logo1.png" alt="Universidad Del Sinu" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1" style="background-color:#302C2C">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="js-arrow" href="<?php echo e(url('/')); ?>" style="color:white">
                                    <i class="fas fa-tachometer-alt"></i>Inicio</a>

                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#" style="color:white">
                                    <i class="fas fa-copy"  ></i>Formularios</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo e(url('form')); ?>" style="color:white">Agregar Aspirante</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('register')); ?>" style="color:white">Agregar Usuario</a>
                                    </li>


                                </ul>
                            </li>


                            <li>
                                <a href="<?php echo e(url('chart')); ?>" style="color:white">
                                    <i class="fas fa-chart-bar"></i>Graficas</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('reporte')); ?>" style="color:white">
                                    <i class="fas fa-copy" ></i>Reporte</a>
                            </li>
                            <li hidden>
                                <a href="<?php echo e(url('cargar')); ?>">
                                    <i class="fas fa-chart-bar"></i>Cargar Archivo</a>
                            </li>

                            <li class="has-sub" hidden>
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Convenios</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo e(url('convenios')); ?>">Listado de convenios</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('create_convenios')); ?>">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('chart_conv')); ?>">Graficas</a>
                                    </li>
                                    <li>
                                <a href="<?php echo e(url('cargar_convenios')); ?>">
                                Cargar Archivo de Convenios</a>
                            </li>



                                </ul>
                            </li>
                            <li class="has-sub" hidden>
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Redes Nacionales/Internacionales</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo e(url('redes')); ?>">Listado de redes</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('create_redes')); ?>">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('chart_redes')); ?>">Graficas</a>
                                    </li>
                                    <li>
                                         <a href="<?php echo e(url('cargar_redes')); ?>">Cargar Archivo de Redes</a>
                                     </li>



                                </ul>
                            </li>
                            <li class="has-sub" hidden >
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Internacionalizacion del curriculo</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?php echo e(url('curriculos')); ?>">Indice</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('create_curriculos')); ?>">Agregar</a>
                                    </li>
                                    <li>
                                         <a href="<?php echo e(url('cargar_curr')); ?>">Cargar Archivo</a>
                                     </li>


                                </ul>
                            </li>
                            


                        </ul>


                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->


                <!-- HEADER DESKTOP-->

                <header class="header-desktop" >
                    <div class="section__content section__content--p30">


                        <div class="container-fluid">
                            <div class="header-wrap">



                                    <div class="col-lg-10">
                                            <div class="page-header" >
                                                
                                                    
                                                    <?php echo e(Form::open(['route' => 'home', 'method' => 'GET', 'class' => 'form-inline'])); ?>

                                                        <div class="form-group">
                                                            <?php echo e(Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])); ?>

                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <?php echo e(Form::text('Programa', null, ['class' => 'form-control', 'placeholder' => 'Programa'])); ?>

                                                        </div>
                                                        <div class="form-group">
                                                                <button type="submit" class="btn btn-danger btn-sm">Buscar</button>
                                                            
                                                            
                                                            
                                                        </div>
                                                    <?php echo e(Form::close()); ?>

                                                
                                            </div>
                                        </div>









                                




















                                <div class="header-button">

                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">

                                            <div class="content">
                                                <a class="js-acc-btn" href="#"><?php echo e(Auth::user()->name); ?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">

                                                        <h5 class="name">
                                                            <a href="#"><?php echo e(Auth::user()->name); ?></a>
                                                        </h5>
                                                        <span class="email"><?php echo e(Auth::user()->email); ?></span>
                                                        
                                                       
                                                        
                                                    
                                                </div>

                                                <div class="account-dropdown__footer">
                                                    <a href="logout">
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






                <!-- Jquery JS-->
                <script src="/vendor/jquery-3.2.1.min.js"></script>
                <!-- Bootstrap JS-->
                <script src="/vendor/bootstrap-4.1/popper.min.js"></script>
                <script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
                <!-- Vendor JS       -->
                <script src="/vendor/slick/slick.min.js">
                </script>
                <script src="/vendor/wow/wow.min.js"></script>
                <script src="/vendor/animsition/animsition.min.js"></script>
                <script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                </script>
                <script src="/vendor/counter-up/jquery.waypoints.min.js"></script>
                <script src="/vendor/counter-up/jquery.counterup.min.js">
                </script>
                <script src="/vendor/circle-progress/circle-progress.min.js"></script>
                <script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                <script src="/vendor/chartjs/Chart.bundle.min.js"></script>
                <script src="/vendor/select2/select2.min.js">
                </script>

                <!-- Main JS-->
                <script src="/js/main.js"></script>


    </body>

</php><?php /**PATH C:\laragon\www\proyecto\resources\views/panel.blade.php ENDPATH**/ ?>

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

                <header class="header-desktop">
                    <div class="section__content section__content--p30">


                        <div class="container-fluid">
                            <div class="header-wrap">



                                    <div class="col-lg-10">
                                            
                                                
                                                    <div class="form-inline" hidden>
                                                    
                                                        <div class="form-group">
                                                            <?php echo e(Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])); ?>

                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <?php echo e(Form::text('Programa', null, ['class' => 'form-control', 'placeholder' => 'Programa'])); ?>

                                                        </div>
                                                        <div class="form-group">
                                                                <button type="submit" class="btn btn-danger btn-sm">Buscar</button>
                                                            
                                                            
                                                            
                                                        </div>
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

</php>









<body class="animsition">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
        <div class="page-container">



            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          

                            <?php if($errors->any()): ?>
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <h4>Por favor corrige los siguientes errores </h4>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                 </div>
                             </div>
                        <?php endif; ?>


                                <form action="<?php echo e(url('/personas')); ?>" method="post" class="form-horizontal">

                                            <?php echo e(csrf_field()); ?>


                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="">Agregar Aspirante</strong>
                                    </div>


                                    

                                    <div class="card-body card-block">
                                        

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Nombre" class=" form-control-label">Nombre:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Nombre" name="Nombre" value="<?php echo e(old('Nombre')); ?>" class="form-control">
                                                    <small class="form-text text-muted">Escriba el nombre Completo</small>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Tipo_id" class=" form-control-label">Tipo de identidad</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Tipo_id" id="Tipo_id" class="form-control" >
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>

                                                    </select>
                                                </div>
                                            </div>
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Identificacion" class=" form-control-label">Identificacion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Identificacion" name="Identificacion" value="<?php echo e(old('Identificacion')); ?>" class="form-control">
                                                    
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
                                                         <option value="Optometria">Optometria</option>
                                                        <option value="Biologia Marina">Biologia Marina</option>
                                                        <option value="Psicologia">Psicologia</option>
                                                        <option value="EANI">EANI</option>
                                                        <option value="Basicas Exactas">Basicas Exactas</option>
                                                        <option value="Derecho">Derecho</option>
                                                        <option value="Contaduria">Contaduria</option>
                                                        <option value="Negocios internacionales">Negocios internacionales</option>

                                                    </select>
                                                </div>
                                            </div>

                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Año" class=" form-control-label">Año actual:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Año" name="Año" value="<?php echo e(old('Año')); ?>" class="form-control">
                                                    
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="F_nacimiento" class=" form-control-label">Fecha de nacimiento</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="date" id="F_nacimiento" name="F_nacimiento" value="<?php echo e(old('F_nacimiento')); ?>" class="form-control">
                                                </div>
                                            </div>

                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Ciudad" class=" form-control-label">Ciudad de nacimiento</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Ciudad" name="Ciudad" value="<?php echo e(old('Ciudad')); ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Direccion" class=" form-control-label">Direccion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Direccion" name="Direccion" value="<?php echo e(old('Direccion')); ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Telefono" class=" form-control-label">Telefono</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Telefono" name="Telefono" value="<?php echo e(old('Telefono')); ?>" class="form-control">
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="F_icfes" class=" form-control-label">Fecha de evaluacion icfes</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="date" id="F_icfes" name="F_icfes" value="<?php echo e(old('F_icfes')); ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Puntaje_icfes" class=" form-control-label">Puntaje icfes</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Puntaje_icfes" name="Puntaje_icfes" value="<?php echo e(old('Puntaje_icfes')); ?>" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="N_madre" class=" form-control-label">Nombre de la madre</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="N_madre" name="N_madre" value="<?php echo e(old('N_madre')); ?>" class="form-control">
                                                     <small class="form-text text-muted">*opcional</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Ocup_madre" class=" form-control-label">Ocupacion de la madre</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Ocup_madre" name="Ocup_madre" value="<?php echo e(old('Ocup_madre')); ?>" class="form-control"> <small class="form-text text-muted">*opcional</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="N_padre" class=" form-control-label">Nombre del padre</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="N_padre" name="N_padre" value="<?php echo e(old('N_padre')); ?>" class="form-control"> <small class="form-text text-muted">*opcional</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Ocup_padre" class=" form-control-label">Ocupacion del padre</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Ocup_padre" name="Ocup_padre" value="<?php echo e(old('Ocup_padre')); ?>" class="form-control"> <small class="form-text text-muted">*opcional</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="N_hermano" class=" form-control-label">Nombre  de hermano/a de referencia</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="N_hermano" name="N_hermano" value="<?php echo e(old('N_hermano')); ?>" class="form-control"> <small class="form-text text-muted">*opcional</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Ocup_hermano" class=" form-control-label">Ocupacion de hermano/a</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Ocup_hermano" name="Ocup_hermano" value="<?php echo e(old('Ocup_hermano')); ?>" class="form-control"> <small class="form-text text-muted">*opcional</small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Bachillerato" class=" form-control-label">Institucion donde curso el bachillerato</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Bachillerato" name="Bachillerato" value="<?php echo e(old('Bachillerato')); ?>" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Año_grado" class=" form-control-label">Año de grado</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Año_grado" name="Año_grado" value="<?php echo e(old('Año_grado')); ?>" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Estudios_adicionales" class=" form-control-label">Estudios adicionales</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Estudios_adicionales" name="Estudios_adicionales" value="<?php echo e(old('Estudios_adicionales')); ?>" class="form-control">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="" class=" form-control-label">Idiomas</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="idiomas[]" id="idiomas" class="form-control" multiple>
                                                        <option value="">Escoja una o mas opciones</option>
                                                        <option value="Ninguno">Ninguno</option>
                                                        <option value="Ingles">Ingles</option>
                                                        <option value="Frances">Frances</option>
                                                         <option value="Aleman">Aleman</option>
                                                        <option value="Italiano">Italiano</option>
                                                         <option value="Portugues">Portugues</option>
                                                        <option value="Japones">Japones</option>
                                                        <option value="Mandarin">Mandarin</option>

                                                    </select>
                                                </div>
                                            </div>
                                           

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Opciones_carrera" class=" form-control-label">Carrera que haya considerado de no ser admitido</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Opciones_carrera" id="Opciones_carrera" class="form-control" >
                                                       
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Gestion y Liderazgo">Gestion y Liderazgo</option>
                                                        <option value="Medicina">Medicina</option>
                                                        <option value="Nutricion y dietetica">Nutricion y dietetica</option>
                                                        <option value="Preventiva y Comunitaria">Preventiva y Comunitaria</option>
                                                        <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
                                                        <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                                                        <option value="Odontologia">Odontologia</option>
                                                         <option value="Optometria">Optometria</option>
                                                        <option value="Biologia Marina">Biologia Marina</option>
                                                        <option value="Psicologia">Psicologia</option>
                                                        <option value="EANI">EANI</option>
                                                        <option value="Basicas Exactas">Basicas Exactas</option>
                                                        <option value="Derecho">Derecho</option>
                                                        <option value="Contaduria">Contaduria</option>
                                                        <option value="Negocios internacionales">Negocios internacionales</option>
                                                    </select>
                                                </div>
                                            </div>

                                         
                                            <br>
                                             <br>

                                    </div>
                                </div>

                                   
                                   <div class="card">
                                    <div class="card-header">
                                        <strong class="">Informacion importante para el evaluador</strong>
                                    </div>
                                             <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="Autoconfianza" class=" form-control-label">Autoconfianza:  ¿se siente capaz de estudiar esta carrera?

                                                 10 = si ,  2 = no</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="Autoconfianza" id="Autoconfianza" class="form-control">
                                                        <option value="">Escoja un valor</option>
                                                        <option value=2>2</option>
                                                        <option value=4>4</option>
                                                        <option value=6>6</option>
                                                        <option value=8>8</option>
                                                        <option value=10>10</option>



                                                    </select>
                                                </div>
                                            </div>


                                             <br>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="Compromiso" class=" form-control-label">Compromiso:  ¿cree que con estos estudios usted contribuye a la sociedad?,  10 = si ,  2 = no</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="Compromiso" id="Compromiso" class="form-control">
                                                        <option value="">Escoja un valor</option>
                                                        <option value=2>2</option>
                                                        <option value=4>4</option>
                                                        <option value=6>6</option>
                                                        <option value=8>8</option>
                                                        <option value=10>10</option>



                                                    </select>
                                                </div>
                                            </div>


                                             <br>


                                                <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="Expectativas" class=" form-control-label">Expectativas:  ¿que tipo de formacion piensa que recibira en la universidad?</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="Expectativas" id="Expectativas" class="form-control">
                                                        <option value="">Escoja una valor</option>
                                                        <option value=2>2</option>
                                                        <option value=4>4</option>
                                                        <option value=6>6</option>
                                                        <option value=8>8</option>
                                                        <option value=10>10</option>



                                                    </select>
                                                </div>
                                            </div>

                                             <br>
                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="Intereses" class=" form-control-label">Intereses:  ¿como ve su futuro en la universidad si es seleccionado/a?</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="Intereses" id="Intereses" class="form-control">
                                                        <option value="">Escoja un valor</option>
                                                        <option value=2>2</option>
                                                        <option value=4>4</option>
                                                        <option value=6>6</option>
                                                        <option value=8>8</option>
                                                        <option value=10>10</option>

                                                    </select>
                                                </div>
                                            </div>
 <br>
  <br>
   <hr>
    <br>
     <br>
                                        <strong class="">Presentacion y comunicacion</strong>
                                         <br>
                                        <br>
                                         <br>
     

                                            <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Impacto general</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i1" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i1" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i1" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i1" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i1" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Cuidado Personal</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i2" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i2" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i2" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i2" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i2" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Forma de Vestir</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i3" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i3" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i3" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i3" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i3" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Forma de entrar y de sentarse</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i4" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i4" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i4" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i4" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i4" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

 <br>
     <br>
                                        <strong class="">Comunicacion no verbal</strong>
                                         <br>
                                        <br>
                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Mirada y contacto visual</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i5" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i5" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i5" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i5" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i5" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Forma de saludar y dar la mano</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i6" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i6" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i6" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i6" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i6" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Gesticulacion Facial</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i7" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i7" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i7" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i7" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i7" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Sonrisa, Tono y Timbre de voz</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i8" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i8" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i8" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i8" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i8" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

 <br>
     <br>
                                        <strong class="">Comunicacion verbal</strong>
                                         <br>
                                        <br>
                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Fluidez Verbal</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i9" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i9" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i9" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i9" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i9" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Riqueza Vocabulario</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i10" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i10" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i10" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i10" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i10" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Precision</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i11" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i11" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i11" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i11" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i11" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-7">
                                                    <label for="" class=" form-control-label">Originalidad</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                   <div>
                                                     <label>1  </label>
                                                        <input type="radio" name="i12" value="1">
                                                          <label>&nbsp 2 </label>    
                                                        <input type="radio" name="i12" value="2">
                                                           <label> &nbsp 3 </label>     
                                                        <input type="radio" name="i12" value="3">
                                                            <label>&nbsp 4 </label>
                                                        <input type="radio" name="i12" value="4">
                                                           <label>&nbsp 5</label>
                                                        <input type="radio" name="i12" value="5">
                                                            
                                                    </div>
                                                </div>
                                            </div>

 <br>
                                            

                                             <br>

                                            <script >
                                                
                                                $('option').mousedown(function(e) {
    e.preventDefault();
    $(this).prop('selected', !$(this).prop('selected'));
    return false;
});
                                            </script>
                                          

                                            <button class="btn btn-danger btn-lg btn-block" type="submit" onclick=".value">Guardar</button>
                                    </div>



                                </div>




                            </div>

                        </div>

























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



</body>
<?php /**PATH C:\laragon\www\proyecto\resources\views/form_Agregar.blade.php ENDPATH**/ ?>
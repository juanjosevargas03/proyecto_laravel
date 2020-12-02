
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
        <title>Movilidad Internacional</title>

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


        <!-- PAGE CONTAINER-->
                <div class="section__content section__content--p30">

                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25"><?php echo e($convenio->institucion); ?></h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table  table-striped table-earning">
                                        
                                            
                                        
                                        <tbody>

                                            <tr>
                                                <th>ID</th>

                                                <td><?php echo e($convenio->id); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Institucion</th>

                                                <td><?php echo e($convenio->institucion); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Pais</th>

                                                <td><?php echo e($convenio->pais); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de inicio</th>

                                                <td><?php echo e($convenio->fecha_inicio); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de finalizacion</th>

                                                <td><?php echo e($convenio->fecha_finalizacion); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Estado</th>

                                                <td><?php echo e($convenio->estado); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Codigo del Convenio</th>

                                                <td><?php echo e($convenio->codigo_convenio); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Id del pais</th>

                                                <td><?php echo e($convenio->id_pais); ?></td>
                                            </tr>
                                            <tr>
                                                <th>vigencia/Años</th>

                                                <td><?php echo e($convenio->vigencia); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Responsable inicial</th>

                                                <td><?php echo e($convenio->responsable_inicial); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Direccion de correspondencia</th>

                                                <td><?php echo e($convenio->direccion_correspondencia); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nombre del rector</th>

                                                <td><?php echo e($convenio->nombre_rector); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Contacto unisinu</th>

                                                <td><?php echo e($convenio->contacto_sinu); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Programa</th>

                                                <td><?php echo e($convenio->programa); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Objeto</th>

                                                <td><?php echo e($convenio->objeto); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Participacion</th>

                                                <td><?php echo e($convenio->participacion); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Telefono</th>

                                                <td><?php echo e($convenio->telefono); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>

                                                <td><?php echo e($convenio->email); ?></td>
                                            </tr>
                                            

											



                                        </tbody>
                                    </table>

                                </div>

                            </div>
</div>            
                                            </div>            
                                            </div>            
                                            </div>            



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

                
               

</body><?php /**PATH C:\laragon\www\proyecto\resources\views/convenios/Pdf.blade.php ENDPATH**/ ?>


<body class="animsition">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
                <div class="section__content section__content--p30">

                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Aspirante  <?php echo e($persona->Nombre); ?></h2>

                                <br>
                                 <br>
                                  <br>
                                   <br>
                                    <br>
                                     <br>
                                     
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table  table-striped table-earning" border="1">
                                        
                                            
                                        
                                        <tbody>

                                            <tr>
                                                <th width="350px">Nombre</th>

                                                <td width="350px"><?php echo e($persona->Nombre); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Identificacion</th>

                                                <td><?php echo e($persona->Identificacion); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de identificacion</th>

                                                <td><?php echo e($persona->Tipo_id); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Programa</th>

                                                <td><?php echo e($persona->Programa); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Inscripcion</th>

                                                <td><?php echo e($persona->Inscripcion); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de nacimiento</th>

                                                <td><?php echo e($persona->F_nacimiento); ?></td>
                                            </tr>
                                             <tr>
                                                <th>Año de ingreso a la universidad</th>

                                                <td><?php echo e($persona->Año); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ciudad</th>

                                                <td><?php echo e($persona->Ciudad); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Direccion</th>

                                                <td><?php echo e($persona->Direccion); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Telefono</th>

                                                <td><?php echo e($persona->Telefono); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de evaluacion icfes</th>

                                                <td><?php echo e($persona->F_icfes); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Puntaje icfes</th>

                                                <td><?php echo e($persona->Puntaje_icfes); ?></td>
                                            </tr>
                                           <tr>
                                                <th>Nombre de la madre</th>

                                                <td><?php echo e($persona->N_madre); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ocupacion de la madre</th>

                                                <td><?php echo e($persona->Ocup_madre); ?></td>
                                            </tr>
                                             <tr>
                                                <th>Nombre del padre</th>

                                                <td><?php echo e($persona->N_padre); ?></td>
                                            </tr>
                                             
                                             <tr>
                                                <th>Ocupacion del padre</th>

                                                <td><?php echo e($persona->Ocup_padre); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nombre de hermano/a</th>

                                                <td><?php echo e($persona->N_hermano); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Ocupacion de hermano/a</th>

                                                <td><?php echo e($persona->Ocup_hermano); ?></td>
                                            </tr>
                                             <tr>
                                                <th>Institucion donde curso el Bachillerato</th>

                                                <td><?php echo e($persona->Bachillerato); ?></td>
                                            </tr>
                                             <tr>
                                                <th>Año de grado</th>

                                                <td><?php echo e($persona->Año_grado); ?></td>
                                            </tr>
                                             <tr>
                                                <th>Estudios adicionales</th>

                                                <td><?php echo e($persona->Estudios_adicionales); ?></td>
                                            </tr>
                                             <tr>
                                                <th>Idiomas</th>
                                                <td>
                                                 <?php $__currentLoopData = $persona->idiomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($i->Nombre); ?>

                                                
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </td>
                                            </tr>
                                            
                                             <tr>
                                                <th>Puntaje</th>

                                                <td><?php echo e($persona->Puntaje); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Admision</th>

                                                <td><?php echo e($persona->Admision); ?></td>
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

                
               

</body><?php /**PATH C:\laragon\www\proyecto\resources\views/personas/Pdf.blade.php ENDPATH**/ ?>
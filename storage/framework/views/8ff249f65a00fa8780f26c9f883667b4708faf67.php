<body class="animsition">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Aspirantes</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Identificacion</th>
                                                 <th>Programa</th>
                                                <th>Inscripcion</th>
                                                <th>Telefono</th>
                                            
                                                <th>Puntaje</th>
                                                <th>Admision</th>
                                                <th>Acciones</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($persona->Nombre); ?></td>
                                                <td><?php echo e($persona->Identificacion); ?></td>
                                                <td><?php echo e($persona->Programa); ?></td>

                                                <td><?php echo e($persona->id); ?></td>
                                                <td><?php echo e($persona->Telefono); ?></td>
                                               
                                                <td><?php echo e($persona->Puntaje); ?></td>
                                                <td><?php echo e($persona->Admision); ?></td>

                                                <td><a href="<?php echo e(url('/personas/'.$persona->id.'/edit')); ?>">
                                                    Ver mas|
                                                </a>                                                    
                                                    
                                                  
                                                    <form method="post" action="<?php echo e(url('/personas/'.$persona->id)); ?>">

                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>    
                                                    

                                                    <button type="submit" onclick="return confirm('¿Estas Seguro?')" class="btn btn-danger btn-sm">Borrar</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>
                                    </table>

                                    <?php echo e($personas->links()); ?>

                                </div>

                            </div>


                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Usuarios </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>

                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Programa/Escuela</th>
                                                <th>Creado</th>
                                                <th>Acciones</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>

                                                <td><?php echo e($usuario->name); ?></td>
                                                <td><?php echo e($usuario->email); ?></td>
                                                <td><?php echo e($usuario->Programa); ?></td>
                                                <td><?php echo e($usuario->created_at); ?></td>

                                                <td>
                                                    <form method="post" action="<?php echo e(url('/personas/'.$usuario->id)); ?>">
                                                

                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>   

                                                    <button type="submit" onclick="return confirm('¿Estas Seguro?')" class="btn btn-danger btn-sm">Borrar</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>


                                    </table>

                                    <?php echo e($usuarios->links()); ?>

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
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

    </div>



</body>
<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/home_admin.blade.php ENDPATH**/ ?>
    <body class="animsition">
        <div class="page-wrapper">


            <!-- PAGE CONTAINER-->
            <div class="page-container">

                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">



                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="title-1 m-b-25">Personas</h2>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Identificacion</th>
                                                    <th>Programa/Escuela</th>
                                                    <th>Vinculacion</th>
                                                    <th>Tipo de Movilidad</th>
                                                    <th>Acciones</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($persona->Nombre); ?></td>
                                                    <td><?php echo e($persona->Numero_ID); ?></td>
                                                    <td><?php echo e($persona->Programa); ?></td>
                                                    <td><?php echo e($persona->Vinculacion); ?></td>
                                                    <td><?php echo e($persona->Tipom); ?></td>
                                                    <td>Ver Mas</td>

                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
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



<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/index.blade.php ENDPATH**/ ?>
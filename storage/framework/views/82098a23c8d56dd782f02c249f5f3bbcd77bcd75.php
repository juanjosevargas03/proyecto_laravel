<body class="animsition">
    <div class="page-wrapper">


    
        <div class="page-container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Redes Nacionales/Internacionales</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>unidad</th>
                                                <th>programa</th>
                                                <th>asociacion</th>

                                                <th>Acciones</th>
                                               


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $redes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $red): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td><?php echo e($red->id); ?></td>

                                                <td><?php echo e($red->unidad); ?></td>
                                                <td><?php echo e($red->programa); ?></td>
                                                <td><?php echo e($red->asociacion); ?></td>

                                                <td >
                                                	<form method="post" action="<?php echo e(route('show_redes')); ?>" >
                                            <?php echo csrf_field(); ?>
                                            <input type="number" hidden value="<?php echo e($red->id); ?>" name="id_red">
                                                        <button class="btn btn-primary btn-sm">Ver mas</button>
                                            
										
                                            
                                        </form>
                                                </td>


                                                
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>
                                    </table>

                                    <?php echo e($redes->links()); ?>

                                </div>

                            </div>


<div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>








<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/redes/index.blade.php ENDPATH**/ ?>
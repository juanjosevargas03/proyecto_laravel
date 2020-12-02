<body class="animsition">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25"><?php echo e($rede->asociacion); ?></h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        
                                            
                                        
                                        <tbody>

                                            <tr>
                                                <th>Id</th>

                                                <td><?php echo e($rede->id); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Unidad</th>

                                                <td><?php echo e($rede->unidad); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Programa</th>

                                                <td><?php echo e($rede->programa); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Asociacion</th>

                                                <td><?php echo e($rede->asociacion); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Ubicacion</th>

                                                <td><?php echo e($rede->ubicacion); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Objeto</th>

                                                <td><?php echo e($rede->objeto); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Costo de membresia</th>

                                                <td><?php echo e($rede->costo_membresia); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Periodicidad de pago</th>

                                                <td><?php echo e($rede->periodicidad_pago); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Fecha de vinculacion</th>

                                                <td><?php echo e($rede->fecha_vinculacion); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Estado de vinculacion</th>

                                                <td><?php echo e($rede->estado_vinculacion); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Actividad realizada</th>

                                                <td><?php echo e($rede->actividad_realizada); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Fecha de actividad</th>

                                                <td><?php echo e($rede->fecha_actividad); ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Numero de participantes</th>
                                                <td><?php echo e($rede->num_participantes); ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Impacto de la actividad</th>
                                                <td><?php echo e($rede->impacto_actividad); ?></td>
                                                

                                            </tr>

                                            <tr>
                                                <th>Responsable en unisinu</th>
                                                <td><?php echo e($rede->responsable_unisinu); ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Pagina web</th>
                                                <td><?php echo e($rede->pagina_web); ?></td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Observaciones</th>
                                                <td><?php echo e($rede->observaciones); ?></td>
                                                

                                            </tr>

											<tr>
                                                <th>Acciones</th>
                                                <td>
                                                    

                                                <form method="post" action="<?php echo e(route('edit_redes')); ?>">
                                                

                                                    <?php echo e(csrf_field()); ?>


                                                    <input type="number" hidden value="<?php echo e($rede->id); ?>" name="id_red">

                                                    <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                                                    </form>
                                                <br>

                                                    <form method="post" action="<?php echo e(route('delete_redes')); ?>">
                                                

                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>   

                                                    <input type="number" hidden value="<?php echo e($rede->id); ?>" name="id_red">

                                                    <button type="submit" onclick="return confirm('¿Estas Seguro?')" class="btn btn-danger btn-sm">Borrar</button>
                                                    </form>
                                                </td>

                                            </tr>



                                        </tbody>
                                    </table>

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

                
               

</body>

<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/redes/show.blade.php ENDPATH**/ ?>
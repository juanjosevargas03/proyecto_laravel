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
<?php /**PATH C:\laragon\www\proyecto\resources\views/Show_usuario.blade.php ENDPATH**/ ?>
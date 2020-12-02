<body class="animsition">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
        <div class="page-container">



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
                                        <strong class="">Actualizar </strong>
                                    </div>
                                    <div class="card-body card-block">




	<form class="form-horizontal" method="POST" action="<?php echo e(route('update_redes')); ?>">
		 <?php echo method_field('PATCH'); ?>
		
<?php echo csrf_field(); ?>
		
                                                    <input type="number" hidden value="<?php echo e($red->id); ?>" name="id_red">
		

		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="unidad" class=" form-control-label">Nombre de la unidad:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="unidad" name="unidad" placeholder="" class="form-control" value="<?php echo e(old('unidad',$red->unidad)); ?>">
                                                    
                                                    <small class="form-text text-muted">Escriba el nombre de la unidad</small>
                                                </div>
                                            </div>
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Programa" class=" form-control-label">Programa/Escuela</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="programa" id="programa" class="form-control">
                                                        <option value="<?php echo e(old('programa',$red->programa)); ?>"><?php echo e(old('programa',$red->programa)); ?></option>
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
                                                        <option value="UNISINU">UNISINU</option>

                                                    </select>
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="asociacion" class=" form-control-label">Nombre de la asociacion:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="asociacion" name="asociacion" placeholder="" class="form-control" value="<?php echo e(old('asociacion',$red->asociacion)); ?>">
                                                    
                                                    <small class="form-text text-muted">Escriba el nombre de la asociacion</small>
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ubicacion" class=" form-control-label">Nacional/Internacional</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="ubicacion" id="ubicacion" class="form-control"> 
                                                        <option value="<?php echo e(old('ubicacion',$red->ubicacion)); ?>"><?php echo e(old('ubicacion',$red->ubicacion)); ?></option>
                                                        <option value="Nacional">Nacional</option>
                                                        <option value="Internacional">Internacional</option>



                                                    </select>
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="objeto" class=" form-control-label">Objeto</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="objeto" id="objeto" class="form-control"> 
                                                        <option value="<?php echo e(old('objeto',$red->objeto)); ?>"><?php echo e(old('objeto',$red->objeto)); ?></option>
                                                        <option value="Movilidad">Movilidad</option>
                                                        <option value="Profesionalizacion">Profesionalizacion
                                                        </option>
                                                        <option value="Informacion">Informacion</option>
                                                        <option value="Investigacion">Investigacion</option>




                                                    </select>
                                                </div>
                                            </div>                                    
       
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="costo_membresia" class=" form-control-label">Costo de la membresia</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="number" id="costo_membresia" name="costo_membresia" placeholder="" class="form-control" value="<?php echo e(old('costo_membresia',$red->costo_membresia)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="periodicidad_pago" class=" form-control-label">Periodicidad de pago:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="periodicidad_pago" name="periodicidad_pago" placeholder="" class="form-control" value="<?php echo e(old('periodicidad_pago',$red->periodicidad_pago)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="fecha_vinculacion" class=" form-control-label">Fecha de vinculacion</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" id="fecha_vinculacion" name="fecha_vinculacion" placeholder="" class="form-control" value="<?php echo e(old('fecha_vinculacion',$red->fecha_vinculacion)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
		           
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="estado_vinculacion" class=" form-control-label">Estado de vinculacion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="estado_vinculacion" id="estado_vinculacion" class="form-control"> 
                                                        <option value="<?php echo e(old('estado_vinculacion',$red->estado_vinculacion)); ?>"><?php echo e(old('estado_vinculacion',$red->estado_vinculacion)); ?></option>
                                                        <option value="Activa">Activa</option>
                                                        <option value="No Activa">No Activa</option>
                                                        <option value="Por Vincular">Por Vincular</option>

                                                    </select>
                                                </div>
                                            </div>

        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="actividad_realizada" class=" form-control-label">Actividad realizada:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    
                                                    <textarea id="actividad_realizada" name="actividad_realizada" placeholder="" class="form-control" value="<?php echo e(old('actividad_realizada',$red->actividad_realizada)); ?>" rows="3"><?php echo e(old('actividad_realizada',$red->actividad_realizada)); ?></textarea>
                                                    
                                                </div>
                                            </div>
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="fecha_actividad" class=" form-control-label">Fecha de la actividad</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" id="fecha_actividad" name="fecha_actividad" placeholder="" class="form-control" value="<?php echo e(old('fecha_actividad',$red->fecha_actividad)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="num_participantes" class=" form-control-label">Numero de participantes:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="number" id="num_participantes" name="num_participantes" placeholder="" class="form-control" value="<?php echo e(old('num_participantes',$red->num_participantes)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="impacto_actividad" class=" form-control-label">Impacto de la actividad:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <textarea rows="3" name="impacto_actividad" placeholder="" class="form-control" value="<?php echo e(old('impacto_actividad',$red->impacto_actividad)); ?>"><?php echo e(old('impacto_actividad',$red->impacto_actividad)); ?>

                                                    </textarea>
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="responsable_unisinu" class=" form-control-label">Responsable unisinu:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="responsable_unisinu" name="responsable_unisinu" placeholder="" class="form-control" value="<?php echo e(old('responsable_unisinu',$red->responsable_unisinu)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="pagina_web" class=" form-control-label">Pagina web:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="pagina_web" name="pagina_web" placeholder="" class="form-control" value="<?php echo e(old('pagina_web',$red->pagina_web)); ?>">
                                                    
                                                    
                                                </div>
                                            </div>
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="observaciones" class=" form-control-label">Observaciones:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <textarea rows="3" id="observaciones" name="observaciones" placeholder="" class="form-control" value="<?php echo e(old('observaciones',$red->observaciones)); ?>"><?php echo e(old('observaciones',$red->observaciones)); ?></textarea>
                                                    
                                                    
                                                </div>
                                            </div>

		<button class="btn btn-primary btn-lg btn-block">Actualizar</button>


	</form>

	</div>
</div>

<div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
	




<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/redes/edit.blade.php ENDPATH**/ ?>
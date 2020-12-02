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
                                        <strong class="">Agregar </strong>
                                    </div>
                                    <div class="card-body card-block">

<?php echo csrf_field(); ?>
		

		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="institucion" class=" form-control-label">Nombre de la institucion:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="institucion" name="institucion" placeholder="" class="form-control" >
                                                    
                                                    <small class="form-text text-muted">Escriba el nombre de la institucion</small>
                                                </div>
                                            </div>
		                                                                   
<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/_form.blade.php ENDPATH**/ ?>
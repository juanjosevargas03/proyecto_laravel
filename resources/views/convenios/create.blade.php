@extends('panel')

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
                                        <strong class="">Agregar Convenio</strong>
                                    </div>
                                    <div class="card-body card-block">

	<form class="form-horizontal" method="POST" action="{{ route('convenios.store') }}">
		
		@csrf
		

		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="institucion" class=" form-control-label">Nombre de la institucion:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="institucion" name="institucion" placeholder="" class="form-control" >
                                                    
                                                    <small class="form-text text-muted">Escriba el nombre de la institucion</small>
                                                </div>
                                            </div>
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="pais" class=" form-control-label">Nombre del pais:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="pais" name="pais" placeholder="" class="form-control" >
                                                    
                                                    <small class="form-text text-muted">Escriba el nombre del pais</small>
                                                </div>
                                            </div>



            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="fecha_inicio" class=" form-control-label">Fecha de inicio</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="date" id="fecha_inicio" name="fecha_inicio"  placeholder="" class="form-control">
                                            </div>
                                            </div>



<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="fecha_finalizacion" class=" form-control-label">Fecha de Terminacion</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="date" id="fecha_finalizacion" name="fecha_finalizacion"  placeholder="" class="form-control">
                                                </div>
                                            </div>

		
<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="codigo_convenio" class=" form-control-label">Codigo del Convenio:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="codigo_convenio" name="codigo_convenio" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>
      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="id_pais" class=" form-control-label">Id del Pais:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="id_pais" name="id_pais" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>  
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="estado" class=" form-control-label">Estado</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="estado" id="estado" class="form-control"> 
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Vigente">Vigente</option>
                                                        <option value="No vigente">No vigente</option>



                                                    </select>
                                                </div>
                                            </div>                                                                        
          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="vigencia" class=" form-control-label">Vigencia:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="number" id="vigencia" name="vigencia" placeholder="" class="form-control">
                                                    
                                                     <small class="form-text text-muted">Digite el numero de años</small>
                                                </div>
                                            </div>  
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="responsable_inicial" class=" form-control-label">Responsable inicial:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="responsable_inicial" name="responsable_inicial" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>
           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="direccion_correspondencia" class=" form-control-label">Direccion de correspondencia:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="direccion_correspondencia" name="direccion_correspondencia" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>                                 
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nombre_rector" class=" form-control-label">Nombre rector:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="nombre_rector" name="nombre_rector" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="contacto_sinu" class=" form-control-label">Contacto sinu:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="contacto_sinu" name="contacto_sinu" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>    

		 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="programa" class=" form-control-label">Programa:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="programa" name="programa" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>           
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="objeto" class=" form-control-label">Objeto:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="objeto" name="objeto" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>
          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="participacion" class=" form-control-label">Participacion:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="participacion" name="participacion" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>
          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="telefono" class=" form-control-label">Telefono:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="telefono" name="telefono" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>
           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class=" form-control-label">Email:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="email" name="email" placeholder="" class="form-control" >
                                                    
                                                    
                                                </div>
                                            </div>                         
		<button class="btn btn-danger btn-lg btn-block">Guardar</button>


	</form>
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




	



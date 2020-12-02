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
                                        <strong class="">Actualizar </strong>
                                    </div>
                                    <div class="card-body card-block">




	<form class="form-horizontal" method="POST" action="{{ route('update_curriculos') }}">
		 @method('PATCH')
		
@csrf
		
                                                    <input type="number" hidden value="{{$curriculo->id}}" name="id_cur">
		

		
          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="seccional" class=" form-control-label">Seccional</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="seccional" id="seccional" class="form-control"> 
                                                        <option value="{{old('seccional',$curriculo->seccional)}}">{{old('seccional',$curriculo->seccional)}}</option>
                                                        <option value="CTG">CTG</option>
                                                        <option value="Monteria">Monteria</option>



                                                    </select>
                                                </div>
                                            </div> 
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="area_conocimiento" class=" form-control-label">Area de conocimiento</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="area_conocimiento" id="area_conocimiento" class="form-control"> 
                                                        <option value="{{old('area_conocimiento',$curriculo->area_conocimiento)}}">{{old('area_conocimiento',$curriculo->area_conocimiento)}}</option>
                                                        <option value="Facultad de ingenieria">Facultad de ingenieria</option>
                                                        <option value="Ciencias Administrativas y contables">Ciencias Administrativas y contables</option>
                                                        <option value="Ciencias naturales y biotecnologicas">Ciencias naturales y biotecnologicas</option>
                                                        <option value="Area humanistica">Area humanistica</option>
                                                        <option value="Ciencias sociales y humanas">Ciencias sociales y humanas</option>




                                                    </select>
                                                </div>
                                            </div>                                  
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="facultad" class=" form-control-label">Facultad</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="facultad" id="facultad" class="form-control">
                                                        <option value="{{old('facultad',$curriculo->facultad)}}">{{old('facultad',$curriculo->facultad)}}</option>
                                                        <option value="Gestion y Liderazgo">Gestion y Liderazgo</option>
                                                        <option value="Medicina">Medicina</option>
                                                        <option value="Nutricion y dietetica">Nutricion y dietetica</option>
                                                        <option value="Preventiva y Comunitaria">Preventiva y Comunitaria</option>
                                                        <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
                                                        <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                                                        <option value="Odontologia">Odontologia</option>
                                                        <option value="Optometria">Optometria</option>

                                                        <option value="Biologia Marina">Biologia Marina</option>
                                                        <option value="Psicologia">Psicologia</option>
                                                        <option value="EANI">EANI</option>
                                                        <option value="Basicas Exactas">Basicas Exactas</option>
                                                        <option value="Medicina(Rotacion Clinica)">Medicina(Rotacion Clinica)</option>
                                                        <option value="Basicas de la salud">Basicas de la salud</option>

                                                        <option value="Derecho">Derecho</option>
                                                        <option value="UNISINU">UNISINU</option>

                                                    </select>
                                                </div>
                                            </div>
        
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="componente" class=" form-control-label">Componente</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="componente" id="componente" class="form-control"> 
                                                        <option value="{{old('componente',$curriculo->componente)}}">{{old('componente',$curriculo->componente)}}</option>
                                                        <option value="Docencia">Docencia</option>

                                                    </select>
                                                </div>
                                            </div>
        
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="descripcion" class=" form-control-label">Descripcion:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <textarea rows="3" name="descripcion" placeholder="" class="form-control" value="{{old('descripcion',$curriculo->descripcion)}}" >{{old('descripcion',$curriculo->descripcion)}}
                                                    </textarea>
                                                    
                                                </div>
                                            </div>
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="mes" class=" form-control-label">Mes</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="mes" id="mes" class="form-control"> 
                                                        <option value="{{old('mes',$curriculo->mes)}}">{{old('mes',$curriculo->mes)}}</option>
                                                        <option value="Enero">Enero</option>
                                                        <option value="Febrero">Febrero</option>
                                                        <option value="Marzo">Marzo</option>
                                                        <option value="Abril">Abril</option>
                                                        <option value="Mayo">Mayo</option>
                                                        <option value="Junio">Junio</option>
                                                        <option value="Julio">Julio</option>
                                                        <option value="Agosto">Agosto</option>
                                                        <option value="Septiembre">Septiembre</option>
                                                        <option value="Octubre">Octubre</option>
                                                        <option value="Noviembre">Noviembre</option>
                                                        <option value="Diciembre">Diciembre</option>


                                                    </select>
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="año" class=" form-control-label">Año</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="año" name="año" placeholder="" class="form-control" value="{{old('año',$curriculo->año)}}">
                                                    
                                                    
                                                </div>
                                            </div>
        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="responsable" class=" form-control-label">Responsable:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="responsable" name="responsable" placeholder="" class="form-control" value="{{old('responsable',$curriculo->responsable)}}">
                                                    
                                                    
                                                </div>
                                            </div>
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="correo" class=" form-control-label">Correo electronico:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="email" id="correo" name="correo" placeholder="" class="form-control" value="{{old('correo',$curriculo->correo)}}">
                                                    
                                                    
                                                </div>
                                            </div>
         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="contacto" class=" form-control-label">Contacto:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="contacto" name="contacto" placeholder="" class="form-control" value="{{old('contacto',$curriculo->contacto)}}">
                                                    
                                                    
                                                </div>
                                            </div>                                                                      
        

		<button class="btn btn-danger btn-lg btn-block">Actualizar</button>


	</form>

	</div>
</div>

<div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
	




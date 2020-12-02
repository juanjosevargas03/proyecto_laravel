


@extends('panel')



<body class="animsition">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">{{$convenio->institucion}}</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        
                                            
                                        
                                        <tbody>
                                            <tr>
                                                <th>ID</th>

                                                <td>{{$convenio->id}}</td>
                                            </tr>

                                            <tr>
                                                <th>Institucion</th>

                                                <td>{{$convenio->institucion}}</td>
                                            </tr>
                                            <tr>
                                                <th>Pais</th>

                                                <td>{{$convenio->pais}}</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de inicio</th>

                                                <td>{{$convenio->fecha_inicio}}</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de finalizacion</th>

                                                <td>{{$convenio->fecha_finalizacion}}</td>
                                            </tr>
                                            <tr>
                                                <th>Estado</th>

                                                <td>{{$convenio->estado}}</td>
                                            </tr>
                                            <tr>
                                                <th>Codigo del Convenio</th>

                                                <td>{{$convenio->codigo_convenio}}</td>
                                            </tr>
                                            <tr>
                                                <th>Id del pais</th>

                                                <td>{{$convenio->id_pais}}</td>
                                            </tr>
                                            <tr>
                                                <th>vigencia/Años</th>

                                                <td>{{$convenio->vigencia}}</td>
                                            </tr>
                                            <tr>
                                                <th>Responsable inicial</th>

                                                <td>{{$convenio->responsable_inicial}}</td>
                                            </tr>
                                            <tr>
                                                <th>Direccion de correspondencia</th>

                                                <td>{{$convenio->direccion_correspondencia}}</td>
                                            </tr>
                                            <tr>
                                                <th>Nombre del rector</th>

                                                <td>{{$convenio->nombre_rector}}</td>
                                            </tr>
                                            <tr>
                                                <th>Contacto unisinu</th>

                                                <td>{{$convenio->contacto_sinu}}</td>
                                            </tr>
                                            <tr>
                                                <th>Programa</th>

                                                <td>{{$convenio->programa}}</td>
                                            </tr>
                                            <tr>
                                                <th>Objeto</th>

                                                <td>{{$convenio->objeto}}</td>
                                            </tr>
                                            <tr>
                                                <th>Participacion</th>

                                                <td>{{$convenio->participacion}}</td>
                                            </tr>
                                            <tr>
                                                <th>Telefono</th>

                                                <td>{{$convenio->telefono}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>

                                                <td>{{$convenio->email}}</td>
                                            </tr>
                                            

											<tr>
                                                <th>Acciones</th>
                                                <td>
                                                    

                                                <form method="post" action="{{ route('edit_convenio')}}">
                                                

                                                    {{ csrf_field() }}

                                                    <input type="number" hidden value="{{$convenio->id}}" name="id_convenio">

                                                    <button type="submit" class="btn btn-secondary btn-sm">Editar</button>
                                                    </form>
                                                <br>

                                                <form method="post" action="{{ route('pdf_convenio') }}" >
                                            @csrf
                                            <input type="number" hidden value="{{$convenio->id}}" name="id_convenio">
                                                        <button class="btn btn-secondary btn-sm">PDF</button>

                                        
                                        </form>
                                                    

                                                <br>

                                                <form method="post" action="{{ route('delete_convenio')}}">
                                                

                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}   

                                                    <input type="number" hidden value="{{$convenio->id}}" name="id_convenio">

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

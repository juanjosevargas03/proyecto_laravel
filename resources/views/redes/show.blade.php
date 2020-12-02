


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
                                <h2 class="title-1 m-b-25">{{$rede->asociacion}}</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        
                                            
                                        
                                        <tbody>

                                            <tr>
                                                <th>Id</th>

                                                <td>{{$rede->id}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Unidad</th>

                                                <td>{{$rede->unidad}}</td>
                                            </tr>
                                            <tr>
                                                <th>Programa</th>

                                                <td>{{$rede->programa}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Asociacion</th>

                                                <td>{{$rede->asociacion}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Ubicacion</th>

                                                <td>{{$rede->ubicacion}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Objeto</th>

                                                <td>{{$rede->objeto}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Costo de membresia</th>

                                                <td>{{$rede->costo_membresia}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Periodicidad de pago</th>

                                                <td>{{$rede->periodicidad_pago}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Fecha de vinculacion</th>

                                                <td>{{$rede->fecha_vinculacion}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Estado de vinculacion</th>

                                                <td>{{$rede->estado_vinculacion}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Actividad realizada</th>

                                                <td>{{$rede->actividad_realizada}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Fecha de actividad</th>

                                                <td>{{$rede->fecha_actividad}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Numero de participantes</th>
                                                <td>{{$rede->num_participantes}}</td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Impacto de la actividad</th>
                                                <td>{{$rede->impacto_actividad}}</td>
                                                

                                            </tr>

                                            <tr>
                                                <th>Responsable en unisinu</th>
                                                <td>{{$rede->responsable_unisinu}}</td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Pagina web</th>
                                                <td>{{$rede->pagina_web}}</td>
                                                

                                            </tr>
                                            <tr>
                                                <th>Observaciones</th>
                                                <td>{{$rede->observaciones}}</td>
                                                

                                            </tr>

											<tr>
                                                <th>Acciones</th>
                                                <td>
                                                    

                                                <form method="post" action="{{ route('edit_redes')}}">
                                                

                                                    {{ csrf_field() }}

                                                    <input type="number" hidden value="{{$rede->id}}" name="id_red">

                                                    <button type="submit" class="btn btn-secondary btn-sm">Editar</button>
                                                    </form>
                                                <br>

                                                    <form method="post" action="{{ route('delete_redes')}}">
                                                

                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}   

                                                    <input type="number" hidden value="{{$rede->id}}" name="id_red">

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

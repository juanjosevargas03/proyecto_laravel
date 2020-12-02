


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
                                <h2 class="title-1 m-b-25">{{$curriculo->descripcion}}</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        
                                            
                                        
                                        <tbody>

                                            <tr>
                                                <th>Id</th>

                                                <td>{{$curriculo->id}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Seccional</th>

                                                <td>{{$curriculo->seccional}}</td>
                                            </tr>
                                            <tr>
                                                <th>Area de conocimiento</th>

                                                <td>{{$curriculo->area_conocimiento}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Facultad</th>

                                                <td>{{$curriculo->facultad}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Componente</th>

                                                <td>{{$curriculo->componente}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Descripcion</th>

                                                <td>{{$curriculo->descripcion}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Mes</th>

                                                <td>{{$curriculo->mes}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Año</th>

                                                <td>{{$curriculo->año}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Responsable</th>

                                                <td>{{$curriculo->responsable}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Correo electronico</th>

                                                <td>{{$curriculo->correo}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>Contacto</th>

                                                <td>{{$curriculo->contacto}}</td>
                                                
                                            </tr>
                                            
											<tr>
                                                <th>Acciones</th>
                                                <td>
                                                    

                                                <form method="post" action="{{ route('edit_curriculos')}}">
                                                

                                                    {{ csrf_field() }}

                                                    <input type="number" hidden value="{{$curriculo->id}}" name="id_cur">

                                                    <button type="submit" class="btn btn-secondary btn-sm">Editar</button>
                                                    </form>
                                                <br>

                                                    <form method="post" action="{{ route('delete_curriculos')}}">
                                                

                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}   

                                                    <input type="number" hidden value="{{$curriculo->id}}" name="id_cur">

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

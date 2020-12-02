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
                                <h2 class="title-1 m-b-25">Aspirantes</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Identificacion</th>
                                                 <th>Programa</th>
                                                <th>Inscripcion</th>
                                                <th>Telefono</th>
                                            
                                                <th>Puntaje</th>
                                                <th>Admision</th>
                                                <th>Acciones</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($personas as $persona)

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$persona->Nombre}}</td>
                                                <td>{{$persona->Identificacion}}</td>
                                                <td>{{$persona->Programa}}</td>

                                                <td>{{$persona->id}}</td>
                                                <td>{{$persona->Telefono}}</td>
                                               
                                                <td>{{$persona->Puntaje}}</td>
                                                <td>{{$persona->Admision}}</td>

                                                <td><a href="{{ url('/personas/'.$persona->id.'/edit')}}">
                                                    Ver mas|
                                                </a>                                                    
                                                    
                                                  
                                                    <form method="post" action="{{ url('/personas/'.$persona->id)}}">

                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}    
                                                    

                                                    <button type="submit" onclick="return confirm('¿Estas Seguro?')" class="btn btn-danger btn-sm">Borrar</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>

                                    {{ $personas->links() }}
                                </div>

                            </div>


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
                                            @foreach($usuarios as $usuario)

                                            <tr>

                                                <td>{{$usuario->name}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->Programa}}</td>
                                                <td>{{$usuario->created_at}}</td>

                                                <td>
                                                    <form method="post" action="{{ url('/personas/'.$usuario->id)}}">
                                                

                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}   

                                                    <button type="submit" onclick="return confirm('¿Estas Seguro?')" class="btn btn-danger btn-sm">Borrar</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach


                                        </tbody>


                                    </table>

                                    {{ $usuarios->links() }}
                                </div>

                            </div>

















                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

    </div>



</body>
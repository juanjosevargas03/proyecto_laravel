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
                                <h2 class="title-1 m-b-25">Personas</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Universidad</th>
                                                <th>Vinculacion</th>
                                                <th>Programa</th>
                                                <th>Fecha de Inicio</th>
                                                <th>Fecha de Fin</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($personas as $persona)

                                            <tr>
                                            <td>{{$loop->iteration}}</td>
                                                <td>{{$persona->Nombre}}</td>
                                                <td>{{$persona->Institucion}}</td>
                                                <td>{{$persona->Vinculacion}}</td>
                                                <td>{{$persona->Programa}}</td>

                                                <td>{{$persona->F_Inicio}}</td>
                                                <td>{{$persona->F_Fin}}</td>


                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                    {{ $personas->links() }}
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

@extends('panel')



<body class="animsition">
    <div class="page-wrapper">


    
        <div class="page-container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Redes Nacionales/Internacionales</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>unidad</th>
                                                <th>programa</th>
                                                <th>asociacion</th>

                                                <th>Acciones</th>
                                               


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($redes as $red)

                                            <tr>
                                                <td>{{$red->id}}</td>

                                                <td>{{$red->unidad}}</td>
                                                <td>{{$red->programa}}</td>
                                                <td>{{$red->asociacion}}</td>

                                                <td >
                                                	<form method="post" action="{{ route('show_redes') }}" >
                                            @csrf
                                            <input type="number" hidden value="{{$red->id}}" name="id_red">
                                                        <button class="btn btn-secondary btn-sm">Ver mas</button>
                                            
										
                                            
                                        </form>
                                                </td>


                                                
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>

                                    {{ $redes->links() }}
                                </div>

                            </div>


<div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>








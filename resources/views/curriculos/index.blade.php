
@extends('panel')



<body class="animsition">
    <div class="page-wrapper">


    
        <div class="page-container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Internacionalizacion del curriculo</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Facultad</th>
                                                <th>descripcion</th>

                                                <th>Acciones</th>
                                               


                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($curriculos as $cur)



                                            <tr>
                                                

                                                <td>{{$cur->id}}</td>

                                                <td>{{$cur->facultad}}</td>
                                                <td>{{$cur->descripcion}}</td>

                                                <td >
                                                	<div>
                                                        <form method="post" action="{{ route('show_curriculos')}}" >

                                                            @csrf
                                                        <input type="number" hidden value="{{$cur->id}}" name="id_cur">
                                                        <button class="btn btn-secondary btn-sm">Ver mas</button>

                                         
                                        </form>
                                                    </div>
                                                
                                            
                                                </td>


                                                
                                            </tr>
                                            @endforeach



                                        </tbody>
                                    </table>

                                    {{ $curriculos->links() }}
                                </div>

                            </div>


<div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>








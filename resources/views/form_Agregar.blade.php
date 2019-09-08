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
                                        <strong class="">Agregar </strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{url('/personas')}}" method="post" class="form-horizontal">

                                            {{ csrf_field() }}


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Seccional" class=" form-control-label">Seccional</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Seccional" id="Seccional" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Cartagena">Cartagena</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Fondo" class=" form-control-label">Fondo</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Fondo" id="Fondo" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Pila">Pila</option>
                                                        <option value="Bilateral">Bilateral</option>
                                                        <option value="Delfin">Delfin</option>
                                                        <option value="N/A">N/A</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Genero" class=" form-control-label">Genero</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Genero" id="Genero" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Femenino">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>





                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Nombre" class=" form-control-label">Nombre:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Nombre" name="Nombre" placeholder="" class="form-control">
                                                    <small class="form-text text-muted">Escriba el nombre Completo</small>
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Tipo_ID" class=" form-control-label">Tipo de ID</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Tipo_ID" id="Tipo_ID" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Pasaporte">Pasaporte</option>
                                                        <option value="DNI">DNI</option>
                                                        <option value="Cedula Ciudadana">Cedula Ciudadana</option>


                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Numero_ID" class=" form-control-label">Identificacion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="Numero_ID" id="Numero_ID" name="Numero_ID" placeholder="" class="form-control">

                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="PIP/VISA" class=" form-control-label">PIP/VISA</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="PIP/VISA" id="PIP/VISA" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="PIP2">PIP2</option>
                                                        <option value="PIP5">PIP5</option>
                                                        <option value="PIP6">PIP6</option>
                                                        <option value="N/A">N/A</option>


                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Correo" class=" form-control-label">Correo:</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="email" id="Correo" name="Correo" placeholder="" class="form-control">
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Financiacion_Nacional" class=" form-control-label">Financiacion Nacional</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Financiacion_Nacional" name="Financiacion_Nacional" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ValorAsumidoHotelesAlimentacion" class=" form-control-label"> Valor asumido por UniSinú por hoteles alimentación y transporte</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="ValorAsumidoHotelesAlimentacion" name="ValorAsumidoHotelesAlimentacion" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ValorAsumidoInscripciones" class=" form-control-label"> Valor asumido por UniSinú por concepto de inscripciones </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="ValorAsumidoInscripciones" name="ValorAsumidoInscripciones" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ValorTiquetes" class=" form-control-label"> Valor de tiquetes </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="ValorTiquetes" name="ValorTiquetes" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ValorMensualHospedaje" class=" form-control-label"> Valor Mensual de hospedaje </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="ValorMensualHospedaje" name="ValorMensualHospedaje" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ValorTotalAsumido" class=" form-control-label"> Valor Total Asumido por UniSinú </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="ValorTotalAsumido" name="ValorTotalAsumido" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="TasaDeCambioFViaje" class=" form-control-label"> Tasa de cambio a la fecha del viaje </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="TasaDeCambioFViaje" name="TasaDeCambioFViaje" placeholder="" class="form-control">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="ValorTotalAsumidoUSD" class=" form-control-label"> Valor total en USD asumido por Unisinú </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="ValorTotalAsumidoUSD" name="ValorTotalAsumidoUSD" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Financiacion_Internacional" class=" form-control-label"> Financiación internacional </label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Financiacion_Internacional" name="Financiacion_Internacional" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Soporte" class=" form-control-label">Soporte</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Soporte" name="Soporte" placeholder="" class="form-control">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Programa" class=" form-control-label">Programa/Escuela</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Programa" id="Programa" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Gestion y Liderazgo">Gestion y Liderazgo</option>
                                                        <option value="Medicina">Medicina</option>
                                                        <option value="Nutricion y dietetica">Nutricion y dietetica</option>
                                                        <option value="Preventiva y Comunitaria">Preventiva y Comunitaria</option>
                                                        <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
                                                        <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                                                        <option value="Odontologia">Odontologia</option>
                                                        <option value="Biologia Marina">Biologia Marina</option>
                                                        <option value="Psicologia">Psicologia</option>
                                                        <option value="EANI">EANI</option>
                                                        <option value="Basicas Exactas">Basicas Exactas</option>
                                                        <option value="Medicina(Rotacion Clinica)">Medicina(Rotacion Clinica)</option>
                                                        <option value="Derecho">Derecho</option>
                                                    </select>
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Acreditacion" class=" form-control-label">Acreditacion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Acreditacion" id="Acreditacion" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="SI">SI</option>
                                                        <option value="NO">NO</option>



                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Institucion" class=" form-control-label">Institución de Origen/destino</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Institucion" name="Institucion" placeholder="" class="form-control">
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Vinculacion" class=" form-control-label">Vinculacion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Vinculacion" id="Vinculacion" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Docente">Docente</option>
                                                        <option value="Estudiante">Estudiante</option>
                                                        <option value="Investigador">Investigador</option>


                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Tipom" class=" form-control-label">Tipo de Movilidad</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Tipom" id="Tipom" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Entrante">Entrante</option>
                                                        <option value="Saliente">Saliente</option>



                                                    </select>
                                                </div>

                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Asist" class=" form-control-label">Asist Card</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Asist" id="Asist" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="ENYMAR">ENYMAR</option>



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Souvenirs" class=" form-control-label">Souvenirs</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Souvenirs" id="Souvenirs" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="N/A">N/A</option>



                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Categoria" class=" form-control-label">Categoria de Movilidad</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Categoria" id="Categoria" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Intercambio Academico">Intercambio Academico</option>
                                                        <option value="Curso Corto">Curso Corto</option>
                                                        <option value="Pasantia de Investigacion">Pasantia de Investigacion</option>
                                                        <option value="Profesor de Investigacion">Profesor de Investigacion</option>



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Modalidad" class=" form-control-label">Modalidad</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Modalidad" id="Modalidad" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Nacional">Nacional</option>
                                                        <option value="Internacional">Internacional</option>



                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="O_Movilidad" class=" form-control-label">Objetivo Movilidad</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="O_Movilidad" id="O_Movilidad" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Docencia">Docencia</option>
                                                        <option value="Rotacion Clinica">Rotacion Clinica</option>
                                                        <option value="Escuela de Verano">Escuela de Verano</option>
                                                        <option value="Investigacion">Investigacion</option>
                                                        <option value="Evento Academico">Evento Academico</option>



                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Evento" class=" form-control-label">Evento</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="Evento" id="Evento" class="form-control">
                                                        <option value="">Escoja una opcion</option>
                                                        <option value="Docencia">Intercambio Academico</option>
                                                        <option value="Rotacion Clinica">Rotacion Clinica</option>
                                                        <option value="Escuela de Verano">Escuela de Verano</option>
                                                        <option value="Investigacion">Investigacion</option>
                                                        <option value="Evento Academico">Evento Academico</option>



                                                    </select>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Pais" class=" form-control-label">Pais</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Pais" name="Pais" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="F_Inicio" class=" form-control-label">Fecha de inicio</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="date" id="F_Inicio" name="F_Inicio" placeholder="" class="form-control">
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="F_Fin" class=" form-control-label">Fecha de Terminacion</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="date" id="F_Fin" name="F_Fin" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Duracion" class=" form-control-label">Duracion</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Duracion" name="Duracion" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Año" class=" form-control-label">Año</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Año" name="Año" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Semestre" class=" form-control-label">Semestre</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="Semestre" name="Semestre" placeholder="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Observaciones">Observaciones</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <textarea id="Observaciones" class="form-control" placeholder="..." name="Observaciones" rows="3"></textarea>
                                                </div>
                                            </div>


                                            <input type="submit" value="Agregar">
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
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

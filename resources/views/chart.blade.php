@extends('panel')

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
     
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChartBarra);

     function drawChartBarra() {
        var data = google.visualization.arrayToDataTable([

          ['Programa', 'Cantidad de Aspirantes'],

           @foreach ($barr as $barras)
          ['{{$barras->Programa}}', {{$barras->Cantidad}}],
          @endforeach




]);

        var options = {
          
          
         
        };

        var chart = new google.charts.Bar(document.getElementById('barchart'));

        chart.draw(data,google.charts.Bar.convertOptions(options));
      }

     google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChartPie);

      function drawChartPie() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          @foreach ($pastel as $pastels)
          ['{{$pastels->Programa}}', {{$pastels->Cantidad}}],
          @endforeach


        ]);

        var options = {
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


      
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChartBarra2);

     function drawChartBarra2() {
        var data = google.visualization.arrayToDataTable([

          ['Año', 'Cantidad de Aspirantes'],

           @foreach ($barra as $barrass)
          ['{{$barrass->Año}}', {{$barrass->Cantidad}}],
          @endforeach




]);

        var options = {
          
          
         
        };

        var chart = new google.charts.Bar(document.getElementById('barchart2'));

        chart.draw(data,google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>



<body>

  <div class="page-container">


    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">


            <div class="col-lg-6">
              <div class="au-card m-b-30">
                <div class="au-card-inner">
                  <h3 class="title-2 m-b-40">Aspirantes por programas</h3>
                 <div id="piechart" style="width: 600px; height: 500px;"></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="au-card m-b-30">
                <div class="au-card-inner">
                  <h3 class="title-2 m-b-40">Aspirantes por programas</h3>
              
                  <div id="barchart" style="width: 600px; height: 400px;"></div>
                    
               
                </div>
              </div>
            </div>

            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Aspirantes por Año</h3>
                                        <div id="barchart2" style="width: 600px; height: 350px"></div>
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
    <!-- END MAIN CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->

  </div>


</body>
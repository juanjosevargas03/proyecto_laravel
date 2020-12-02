<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChartBarra);

      function drawChartBarra() {
        var data = google.visualization.arrayToDataTable([

  ['Year', 'Sales', 'Expenses', 'Profit'],

@foreach ($docenteBarra as $docenteBarras)
@foreach ($investigadorBarra as $investigadorBarras)
@foreach ($estudianteBarra as $estudianteBarras)
@foreach ($añito as $añitos)


[{{ $añitos->Año}}, {{$docenteBarras->Cantidad }}, {{$estudianteBarras->Cantidad }},
{{$investigadorBarras->Cantidad }}],
@endforeach
@endforeach
@endforeach
@endforeach

]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChartPie);

      function drawChartPie() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
    <div id="piechart" style="width: 600px; height: 500px;"></div>
  </body>
</html>
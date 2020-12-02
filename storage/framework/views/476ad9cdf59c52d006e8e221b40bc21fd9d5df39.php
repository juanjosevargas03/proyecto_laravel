<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChartBarra);

      function drawChartBarra() {
        var data = google.visualization.arrayToDataTable([

['Year', 'Sales', 'Expenses', 'Profit'],

<?php $__currentLoopData = $docenteBarra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docenteBarras): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $investigadorBarra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investigadorBarras): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $estudianteBarra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudianteBarras): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $añito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $añitos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


[<?php echo e($añitos->Año); ?>, <?php echo e($docenteBarras->Cantidad); ?>, <?php echo e($estudianteBarras->Cantidad); ?>,
<?php echo e($investigadorBarras->Cantidad); ?>],
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
</html><?php /**PATH C:\laragon\www\proyecto\resources\views/barras.blade.php ENDPATH**/ ?>
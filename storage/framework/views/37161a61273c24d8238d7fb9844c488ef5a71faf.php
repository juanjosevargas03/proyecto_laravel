<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
     

 google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChartBarra);

      function drawChartBarra() {
        var data = google.visualization.arrayToDataTable([

          ['PAIS', 'Cantidad de Convenios'],

           <?php $__currentLoopData = $barr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          ['<?php echo e($barra->pais); ?>', <?php echo e($barra->Cantidad); ?>],
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




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

          <?php $__currentLoopData = $pastell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pastels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          ['<?php echo e($pastels->estado); ?>', <?php echo e($pastels->Cantidad); ?>],
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        ]);

        var options = {
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
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
                  <h3 class="title-2 m-b-40">Convenios Vigentes</h3>
                  <div id="piechart" style="width: 800px; height: 500px;"></div>
                </div>
              </div>
            </div>

           <div class="col-lg-6">
              <div class="au-card m-b-30">
                <div class="au-card-inner">
                  <h3 class="title-2 m-b-40">Convenios por Pais</h3>
                  <div id="barchart" style="width: 800px; height: 500px;"></div>
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
<?php echo $__env->make('panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto\resources\views/convenios/chart_convenios.blade.php ENDPATH**/ ?>
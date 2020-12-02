

<body>
    <div class="page-wrapper">
        <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                            <h2>Cantidad de aspirantes por programa</h2>
                       <div class="table-responsive table--no-card m-b-40">
                                    <table class="table  table-striped table-earning" border="1">
                                        
                                            
                                            <br >
                                        
                                        <tbody>
                                                

                                             <?php $__currentLoopData = $c_programa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_programas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th width="350px"> <?php echo e($c_programas->Programa); ?></th>

                                                    <td width="350px"> <?php echo e($c_programas->cantidad); ?></td>
                                                </tr>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>

                                </div>
                                <br >
                                <h2>Cantidad de aspirantes por año</h2>
                                <br >
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table  table-striped table-earning" border="1">
                                        
                                            
                                            <br >
                                        
                                        <tbody>


                                             <?php $__currentLoopData = $c_año; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_años): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th width="350px"> <?php echo e($c_años->Año); ?></th>

                                                    <td width="350px"> <?php echo e($c_años->cantidad); ?></td>
                                                </tr>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>

                                </div>
                                 <br >
                                <h2>Total aspirantes</h2>
                                <br >
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table  table-striped table-earning" border="1">
                                        
                                            <br >
                                        <tbody>
                                                <tr>
                                                    <th width="350px"> <?php echo e($c_aspirantes); ?></th>
                                                </tr>
                                            
                                        </tbody>
                                    </table>

                                </div>
                                

        <!-- PAGE CONTAINER--> </div>  
                     </div>  
                 </div>  
           </div>  
              
                                           

                                            


 <!-- Jquery JS-->
                <script src="/vendor/jquery-3.2.1.min.js"></script>
                <!-- Bootstrap JS-->
                <script src="/vendor/bootstrap-4.1/popper.min.js"></script>
                <script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
                <!-- Vendor JS       -->
                <script src="/vendor/slick/slick.min.js">
                </script>
                <script src="/vendor/wow/wow.min.js"></script>
                <script src="/vendor/animsition/animsition.min.js"></script>
                <script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                </script>
                <script src="/vendor/counter-up/jquery.waypoints.min.js"></script>
                <script src="/vendor/counter-up/jquery.counterup.min.js">
                </script>
                <script src="/vendor/circle-progress/circle-progress.min.js"></script>
                <script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                <script src="/vendor/chartjs/Chart.bundle.min.js"></script>
                <script src="/vendor/select2/select2.min.js">
                </script>

                <!-- Main JS-->
                <script src="/js/main.js"></script>

                
               

</body><?php /**PATH C:\laragon\www\proyecto\resources\views/report.blade.php ENDPATH**/ ?>
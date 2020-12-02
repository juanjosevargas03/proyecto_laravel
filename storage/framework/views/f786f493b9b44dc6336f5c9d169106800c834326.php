<?php if(auth()->user()->TipoUsuario == 1): ?>

<?php echo $__env->make('home_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

<?php echo $__env->make('home_estandar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>


<?php /**PATH C:\laragon\www\proyecto\resources\views/home.blade.php ENDPATH**/ ?>
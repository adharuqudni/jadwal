
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/welcome.css')); ?>">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container m-auto">
        <h1><b>Selamat Datang Di Jadwalku</b></h1>
        <h2 style="font-size: 24px">Jadwalku adalah tempat kamu menulis jadwal dan kamu akan di bangunkan oleh dia tenang saja</h2>
        <div class="regis text-center">
            <a href="login" type="button" class="btn btn-custom">Log in</a>
            <a href="register"  type="button" class="btn btn-custom">Sign up</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\jadwal_project\Jadwal.7\resources\views/welcome.blade.php ENDPATH**/ ?>
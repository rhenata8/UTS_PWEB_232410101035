<?php $__env->startSection('title', 'Welcome to Mizu'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-cover bg-center h-96" style="background-image: url('https://img.hellofresh.com/w_3840,q_auto,f_auto,c_fill,fl_lossy/hellofresh_s3/image/601046e74a46755e44641fc2-e2968f9f.jpg');">
    <div class="bg-pink-200 bg-opacity-60 h-full flex items-center justify-center ">
        <h1 class="text-pink-900 text-4xl md:text-6xl font-bold">Welcome to Mizu</h1>
    </div>
</section>

<section class="p-8 text-center bg-pink-50">
    <h2 class="text-2xl font-semibold mb-4 text-pink-800">Nikmati pengalaman bersantap terbaik di restoran kami.</h2>
    <p class="text-pink-700">Reservasi mudah, cepat, dan praktis.</p>
    <a href="/login" class="mt-6 inline-block bg-pink-500 text-white px-6 py-2 rounded hover:bg-pink-600">Reservasi Sekarang</a>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEM 4\PWEBBBBB\UTS PR\PR_UTS\resources\views/landing.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Login - Mizu'); ?>

<?php $__env->startSection('content'); ?>
<div class="flex justify-center items-center h-screen bg-pink-100">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center text-pink-700 mb-6">Login Reservasi Mizu</h2>
        <form method="POST" action="<?php echo e(route('doLogin')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="username" class="block text-pink-800 font-semibold mb-1">Username</label>
                <input type="text" name="username" id="username" required class="w-full border border-pink-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-pink-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-pink-800 font-semibold mb-1">Password</label>
                <input type="password" name="password" id="password" required class="w-full border border-pink-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-pink-500">
            </div>
            <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 rounded">Login</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEM 4\PWEBBBBB\UTS PR\PR_UTS\resources\views/login.blade.php ENDPATH**/ ?>
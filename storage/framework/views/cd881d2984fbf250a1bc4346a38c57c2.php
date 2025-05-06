<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('content'); ?>
<div class="flex justify-center items-center min-h-screen bg-pink-50 p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-pink-600 mb-4">Profil Pengguna</h2>

        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4 text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('updateProfil')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Username:</label>
                <input type="text" name="username" value="<?php echo e($username); ?>" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-pink-300" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Password:</label>
                <input type="text" name="password" value="<?php echo e($password); ?>" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-pink-300" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEM 4\PWEBBBBB\UTS PR\PR_UTS\resources\views/profile.blade.php ENDPATH**/ ?>
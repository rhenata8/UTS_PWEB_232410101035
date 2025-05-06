<?php $__env->startSection('title', 'Daftar Reservasi - Mizu'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-8 bg-pink-50 min-h-screen">
    <h1 class="text-3xl font-bold text-pink-700 mb-6">Daftar Reservasi</h1>

    <?php if(count($reservasi) > 0): ?>
        <div class="grid gap-4" id="list-reservasi">
            <?php $__currentLoopData = $reservasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white shadow-md rounded p-4 border-l-4 border-pink-400 relative transition-opacity" id="reservasi-<?php echo e($key); ?>">
                <p><strong>Nama Pemesan:</strong> <?php echo e($r['nama_pemesan']); ?></p>
                <p><strong>Jumlah Orang:</strong> <?php echo e($r['jumlah_orang']); ?></p>
                <p><strong>Durasi:</strong> <?php echo e($r['durasi']); ?> jam</p>
                <p><strong>Waktu:</strong> <?php echo e(\Carbon\Carbon::parse($r['waktu'])->format('d M Y, H:i')); ?></p>
                <div class="mt-3 flex gap-2">
                    <button onclick="selesai(<?php echo e($key); ?>)" class="bg-green-500 text-white px-3 py-1 rounded">Selesai</button>
                    <a href="<?php echo e(route('hapusReservasi', ['index' => $key])); ?>"
                        class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                        onclick="return confirm('Yakin ingin menghapus reservasi ini?')">
                        Hapus
                     </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <p class="text-gray-600">Belum ada reservasi yang dilakukan.</p>
    <?php endif; ?>
</div>

<script>
    function selesai(id) {
        const card = document.getElementById('reservasi-' + id);
        card.classList.add('opacity-50');
    }

    function hapus(id) {
        const card = document.getElementById('reservasi-' + id);
        card.remove();
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEM 4\PWEBBBBB\UTS PR\PR_UTS\resources\views/pengelolaan.blade.php ENDPATH**/ ?>
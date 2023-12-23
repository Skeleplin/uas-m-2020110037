<!-- resources/views/transactions/index.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><i class="fas fa-list"></i> Daftar Transaksi</h1>
            <hr>
            <a href="<?php echo e(route('transactions.create')); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Transaksi</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        <th>Tujuan</th>
                        <th>Account ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($transaction->id); ?></td>
                        <td><?php echo e($transaction->kategori); ?></td>
                        <td>Rp. <?php echo e($transaction->nominal); ?></td>
                        <td><?php echo e($transaction->tujuan); ?></td>
                        <td><?php echo e($transaction->account_id); ?></td>
                        <td><?php echo e($transaction->created_at); ?></td>
                        <td><?php echo e($transaction->updated_at); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a href="<?php echo e(url('/')); ?>" class="btn btn-danger mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uas-m-2020110037\resources\views/transactions/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Form Tambah Transaksi</h1>

            <form action="<?php echo e(route('transactions.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="account_id" class="form-label">Pilih Akun</label>
                    <select class="form-select" id="account_id" name="account_id" required>
                        <option value="" selected disabled>Pilih Akun</option>
                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($account->id); ?>"><?php echo e($account->id); ?> - <?php echo e($account->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="number" class="form-control" id="nominal" name="nominal" required>
                </div>

                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <select class="form-select" id="tujuan" name="tujuan" required>
                        <option value="" selected disabled>Pilih Tujuan</option>
                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($account->nama); ?>"><?php echo e($account->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" required>
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="Pemindahan Dana">Pemindahan Dana</option>
                        <option value="Investasi">Investasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <a href="<?php echo e(url('/transactions')); ?>" class="btn btn-danger ms-2"><i class="fas fa-times"></i> Kembali</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Tambah Transaksi</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uas-m-2020110037\resources\views/transactions/create.blade.php ENDPATH**/ ?>
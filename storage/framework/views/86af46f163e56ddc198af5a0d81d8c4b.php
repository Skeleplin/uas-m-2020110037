<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Form Edit Akun</h1>

                <form action="<?php echo e(route('accounts.update', ['account' => $account->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Akun</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($account->nama); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Akun</label>
                        <select class="form-select" id="jenis" name="jenis" required>
                            <option value="Personal" <?php echo e($account->jenis === 'Personal' ? 'selected' : ''); ?>>Personal</option>
                            <option value="Bisnis" <?php echo e($account->jenis === 'Bisnis' ? 'selected' : ''); ?>>Bisnis</option>
                        </select>
                    </div>
                    <a href="<?php echo e(url('/accounts')); ?>" class="btn btn-danger ms-2"><i class="fas fa-times"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Update Akun</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uas-m-2020110037\resources\views/accounts/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><i class="fas fa-user"></i> Data Akun</h1>
            <hr>
            <a href="<?php echo e(route('accounts.create')); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Akun</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($account->id); ?></td>
                            <td><?php echo e($account->nama); ?></td>
                            <td><?php echo e($account->jenis); ?></td>
                            <td><?php echo e($account->created_at); ?></td>
                            <td><?php echo e($account->updated_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('accounts.edit', ['account' => $account->id])); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('accounts.destroy', ['account' => $account->id])); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a href="<?php echo e(url('/')); ?>" class="btn btn-danger mb-3"><i class="fas fa-times"></i> Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uas-m-2020110037\resources\views/accounts/index.blade.php ENDPATH**/ ?>
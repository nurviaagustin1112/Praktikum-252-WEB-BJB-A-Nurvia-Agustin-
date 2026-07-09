<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-primary" role="alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <h3>Kategori</h3>
    </div>
    <div class="col-md-6">
        <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-success btn-sm float-end">
            <i class="fa fa-plus-circle"></i> Tambah
        </a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th width="200">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($kategori->nama_kategori); ?></td>
                    <td><?php echo e($kategori->keterangan); ?></td>
                    <td>
                        <?php echo $__env->make('kategori.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>
</div>

<form action="" method="POST" id="deleteForm">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <input type="submit" style="display:none">
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bangsukri\resources\views/kategori/index.blade.php ENDPATH**/ ?>
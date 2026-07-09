<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
<div class="row">
    <div class="col-md-6">
        <h3>Pemasok</h3>
    </div>
    <div class="col-md-6">
        <a href="<?php echo e(route('pemasok.create')); ?>" class="btn btn-success btn-sm float-end">
            <i class="fa fa-plus-circle"></i> Tambah
        </a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Nama Pemasok</th>
                    <th scope="col">Nama Kontak</th>
                    <th scope="col">Nomor Hp</th>
                    <th scope="col">Alamat</th>
                    <td style="width:200px">Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pemasoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemasok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($pemasok['nama_pemasok']); ?></td>
                        <td><?php echo e($pemasok['nama_kontak']); ?></td>
                        <td><?php echo e($pemasok['nomor_hp']); ?></td>
                        <td><?php echo e($pemasok['alamat']); ?></td>
                        <td>
                            <?php echo $__env->make('pemasok.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

            </tbody>
        </table>
    </div>
</div>
<form action="" method="POST" id="deleteForm">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <input type="submit" value="Hapus" style="display:none">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bangsukri\resources\views/pemasok/index.blade.php ENDPATH**/ ?>
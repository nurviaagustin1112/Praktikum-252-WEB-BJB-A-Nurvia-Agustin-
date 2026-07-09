<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Data Pemasok</h3>
    </div>
    <div class="col-md-6">
        <a href="<?php echo e(route('pemasok.index')); ?>" class="btn btn-primary btn-sm float-end">
            <i class="fa fa-arrow-circle-left"></i> Kembali
        </a>
    </div>
</div>
<div class="card px-3 py-3">
    <form action="<?php echo e(route('pemasok.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="mb-3">
            <label for="nama_pemasok">Nama Pemasok</label>
            <input type="text"
                class="form-control <?php $__errorArgs = ['nama_pemasok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="nama_pemasok"
                id="nama_pemasok"
                value="<?php echo e(old('nama_pemasok')); ?>" required>
            <?php $__errorArgs = ['nama_pemasok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="nama_kontak">Nama Kontak</label>
            <input type="text"
                class="form-control <?php $__errorArgs = ['nama_kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="nama_kontak"
                id="nama_kontak"
                value="<?php echo e(old('nama_kontak')); ?>" required>
            <?php $__errorArgs = ['nama_kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="nomor_hp">Nomor Hp</label>
            <input type="text"
                class="form-control <?php $__errorArgs = ['nomor_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="nomor_hp"
                id="nomor_hp"
                value="<?php echo e(old('nomor_hp')); ?>" required>
            <?php $__errorArgs = ['nomor_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text"
                class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="alamat"
                id="alamat"
                value="<?php echo e(old('alamat')); ?>" required>
            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="col mb-3">
            <button class="btn btn-success" type="submit">
                <i class="fas fa-save"></i>
                Simpan
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bangsukri\resources\views/pemasok/create.blade.php ENDPATH**/ ?>
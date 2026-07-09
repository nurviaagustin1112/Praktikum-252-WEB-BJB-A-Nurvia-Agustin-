<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Data Barang Masuk</h3>
    </div>
    <div class="col-md-6">
        <a href="<?php echo e(route('barang_masuk.index')); ?>" class="btn btn-primary btn-sm float-end">
            <i class="fa fa-arrow-circle-left"></i> Kembali
        </a>
    </div>
</div>
<div class="card px-3 py-3">
    <form action="<?php echo e(route('barang_masuk.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="mb-3">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggal" id="tanggal" value="<?php echo e(old('tanggal')); ?>" required>
        <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="mb-3">
            <label for="sumber_dana">Sumber Dana</label>
            <select class="form-control <?php $__errorArgs = ['sumber_dana'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="sumber_dana" id="sumber_dana">
                <option value="">- Pilih Sumber Dana -</option>
                <option value="Hibah" <?php echo e(old('sumber_dana') == "Hibah" ? 'selected' : ''); ?>>Hibah</option>
                <option value="Penganggaran" <?php echo e(old('sumber_dana') == "Penganggaran" ? 'selected' : ''); ?>>Penganggaran</option>
            </select>
            <?php $__errorArgs = ['sumber_dana'];
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
            <label for="pemasok_id">Pemasok</label>
            <select class="form-control <?php $__errorArgs = ['pemasok_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pemasok_id" id="pemasok_id">
                <option value="">Pilih Pemasok</option>
                <?php $__currentLoopData = $pemasoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemasok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($pemasok->id); ?>" <?php if(old('pemasok_id') == $pemasok->id): echo 'selected'; endif; ?>><?php echo e($pemasok->nama_pemasok); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </option>
            </select>
            <?php $__errorArgs = ['pemasok_id'];
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
            <label for="karyawan_id">Karyawan</label>
            <select class="form-control <?php $__errorArgs = ['karyawan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="karyawan_id" id="karyawan_id">
            <option value="">Pilih Karyawan</option>
            <?php $__currentLoopData = $karyawans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $karyawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($karyawan->id); ?>" <?php if(old('karyawan_id') == $karyawan->id): echo 'selected'; endif; ?>><?php echo e($karyawan->nama_karyawan); ?>

                </option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['karyawan_id'];
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

<?php echo $__env->make('template.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bangsukri\resources\views/barang_masuk/create.blade.php ENDPATH**/ ?>
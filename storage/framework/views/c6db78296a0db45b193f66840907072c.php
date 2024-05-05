<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Tambah Barang</h1>
    <hr />
    <form action="<?php echo e(route('barangs.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
        </div>
        <div class="col">
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
        </div>
    </div>
    <div class="col">
        <input type="text" name="harga_barang" class="form-control" placeholder="Harga Barang">
    </div>
    <div class="col">
        <input type="text" name="deskripsi_barang" class="form-control" placeholder="Deskripsi Barang">
    </div>
</div>
<div class="col-md-4">
    <label for="satuan_barang" class="form-label">Satuan</label>
    <select id="satuan_barang" name="satuan_barang" class="form-select" required>
        <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($s->id); ?>" <?php echo e(old('s') == $s->id ? 'selected' : ''); ?>>
                <?php echo e($s->kode_satuan . ' - ' . $s->nama_satuan); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
          </div>
</div>
</div>
<div class="row">
    <div class="d-grid">
        <button class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/tabelBarang/create.blade.php ENDPATH**/ ?>
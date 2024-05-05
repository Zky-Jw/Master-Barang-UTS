<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Edit Barang</h1>
    <hr />
    <form action="<?php echo e(route('barangs.update', $barang->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    <div class="row mb-3">
        <div class="col">
            <input value="<?php echo e($barang->kode_barang); ?>" type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
        </div>
        <div class="col">
            <input value="<?php echo e($barang->nama_barang); ?>" type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
        </div>
    </div>
    <div class="col">
        <input value="<?php echo e($barang->harga_barang); ?>" type="text" name="harga_barang" class="form-control" placeholder="Harga Barang">
    </div>
    <div class="col">
        <input value="<?php echo e($barang->deskripsi_barang); ?>" type="text" name="deskripsi_barang" class="form-control" placeholder="Deskripsi Barang">
    </div>
    <div class="col-md-4">
        <label for="satuan_barang" class="form-label"></label>
        <select class="form-select" name="satuan_barang" id="satuan_barang" required>
            <?php
                $selected = ''; if ($errors->any()) { $selected = old('satuan'); }
                else { $selected = $barang->satuan_barang_id; }
            ?>
            <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($s->id); ?>" <?php echo e($selected == $s->id ? 'selected' : ''); ?>>
                    <?php echo e($s->kode_satuan . ' - ' . $s->nama_satuan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
          </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/tabelBarang/edit.blade.php ENDPATH**/ ?>
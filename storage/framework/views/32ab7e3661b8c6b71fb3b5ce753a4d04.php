<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Detail Barang</h1>
    <hr />
    <div class="row mb-3">
        <div class="row mb-3">
            <div class="col">
                <input value="<?php echo e($barang->kode_barang); ?>" type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" readonly>
            </div>
            <div class="col">
                <input value="<?php echo e($barang->nama_barang); ?>" type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" readonly>
            </div>
        </div>
        <div class="col">
            <input value="<?php echo e($barang->harga_barang); ?>" type="text" name="harga_barang" class="form-control" placeholder="Harga Barang" readonly>
        </div>
        <div class="col-md-4">
            <label for="satuan_barang" class="form-label">Satuan</label>
            <input type="text" name="satuan_barang" value="<?php echo e($barang->satuan->kode_satuan . ' - ' . $barang->satuan->nama_satuan); ?>"  class="form-control" id="satuan_barang" readonly>
          </div>
        <div class="col">
            <input value="<?php echo e($barang->deskripsi_barang); ?>" type="text" name="deskripsi_barang" class="form-control" placeholder="Deskripsi Barang" readonly>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/tabelBarang/detail.blade.php ENDPATH**/ ?>
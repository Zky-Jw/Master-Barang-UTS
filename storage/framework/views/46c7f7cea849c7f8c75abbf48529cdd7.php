<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('barangs.create')); ?>" class="btn btn-primary">tambah</a>
<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Satuan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="align-middle"><?php echo e($barangs->kode_barang); ?></td>
            <td class="align-middle"><?php echo e($barangs->nama_barang); ?></td>
            <td class="align-middle"><?php echo e($barangs->harga_barang); ?></td>
            <td class="align-middle"><?php echo e($barangs->deskripsi_barang); ?></td>
            <td class="align-middle"><?php echo e($barangs->satuan->kode_satuan); ?></td>
            <td>
                <a href="<?php echo e(route('barangs.edit', $barangs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('barangs.show', $barangs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                <form action="<?php echo e(route('barangs.destroy', $barangs->id)); ?>" method="POST" type="button" class="btn border-0 p-0" onsubmit="return confirm('Yakin Hapus Data ?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger border-0">Hapus</button>
                </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterBarangUts\resources\views/tabelBarang/index.blade.php ENDPATH**/ ?>
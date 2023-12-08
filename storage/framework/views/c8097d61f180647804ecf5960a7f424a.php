<div>
    <a href="<?php echo e(route('keranjang')); ?>" class="btn btn-primary">Keranjang</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Paket</th>
            <th scope="col">Jenis</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($index+1); ?></th>
            <td><?php echo e($item->nama_paket); ?></td>
            <td><?php echo e($item->jenis); ?></td>
            <td><?php echo e($item->harga); ?></td>
            <td>
                <button wire:click="add_cart(<?php echo e($item->id); ?>)" class="badge bg-danger">Tambah keranjang</button>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
      </table>
</div>
<?php /**PATH C:\Users\Wafi\Desktop\pplg\learn-livewire\resources\views/livewire/kasir/data.blade.php ENDPATH**/ ?>
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pegawai</th>
            <th scope="col">Paket</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($index+1); ?></th>
            <td><?php echo e($item->nama); ?></td>
            <td><?php echo e($item->alamat); ?></td>
            <td><a href="<?php echo e(route('user.show', $item->id)); ?>" class="btn btn-warning">User</a></td>
            <td><a href="<?php echo e(route('paket_outlet.show', $item->id)); ?>" class="btn btn-warning">Paket</a></td>
            <td>
                <a href="<?php echo e(route('outlet.edit', $item->id)); ?>" class="badge bg-warning">Edit</a>
                <button wire:click="delete(<?php echo e($item->id); ?>)" class="badge bg-danger">Delete</button>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
      </table>
</div>
<?php /**PATH C:\Users\Wafi\Desktop\pplg\learn-livewire\resources\views/livewire/outlet/outlet-table.blade.php ENDPATH**/ ?>
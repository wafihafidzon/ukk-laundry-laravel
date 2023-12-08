<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($index+1); ?></th>
            <td><?php echo e($item->nama); ?></td>
            <td><?php echo e($item->username); ?></td>
            <td>
                <a href="<?php echo e(route('user.edit', $item->id)); ?>" class="badge bg-warning">Edit</a>
                <button wire:click="delete(<?php echo e($item->id); ?>)" class="badge bg-danger">Delete</button>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
      </table>
</div>
<?php /**PATH C:\Users\Wafi\Desktop\pplg\learn-livewire\resources\views/livewire/pegawai/pegawai-table.blade.php ENDPATH**/ ?>
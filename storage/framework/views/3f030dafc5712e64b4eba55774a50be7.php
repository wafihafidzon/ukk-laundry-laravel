<div>
    <!--[if BLOCK]><![endif]--><?php if($items->count() == 0): ?>
        <h2>Data Masih Kosong... <a href="<?php echo e(route('dashboard.show')); ?>" class="btn btn-primary">Dashboard</a></h2>
    <?php else: ?>
        <button class="btn btn-primary" wire:click="checkout">Checkout</button>
        <h1>Keranjang</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($index + 1); ?></th>
                        <td><?php echo e($item->nama_paket); ?></td>
                        <td><?php echo e($item->jenis); ?></td>
                        <td>Rp.<?php echo e(number_format($item->harga, 2, ',', '.')); ?></td>
                        <td class="text-center">
                            <ul class="pagination" style="width: 10px !important; margin: 0; ">
                                <li class="page-item">
                                    <a wire:click="updateQty(<?php echo e($item->id_keranjang); ?>, 'decrement')" class="page-link"
                                        href="#">-</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#"><?php echo e($item->qty); ?></a></li>
                                <li class="page-item">
                                    <a wire:click="updateQty(<?php echo e($item->id_keranjang); ?>, 'increment')" class="page-link"
                                        href="#">+</a>
                                </li>
                            </ul>
                        </td>
                        <td>Rp.<?php echo e(number_format($item->qty * $item->harga, 2, ',', '.')); ?></td>
                        <td>

                            <button wire:click="delete(<?php echo e($item->id_keranjang); ?>)"
                                class="badge bg-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\Wafi\Desktop\pplg\learn-livewire\resources\views/livewire/kasir/keranjang.blade.php ENDPATH**/ ?>
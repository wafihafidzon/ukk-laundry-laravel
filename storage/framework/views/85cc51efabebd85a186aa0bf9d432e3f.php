

<?php $__env->startPush('style'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Test</h1>
        <div class="col-6">
            <a href="<?php echo e(route('outlet.store')); ?>" class="btn btn-primary">Tambah Outlet</a></a>
        </div>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('outlet.edit', ['user' => $user]);

$__html = app('livewire')->mount($__name, $__params, 'wkeY5HC', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Wafi\Desktop\pplg\learn-livewire\resources\views/outlet/edit.blade.php ENDPATH**/ ?>
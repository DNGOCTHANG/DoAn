

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Giỏ hàng</h1>
    <?php if($cart && $cart->items->count()): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->product->name); ?></td>
                        <td>
                            <form action="<?php echo e(route('cart.update', $item)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="number" name="quantity" value="<?php echo e($item->quantity); ?>" min="1">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </td>
                        <td><?php echo e($item->product->price); ?> VND</td>
                        <td>
                            <form action="<?php echo e(route('cart.destroy', $item)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Giỏ hàng của bạn đang trống.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\DoAn\example-app\resources\views/cart/index.blade.php ENDPATH**/ ?>
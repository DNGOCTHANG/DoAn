<?php $__env->startSection('content'); ?>

<head>
    <link href="<?php echo e(asset('css/cart.css')); ?>" rel="stylesheet">
</head>
<main>
    <div class="container">
        <h1>Giỏ hàng</h1>
        <form action="#">
            <table>
                <thead>
                    <tr>
                        <th>Chọn tất cả</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Số tiền</th>
                        <th>Hình ảnh</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="cartBody">
                    <?php if($cart && $cart->items->count() > 0): ?>
                        <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td><?php echo e($item->name ? $item->name : 'Sản phẩm không tồn tại'); ?></td>
                                <td><?php echo e($item->price ? $item->price : 'N/A'); ?></td>
                                <td><?php echo e($item->quantity); ?></td>
                                <td><?php echo e($item->price ? $item->price * $item->quantity : 'N/A'); ?></td>
                                <!-- <td>
                                            <?php if($item->product): ?>
                                                <img src="<?php echo e($item->product->image); ?>" alt="<?php echo e($item->product->name); ?>"
                                                    style="width: 50px; height: 50px;">
                                            <?php else: ?>
                                                Hình ảnh mặc định
                                            <?php endif; ?>
                                        </td> -->
                                <td>
                                    <img src="<?php echo e(asset('images/' . $item->image)); ?>" alt="<?php echo e($item->image); ?>"
                                        style="width: 150px; height: 150px; margin-right: 20px; border: 5px rgb(0, 249, 54) double">
                                </td>
                                <td>
                                    <form action="<?php echo e(route('cart.destroy', ['item' => $item->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button onclick="return confirm('Bạn có muốn xóa sản phẩm không?')" type="submit"
                                            class="btn btn-sm btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">Giỏ hàng trống</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <?php
                        $totalPayment = 0;
                        foreach ($cart->items as $item) {
                            $totalPayment += $item->product ? $item->product->price * $item->quantity : 0;
                        }
                    ?>
                    <tr>
                        <td colspan="5">Tổng thanh toán (<?php echo e($cart->items->count()); ?> sản phẩm):</td>
                        <td>$<?php echo e($totalPayment); ?></td>
                    </tr>
                </tfoot>
            </table>
            <button class="btn-mua" type="submit">Mua hàng</button>
        </form>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navs.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\DoAn\example-app\resources\views/cart/cart.blade.php ENDPATH**/ ?>
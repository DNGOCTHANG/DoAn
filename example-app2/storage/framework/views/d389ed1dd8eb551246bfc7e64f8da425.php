<?php $__env->startSection('content'); ?>

    <head>
        <link href="<?php echo e(asset('css/cart.css')); ?>" rel="stylesheet">
    </head>
    <main>

        <body>
            <div class="container">
                <h1>Giỏ hàng</h1>
                <form action="#">
                    <table>
                        <thead>
                            <tr>
                                <th>chọn tất cả</th>
                               
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Số tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cartBody">
                          
                                <?php if(isset($cart) && count($cart) > 0): ?>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        
                                        <td><?php echo e($item['product_name']); ?></td>
                                        <td><?php echo e($item['price']); ?></td>
                                        <td><?php echo e($item['quantity']); ?></td>
                                        <td><?php echo e($item['price'] * $item['quantity']); ?></td>
                                        <td id="deleteForm">
                                            <a onclick="confirmDelete()" href="<?php echo e(route('deleteCart', ['id' => $item['product_id']])); ?>" class="btn btn-sm btn-danger" method="GET">Delete</a>
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
                                foreach ($cart as $item) {
                                    $totalPayment += $item['price'] * $item['quantity'];
                                }
                            ?>
                            <tr>
                                <td colspan="5">Tổng thanh toán (<?php echo e(count($cart)); ?> sản phẩm):</td>
                                <td>$<?php echo e($totalPayment); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <button class="btn-mua" type="submit">Mua hàng</button>
                </form>
            </div>
        </body>
    </main>
    <script>
        function confirmDelete() {
            if (confirm("bạn có muốn xóa sản phẩm không?")) {
                // Nếu người dùng chấp nhận xóa, gửi yêu cầu xóa sản phẩm
                document.getElementById("deleteForm").submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navs.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\DoAn\example-app\resources\views/shopping_cart/shopping_cart.blade.php ENDPATH**/ ?>
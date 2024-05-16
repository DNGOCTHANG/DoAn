<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo e(asset('css/nav.css')); ?>" rel="stylesheet">

</head>

<body>
    <!-- header -->
    <header>
        <div class="nav-top">
            <div class="img-nav">
                <img class="icon-img" src="<?php echo e(asset('icon/clipart2204641.png')); ?>" alt="#" />
            </div>
            <div class="content-navs">
                <form action="#">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button class="btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"
                            style="color: white"> Tìm kiếm</i></button>
                </form>
            </div>
            <div class="btn-go">
                <a id="carts" href="<?php echo e(route('cart')); ?>">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    Giỏ Hàng
                </a>
                <a id="carts" href="<?php echo e(route('cartfovorite')); ?>">
                    <i class="fa fa fa-heart" aria-hidden="true"></i>
                    Yêu thích
                </a>
                <a id="carts" href="<?php echo e(route('user.list')); ?>">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    tài khoản
                    </>
            </div>





        </div>

        
        <div class="content-nav">

            <ul>
                <li><a href="<?php echo e(route('listHome')); ?>">Trang Chủ</a></li><s></s>
                <div class="dropdown">
                    <li><a href="#">thể loại</a></li>
                    <div class="dropdown-content">
                        <a href="#">Trinh thám</a>
                        <a href="#">Hành động</a>
                        <a href="#">Ngôn tình</a>
                    </div>
                </div>
                <li><a href="#">Liên Hệ</a></li>
                <li><a href="#">Giới thiệu</a></li>


            </ul>
            


            <!-- The Modal -->
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('signout')); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </li>
            <?php endif; ?>




        </div>

    </header>

    <?php echo $__env->yieldContent('content'); ?>

</body>
<footer>
    <p>Copyright © Books World</p>
</footer>

</html><?php /**PATH C:\Users\ASUS\Downloads\DoAn\example-app\resources\views/navs/nav.blade.php ENDPATH**/ ?>
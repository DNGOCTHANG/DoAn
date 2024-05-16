<?php $__env->startSection('content'); ?>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        main {

            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;

        }



        .book {

            width: 30%;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;

        }

        .book img {
            width: 100%;
            height: auto;
        }

        .book h2 {
            padding: 10px;
            background-color: #ffffff00;
            color: #000000;
            margin: 0;
        }

        .book p {
            display: inline;
            padding: 10px;
            background-color: #f2f2f200;
            color: #333;
            margin: 0;
            font-weight: bold;

        }

        #Home-cart {
            font-size: 15px;
            color: #000000;
            background: #e6e6e600;
            border: 1px solid transparent;
            border-radius: 10px;
            outline: none;
            margin-left: 1rem;
            padding: 12px;
            cursor: pointer;

        }

        form {
            display: inline;
        }

        footer {
            background-color: #176988;
            padding: 20px;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;

        }

        .login-form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button {
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        button:hover {
            background-color: #23c483;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
            transform: translateY(-7px);
        }

        button:active {
            transform: translateY(-1px);
        }


        .rating:not(:checked)>input {
            position: relative;
            appearance: none;
        }

        .rating {
            float: left;
        }

        .rating:not(:checked)>label {
            float: right;
            cursor: pointer;
            font-size: 30px;
            color: #666;
            margin-left: 5px;
            padding: ;
        }

        .rating:not(:checked)>label:before {
            content: '★';
        }

        .rating>input:checked+label:hover,
        .rating>input:checked+label:hover~label,
        .rating>input:checked~label:hover,
        .rating>input:checked~label:hover~label,
        */ .rating>label:hover~input:checked~label {
            color: #e58e09;
        }

        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #ff9e0b;
        }

        .rating>input:checked~label {
            color: #ffa723;
        }

        /* Đặt chiều rộng và chiều cao cho textarea */
        #comment {
            width: 100%;
            /* Chiều rộng 100% của phần tử cha */
            height: 100px;
            /* Đặt chiều cao */
            resize: vertical;
            /* Cho phép thay đổi kích thước theo chiều dọc */
        }

        /* Đặt nút gửi ở phía bên phải bằng cách sử dụng float */
        button[type="submit"] {
            float: right;
            margin-top: 10px;
            /* Khoảng cách giữa textarea và nút gửi */
        }

        /* Hoặc sử dụng flexbox để đặt nút gửi ở phía bên phải */
        .form-group {
            display: flex;
            justify-content: flex-end;
            /* Đặt phần tử con ở phía bên phải */
        }

        button[type="submit"] {
            margin-left: 10px;
            /* Khoảng cách giữa các phần tử con */
        }
    </style>
</head>
<main>

    <body>
        <main class="login-form">
            <h1>thông tin chi tiết</h1>
            <div class="container">
                <div style="position: absolute;">
                    <img src="<?php echo e(asset('images/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>"
                        style="width: 300px; height: 300px; margin-right: 20px; border: 5px rgb(0, 249, 54) double">
                    <div style="float: right;">
                        <h3><?php echo e($product->product_name); ?></h3>
                        <p>description: <?php echo e($product->description); ?></p>
                        <p>price: <?php echo e($product->price); ?></p>
                        <p>category: <?php echo e($product->category); ?></p>
                        <form action="<?php echo e(route('addToCart', ['id' => $product->product_id])); ?>" method="GET">
                            <button id="Home-cart">
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </button>
                        </form>
                        <form action="#">
                            <button id="Home-cart">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>
                        </form>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <!-- Form đánh giá -->
                    <form action="<?php echo e(route('submitReview')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="rating">Đánh giá:</label><br>
                            <div class="rating">
                                <input value="5" name="rate" id="star5" type="radio">
                                <label title="text" for="star5"></label>
                                <input value="4" name="rate" id="star4" type="radio">
                                <label title="text" for="star4"></label>
                                <input value="3" name="rate" id="star3" type="radio" checked="">
                                <label title="text" for="star3"></label>
                                <input value="2" name="rate" id="star2" type="radio">
                                <label title="text" for="star2"></label>
                                <input value="1" name="rate" id="star1" type="radio">
                                <label title="text" for="star1"></label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="comment">Bình luận:</label><br>
                            <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit">Gửi đánh giá</button>
                    </form>
                </div>
            </div>
        </main>
    </body>

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('navs.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\DoAn\example-app\resources\views/detailProduct.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        }

        li {
            list-style: none;
        }

        /* header */
        nav {
            padding: 15px;
            width: 100%;
            display: flex;
            background: #0daade;
        }

        nav .content-nav {
            display: flex;
            line-height: 2rem;
            flex-direction: row;
            justify-content: flex-end;
            width: 60%;
        }

        nav .content-nav ul {
            display: flex;
        }

        nav .content-nav ul li a {
            text-decoration: none;
            color: #43433e;
            text-transform: uppercase;
            padding: 0 15px;
            font-weight: 800;
        }

        nav .content-nav ul li a:hover {
            color: #fff;
        }

        .content-nav form {
            position: relative;
        }

        .content-nav form input {
            border: none;
            background: #fff;
            padding: 7px;
            outline: none;
            border-radius: 12px;
        }

        .content-nav form button {
            padding: 5px;
            border-radius: 12px;
            position: absolute;
            right: 0;
            top: 2px;
            border: none;
            outline: none;
            background: #fff;
        }

        /* modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            margin: 0 auto;
            width: 50%;
            position: relative;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;

        }

        .modal-body {
            padding: 1rem;
        }

        .modal-footer {
            display: flex;
            border-top: 1px solid #aaaaaa;
            padding: 1rem;
            flex-direction: row;
            justify-content: flex-end;
            border-top: 1px solid #aaaaaa;
            padding: 1rem;
        }

        .modal-footer>:not(:first-child) {
            margin-left: .25rem;
        }

        .btn {
            cursor: pointer;
            outline: none;
            font-weight: 400;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            border: 1px solid transparent;
            padding: .5rem 1rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: all .2s ease-in-out;
        }

        .btn-secondary {
            color: #292b2c;
            background-color: #fff;
            border-color: #ccc;
        }

        .btn-primary {
            color: #fff;
            background-color: #0275d8;
            border-color: #0275d8;
        }

        .modal-header {
            align-items: center;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #aaaaaa;
            padding: 1rem;
        }

        h5.modal-title {
            font-size: 1.5rem;
        }

        .close {
            color: #aaaaaa;
            font-size: 28px;
            font-weight: bold;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        #cart {
            font-size: 15px;
            color: #fff;
            background: #c7b200;
            border: 1px solid transparent;
            border-radius: 10px;
            outline: none;
            margin-left: 1rem;
            padding: 12px;
            cursor: pointer;
        }

        #cart:hover {
            border-color: #fff;
        }



        .nav-item {
            margin-right: 15px;
            position: absolute;
            right: 0;
        }

        .nav-item:last-child {
            margin-right: 0;

        }

        .nav-item a {
            color: #43433e;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 800;
            padding: 0 15px;

        }

        .nav-item a:hover {
            color: #fff;
        }


        footer {
            background-color: #0daade;
            padding: 20px;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <nav>
            <div class="img-nav">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Thể Loại</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                    <li><a href="#">Giới Thiệu</a></li>
                </ul>
                <form>
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <!-- The Modal -->
            {{-- <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button> --}}
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
            @endguest




        </nav>

    </header>

    @yield('content')

    <footer>
        <p>Copyright © Books World</p>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    
</head>

<body>
    <!-- header -->
    <header>
        <nav class="nav-top">
            <div class="img-nav">
                <img class="icon-img" src="{{ asset('icon/clipart2204641.png') }}" alt="#" />
            </div>
            <div class="content-nav">
                <form action="">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>

                <a id="cart" href="{{ route('shopping-Cart') }}" >
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    Giỏ Hàng
                </a>
                <a id="cart" href="#">
                    <i class="fa fa fa-heart" aria-hidden="true"></i>
                    Yêu thích
                </a>
                <a id="cart" href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    tài khoản
                </a>
                

                </div>

            </nav>
            <nav>
                {{-- <div class="img-nav">
                <img class="icon-img" src="{{ asset('icon/clipart2204641.png') }}" alt="#" />
            </div> --}}
                <div class="content-nav">

                    <ul>
                        <li><a href="{{ route('listHome') }}">Trang Chủ</a></li><s></s>
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
                    {{-- <form>
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form> --}}
                </div>

                <!-- The Modal -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
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

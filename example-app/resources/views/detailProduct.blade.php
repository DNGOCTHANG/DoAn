@extends('navs.nav')

@section('content')

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






            .books img {
                width: 400px;
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

            h1 {
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

            .conten {
                display: inline;
            }
        </style>
    </head>


    <body>
        <main class="conten">
           
            <div class="container">

                <div class="books row" style="position: relative;">
                    @csrf
                    <div class="img-book col-md-4">

                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">

                    </div>
                    <div class="book-detail-body col-md-8">
                        <h3> {{ $product->product_name }}</h3>
                        <p>Giá: {{ $product->price }}</p>
                        <p>Thể loại: {{ $product->category }}</p>
                        <p>Tác giả: </p>
                        <p>Năm xuất bản: </p>
                        <p>Mô tả: {{ $product->description }}</p>
                        <form action="{{ route('addToCart', ['id' => $product->product_id]) }}" method="GET">
                            <button id="Home-cart">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </button>
                        </form>
                        <form action="{{ route('addfavorite', ['id' => $product->product_id]) }}">
                            <button id="Home-cart">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>
                        </form>
                        <button class="btn-buy">Mua Ngay</button>

                    </div>


                </div>
                <div class=" border border-primary p-2" style="margin: 50px">
                    <p>bình luận</p>
                    <div class="bodet-commen" style=>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quia inventore. Doloremque
                            corrupti vero accusantium asperiores itaque perferendis odit similique, tempore autem, accusamus
                            nesciunt est rerum explicabo, ea eveniet illo.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quia inventore. Doloremque
                            corrupti vero accusantium asperiores itaque perferendis odit similique, tempore autem, accusamus
                            nesciunt est rerum explicabo, ea eveniet illo.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quia inventore. Doloremque
                            corrupti vero accusantium asperiores itaque perferendis odit similique, tempore autem, accusamus
                            nesciunt est rerum explicabo, ea eveniet illo.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quia inventore. Doloremque
                            corrupti vero accusantium asperiores itaque perferendis odit similique, tempore autem, accusamus
                            nesciunt est rerum explicabo, ea eveniet illo.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quia inventore. Doloremque
                            corrupti vero accusantium asperiores itaque perferendis odit similique, tempore autem, accusamus
                            nesciunt est rerum explicabo, ea eveniet illo.</p>
                    </div>
                </div>

            </div>


        </main>


    </body>
@endsection

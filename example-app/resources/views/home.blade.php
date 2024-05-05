@extends('navs.nav')

@section('content')

    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            main {
                display: flex;
                flex-wrap: wrap;
                padding: 20px;
                justify-content: space-around;
            }

            .book {
                width: 300px;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                overflow: hidden;


            }

            .book img {
                width: 300px;
                height: 350px;

            }

            .book h5 {
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

            /* #Home-cart {
                font-size: 15px;
                color: #fff;
                background: #c7b30000;
                border: 1px solid transparent;
                border-radius: 10px;
                outline: none;
                margin-left: 1rem;
                padding: 12px;
                cursor: pointer;
                position: absolute;
                right: 0;
                margin-right: 15px;
                text-decoration: none;
            }
*/
           

            #Home-cart:hover {
                border-color: #fff;
            } 

            form {
                display: inline;
            }

            a {
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <main>
            @foreach ($products as $product)
                <div class="book">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
                    <a href="{{ route('Detail', ['id' => $product->product_id]) }}">
                        <h5>{{ $product->product_name }}</h5>
                    </a>
                    <p>{{ $product->price }} VND</p>
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
                </div>
            @endforeach
        </main>
    </body>
@endsection

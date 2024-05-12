@extends('navs.nav')

@section('content')

    <head>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <style>
            /* body {
                font-family: Arial, sans-serif;

            }

            .body {
                display: flex;
                padding: 20px 100px;
                flex-wrap: wrap;
                grid-column-start: auto;
                column-gap: 20px;
            }

           

            .book {
                width: 300px;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                overflow: hidden;
                justify-content: first baseline;

            }

            .book img {
                width: 300px;
                height: 350px;

            }

            .book h6 {
                padding: 10px;
                background-color: #ffffff00;
                color: #000000;
                margin: 0;
            }

            h6:hover {
                color: #23c483;
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




            #Home-cart:hover {
                border-color: #fff;
            }

            form {
                display: inline;
            }

            a {
                text-decoration: none;
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

            .center {
                display: flex;
                text-align: center;
                justify-content: center;
                padding: 10px;
            }

            .pag {
                background: none;
                display: flex;
                text-align: center;
                justify-content: center;
            }


            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
                border: 1px solid #ddd;
                margin: 0 4px;
            }

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
                border: 1px solid #4CAF50;
            }

            .pagination a:hover:not(.active) {
                background-color: #ddd;
            } */

            
        </style>
    </head>

    <body>
        <main>
            <div class="body">
                @foreach ($products as $product)
                    <div class="book">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
                        <a href="{{ route('Detail', ['id' => $product->product_id]) }}">
                            <h6>{{ $product->product_name }}</h6>
                        </a>
                        <div class="book-body" style="padding: 10px">
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

                    </div>
                @endforeach
            </div>

          
                {{ $products->links('pagination::bootstrap-4') }}
        
           
    </body>
    
@endsection

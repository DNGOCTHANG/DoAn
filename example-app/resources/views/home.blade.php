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
        </style>
    </head>
    <main>

        <body>
            {{-- <div class="book">
                <img src="{{ asset('images/1712835587_✰Zenitsu Agatsuma.jpg') }}" alt="Book 1">
                <h2>Book 1</h2>

                <p>$87</p>
                <button id="Home-cart">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </button>
                <button id="Home-cart">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </button>
                <form action="#" method="POST">
                    @csrf
                    <button type="submit" id="Home-cart">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    </button>
                </form>
                <form action="#" method="POST">
                    @csrf
                    <button type="submit" id="Home-cart">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>
                </form>
            </div> --}}
            @foreach ($products  as $product )
            <div class="book">
                <img src="{{ asset('images/'. $product ->image) }}" alt="{{ $product ->product_name }}">
                <h2>{{ $product ->product_name }}</h2>
                <p>{{ $product ->price }}</p>
                <button id="Home-cart">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </button>
                <button id="Home-cart">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </button>
            </div>
            @endforeach
           
            
           


    </main>
    </body>
@endsection

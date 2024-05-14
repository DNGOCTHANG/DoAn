@extends('navs.nav')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
       {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  --}}
    </head>

    <body>
        <!-- Carousel -->
        <div id="demo" class="container carousel slide pt-2 " data-bs-ride="carousel" style="width: 100%;">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/nen1.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/nen2.jpg') }}" alt="Chicago" class="d-block" style="width:100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/nen3.jpg') }}" alt="New York" class="d-block" style="width:100%; height: 500px;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
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

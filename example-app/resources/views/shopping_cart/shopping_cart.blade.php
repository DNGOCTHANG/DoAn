@extends('navs.nav')

@section('content')

    <head>
        <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
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
                          
                                @if (isset($cart) && count($cart) > 0)
                                    @foreach ($cart as $item)
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        
                                        <td>{{ $item['product_name']}}</td>
                                        <td>{{ $item['price'] }}</td>
                                        <td>{{ $item['quantity'] }}</td>
                                        <td>{{ $item['price'] * $item['quantity'] }}</td>
                                        <td id="deleteForm">
                                            <a onclick="confirmDelete()" href="{{ route('deleteCart', ['id' => $item['product_id']]) }}" class="btn btn-sm btn-danger" method="GET">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">Giỏ hàng trống</td>
                                    </tr>
                                @endif
                           
                        </tbody>
                        <tfoot>
                            @php
                                $totalPayment = 0;
                                foreach ($cart as $item) {
                                    $totalPayment += $item['price'] * $item['quantity'];
                                }
                            @endphp
                            <tr>
                                <td colspan="5">Tổng thanh toán ({{ count($cart) }} sản phẩm):</td>
                                <td>${{ $totalPayment }}</td>
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
@endsection

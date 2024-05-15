@extends('navs.nav')

@section('content')

<head>
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
</head>
<main>
    <div class="container">
        <h1>Giỏ hàng</h1>
        <form action="#">
            <table>
                <thead>
                    <tr>
                        <th>Chọn tất cả</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Số tiền</th>
                        <th>Hình ảnh</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="cartBody">
                    @if ($cart && $cart->items->count() > 0)
                        @foreach ($cart->items as $item)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{ $item->name ? $item->name : 'Sản phẩm không tồn tại' }}</td>
                                <td>{{ $item->price ? $item->price : 'N/A' }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price ? $item->price * $item->quantity : 'N/A' }}</td>
                                <!-- <td>
                                            @if($item->product)
                                                <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}"
                                                    style="width: 50px; height: 50px;">
                                            @else
                                                Hình ảnh mặc định
                                            @endif
                                        </td> -->
                                <td>
                                    <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->image }}"
                                        style="width: 150px; height: 150px; margin-right: 20px; border: 5px rgb(0, 249, 54) double">
                                </td>
                                <td>
                                    <form action="{{ route('cart.destroy', ['item' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Bạn có muốn xóa sản phẩm không?')" type="submit"
                                            class="btn btn-sm btn-danger">Xóa</button>
                                    </form>
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
                        foreach ($cart->items as $item) {
                            $totalPayment += $item->product ? $item->product->price * $item->quantity : 0;
                        }
                    @endphp
                    <tr>
                        <td colspan="5">Tổng thanh toán ({{ $cart->items->count() }} sản phẩm):</td>
                        <td>${{ $totalPayment }}</td>
                    </tr>
                </tfoot>
            </table>
            <button class="btn-mua" type="submit">Mua hàng</button>
        </form>
    </div>
</main>
@endsection
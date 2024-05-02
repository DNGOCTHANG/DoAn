@extends('navs.nav')

@section('content')

    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 2rem;
            }

            h1 {
                text-align: center;
                margin-bottom: 1rem;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 0.5rem;
                text-align: left;
                border-bottom: 1px solid #ccc;
            }

            th:first-child,
            td:first-child {
                padding-left: 0;
            }

            th:last-child,
            td:last-child {
                padding-right: 0;
            }

            button {
                display: block;
                width: 100%;
                padding: 0.5rem;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
                font-size: 1rem;
            }

            button:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <main>

        <body>
            <div class="container">
                <h1>Giỏ hàng</h1>
                <form action="#">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Chọn tất cả</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Số tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="checkbox"></td>
                                <td>The legend of sleepy</td>
                                <td>$87</td>
                                <td>1</td>
                                <td>$87</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">Tổng thanh toán (1 sản phẩm):</td>
                                <td>$87</td>
                            </tr>
                        </tfoot>
                    </table>
                    <button type="submit">Mua hàng</button>
                </form>
            </div>
        </body>
    </main>
@endsection

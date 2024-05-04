<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\shoppingcart;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Controllers extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function nav()
    {
        return view('nav');
    }

    // public function cart()
    // {
       
    //     $cart = shoppingcart::all();
    //     return view('shopping_cart.shopping_cart', ['cart' => $cart]);
       
    // }


    public function listProducts()
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }


    public function addToCart($id)
    {
        $products = Product::find($id);
        if (Cookie::get('cart')) {
            $cart = json_decode(Cookie::get('cart'), true);
        } else {
            $cart = [];
        }

        if (Auth::check()) {
            // Người dùng đã đăng nhập, thêm sản phẩm vào cơ sở dữ liệu
            $user = Auth::user();
            $cartItem = shoppingcart::where('user_id', $user->id)->where('product_id', $id)->first();

            if ($cartItem) {
                // Sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
                $cartItem->quantity += 1;
            } else {
                // Sản phẩm chưa tồn tại trong giỏ hàng, tạo mới
                $cartItem = new shoppingcart();
                $cartItem->user_id = $user->id;
                $cartItem->product_id = $id;
                $cartItem->product_name = $products->product_name;
                $cartItem->price = $products->price;
                $cartItem->quantity = 1;
                $cartItem->image = $products->image;

            }

            $cartItem->save();
        } else {
            // Thêm sản phẩm vào giỏ hàng
            // sử dụng cookie
            // if (isset($cart[$id])) {
            //     $cart[$id]['quantity'] += 1;
            // } else {
            //     $cart[$id] = [
            //         'product_id' => $products->id, // Thêm ID sản phẩm vào mảng
            //         'product_name' => $products->product_name,
            //         'price' => $products->price,
            //         'quantity' => 1,
            //         'image' => $products->image,
            //     ];
            // }

            return view('crud_user.login');
        }

        // Lưu giỏ hàng vào cookie
        $cookie = Cookie::make('cart', json_encode($cart), 60);

        // Trả về phản hồi thành công với cookie
         //return response(dd($cookie))->withCookie($cookie);

        return redirect()->back()->withCookie($cookie);
    }

    public function showCart(Request $request) {
        $cart = [];
    
        if (Auth::check()) {
            $cart = shoppingcart::where('user_id', $request->user()->id)->get()->toArray();
    
            // Chuyển đổi dữ liệu từ cơ sở dữ liệu để phù hợp với định dạng giống như cookie
            $cart = array_map(function($item) {
                return [
                    'product_id' => $item['product_id'],
                    'product_name' => $item['product_name'],
                    'image' => $item['image'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity']
                ];
            }, $cart);
        } else {
            // Nếu người dùng chưa đăng nhập, lấy dữ liệu từ cookie
            if (Cookie::get('cart')) {
                //sử dụng cookie
                //$cart = json_decode(Cookie::get('cart'), true);
                return view('crud_user.login');
            }
        }
    
        // Hiển thị trang giỏ hàng với dữ liệu từ cookie hoặc cơ sở dữ liệu
        return view('shopping_cart.shopping_cart', ['cart' => $cart]);
    }
    
   
}

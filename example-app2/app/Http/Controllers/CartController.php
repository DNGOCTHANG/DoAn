<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = $this->getCart();
        return view('cart.cart', compact('cart'));
    }

    public function store(Request $request)
    {
        $cart = $this->getCart();
        $product = Product::find($request->product_id);

        if ($product) {
            $cartItem = $cart->items()->where('product_id', $product->id)->first();

            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                $cart->items()->create([
                    'product_id' => $product->id,
                    'product_name' => $product->name, // Sử dụng tên sản phẩm từ Product
                    'quantity' => 1,
                    'price' => $product->price, // Giả sử trường price cũng là trường cần điền giá trị
                    // Bạn cũng cần điền giá trị cho các trường khác nếu cần thiết
                    'image' => $product->image
                ]);
            }
        }


        return redirect()->route('cart.index'); // Sửa thành 'cart.index'
    }

    public function update(Request $request, CartItem $item)
    {
        $item->quantity = $request->quantity;
        $item->save();

        return redirect()->route('cart.index'); // Sửa thành 'cart.index'
    }

    public function destroy(CartItem $item)
    {
        $item->delete();

        return redirect()->route('cart.index'); // Sửa thành 'cart.index'
    }
    protected function getCart()
    {
        $cartId = Session::get('cart_id');

        if ($cartId) {
            $cart = Cart::find($cartId);

            if ($cart) {
                return $cart;
            }
        }

        $cart = Cart::create();
        Session::put('cart_id', $cart->id);

        return $cart;
    }

}


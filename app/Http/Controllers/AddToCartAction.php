<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.12.2018
 * Time: 16:43
 */

namespace App\Http\Controllers;

use App\Item;
use App\Product;
use Darryldecode\Cart\Cart;
;
use Illuminate\Http\Request;

class AddToCartAction extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $item = Item::find($id);

      \Cart::add ([
            'id'         => $item->id,
            'name'       => $item->product->name,
            'price'      => $item->price,
            'quantity'   => 1,
            'attributes' => [
                'size'      => $item->size,
                'dimension' => $item->dimension,
                'image'     => $item->product->image,
            ]
        ]);

\Session::flash ('flash', $item->product->name . '-' . 'добавлен(а) в корзину');
return back();
//        $cart = session('cart');
//        if ($cart === null) {
//            $cart = [];
//            session()->put('cart', $cart);
//        }
//        session()->push('cart', $item);


//        return redirect()->route('cart');
    }
}
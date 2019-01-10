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
use Illuminate\Http\Request;

class AddToCartAction extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $item = Item::find($id);
        $cart = session('cart');
        if ($cart === null) {
            $cart = [];
            session()->put('cart', $cart);
        }
        session()->push('cart', $item);
        return redirect()->route('cart');
    }
}
<?php

namespace App\Http\Controllers;

use App\Product;
use App\Menu;
use Illuminate\Http\Request;

class SingleProductAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $products = Product::where('id', $id)->first();
        $items = $products->items();
        $menus = $products->menu();


//        $items = session()->get('cart');
//        $total = 0;
//        $totalitems = 0;
//        if ($items != null) {
//            foreach ($items as $item) {
//                $total += $item->price;
//                $totalitems++;
//            }
//        }
        return view('pages/single-product', ['menus' => $menus, 'product' => $products, 'items' => $items]);
    }
}

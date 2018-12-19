<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Product;
use Illuminate\Http\Request;

class ProductsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $key)
    {
        $menu=Menu::where ('key', $key)->first ();
        $products = $menu->products () -> paginate (6);

        $items = session()->get('cart');
        $total = 0;
        $totalitems=0;
        if ($items != null) {
            foreach ($items as $item) {
                $total += $item->price;
                $totalitems++;
            }
        }        return view('pages/shop-grid-3-column', ['products'=>$products, 'items'=> $items, 'total'=>$total, 'totalitems'=>$totalitems]);
    }
}

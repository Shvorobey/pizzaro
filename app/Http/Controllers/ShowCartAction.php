<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class ShowCartAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //\Cart::clear();
//        dd(\Cart::getContent());


        return view('pages.cart');

//        $items = session()->get('cart');
//        $total = 0;
//        $totalitems=0;
//
//        if ($items != null) {
//            foreach ($items as $item) {
//                $total += $item->price;
//                $totalitems++;
//            }
//        }
//     return view('pages.cart');
    }
}

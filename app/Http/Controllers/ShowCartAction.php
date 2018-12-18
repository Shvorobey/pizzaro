<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $items = session()->get('cart');
        $total = 0;
        $totalitems=0;

        foreach ($items as $item){
            $total += $item->price;
            $totalitems++;
        }
        return view('pages.cart', ['items'=> $items, 'total'=>$total, 'totalitems'=>$totalitems]);
    }
}

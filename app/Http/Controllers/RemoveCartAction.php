<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RemoveCartAction
{
    public function __invoke(Request $request)
    {
        \Cart::remove($request->route()->parameter('id'));
        return back();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11.01.2019
 * Time: 14:07
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UpdateCartAction extends Controller

{
    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
//dd($request->post());
        foreach ($request->post() ['items_'] as $id => $quantity) {
            \Cart::update($id, [
                'quantity' => [
                    'relative' => false,
                    'value' => $quantity
                ]
            ]);
        }
        return back();
    }
}
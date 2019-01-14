<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14.01.2019
 * Time: 13:50
 */

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required | max: 100 | string',
            'last_name'  => 'required | max: 100 | string',
            'email'      => 'e-mail',
            'phone'      => 'required | size=13',
            'address'    => 'required | max: 300',
            'notes'      => 'string| max: 500',
        ]);


        $order = new Order();
        $order -> first_name =  $request->post('billing_first_name');
        $order -> last_name  =  $request->post('billing_last_name');
        $order -> email      =  $request->post('billing_email');
        $order -> phone      =  $request->post('billing_phone');
        $order -> address    =  $request->post('billing_address_1');
        $order -> notes      =  $request->post('order_comments');
        $order -> cart       =  \Cart::getContent ()->toJson ();
        $order -> save();

        return redirect() -> route('order', ['id'=>$order->id]);
    }
}
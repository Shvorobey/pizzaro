<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ShowPostsByAutor extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $user=User::where ('id', $id)->first ();
        $posts = $user->posts ();

        $items = session()->get('cart');
        $total = 0;
        $totalitems=0;
        if ($items != null) {
            foreach ($items as $item) {
                $total += $item->price;
                $totalitems++;
            }
        }        return view('pages/posts-by-user', ['user'=> $user, 'posts'=>$posts, 'total'=>$total, 'totalitems'=>$totalitems]);
    }
}

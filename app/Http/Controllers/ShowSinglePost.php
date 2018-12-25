<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ShowSinglePost extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $posts=Post::where ('id', $id)->first ();
//        $posts = $user->posts ();

        $items = session()->get('cart');
        $total = 0;
        $totalitems=0;
        if ($items != null) {
            foreach ($items as $item) {
                $total += $item->price;
                $totalitems++;
            }
        }        return view('pages/single-post', ['posts'=>$posts, 'total'=>$total, 'totalitems'=>$totalitems]);
    }
}

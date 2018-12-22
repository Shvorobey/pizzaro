<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ShowPostsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts=Post::paginate (5);


        $items = session()->get('cart');
        $total = 0;
        $totalitems=0;
        if ($items != null) {
            foreach ($items as $item) {
                $total += $item->price;
                $totalitems++;
            }
        }        return view('pages/blog', ['posts'=>$posts, 'items'=> $items, 'total'=>$total, 'totalitems'=>$totalitems]);
    }
    }

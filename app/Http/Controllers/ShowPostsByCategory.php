<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ShowPostsByCategory extends Controller
{
    public function __invoke(Request $request, $key)
    {
        $category=Category::where ('key', $key)->first ();
//        $posts = $user->posts ();

        $items = session()->get('cart');
        $total = 0;
        $totalitems=0;
        if ($items != null) {
            foreach ($items as $item) {
                $total += $item->price;
                $totalitems++;
            }
        }        return view('pages/posts-by-category', ['category'=> $category, 'posts'=>$posts, 'total'=>$total, 'totalitems'=>$totalitems]);
    }
}

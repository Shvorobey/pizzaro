<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FormSaveActionController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required | max: 150 | string | unique:products,name',
            'description' => 'required | min: 30 | string',
            'image'       => 'image | dimensions: min_width=370, min_height=330 |  file',
        ]);

        $product = new Product;
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->menu_id= 7;

        $image=$request->image;
        if ($image){
        $imageName=$image->getClientOriginalName ();
        $image->move ('images', $imageName);
        $product->image='http://pizzaro/images/'.$imageName;
        }
        $product->save();

        return view('admin.form');
    }

}

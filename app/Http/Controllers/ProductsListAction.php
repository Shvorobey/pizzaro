<?php


namespace App\Http\Controllers;


use App\Product;

class ProductsListAction
{
public function __invoke()
{
    $products = Product::all();

    return view('admin/products-list', ['products'=> $products]);
}
}
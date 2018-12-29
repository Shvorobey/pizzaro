<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.12.2018
 * Time: 12:56
 */

namespace App\Services;


use App\Product;

class RandomProductsService
{
    public $randomProducts;

    public function getRandomProducts()
    {
        $randomProducts = Product::inRandomOrder()->limit(4)->get();
        return $randomProducts;
    }
}
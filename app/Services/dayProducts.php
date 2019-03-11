<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07.03.2019
 * Time: 12:54
 */

namespace App\Services;


use App\Product;

class dayProducts
{
    public $dayProducts;
    public $singleProduct;

    public function getDayProducts()
    {
        $dayProducts = Product:: whereIn('id', [10, 25, 30, 40])->get();
        return $dayProducts;
    }
    public function getSingleProducts()
    {
        $singleProduct = Product:: whereIn('id', [12])->get();
        return $singleProduct;
    }
}
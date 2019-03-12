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
    public function getSingleProduct()
    {
        $singleProduct = Product:: where ('id', '9')->get();
        return $singleProduct;
    }
}
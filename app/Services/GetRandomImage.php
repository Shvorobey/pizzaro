<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28.12.2018
 * Time: 17:28
 */

namespace App\Services;


use App\RandomImage;

class GetRandomImage
{
    use SoftDeletes;
    public function getRandomImage()
    {
        return RandomImage::all();
    }
}
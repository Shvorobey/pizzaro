<?php


namespace App\Services;


use App\RandomImage;
use SoftDeletes;

final class GetRandomImage


{
    public $randomImage;

    public function getRandomImage()
    {
        $randomImage = RandomImage::inRandomOrder()->limit(6)->get();
        return $randomImage;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04.01.2019
 * Time: 20:50
 */

namespace App\Services;


use App\RandomQuote;

class GetRandomQuoteService
{
    public $randomQuote;

    public function getRandomQuote()
    {
        $randomQuote = RandomQuote::inRandomOrder()->limit(1)->get();
        return $randomQuote;
    }
}
<?php

namespace App\Services;

final class CurrencyService

{
    const LINK = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
    protected $data;
    public $usdCours;

    public function get_currency()
    {
        $data=file_get_contents(self::LINK);
        $courses=json_decode($data, true);
        foreach ($courses as $cours){
            if ($cours ['ccy'] == 'USD') {
                $usdCours =$cours ['buy'];
                break;
            }
        }
echo "<strong> $usdCours </strong> " ;
    }
}
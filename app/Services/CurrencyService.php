<?php

namespace App\Services;

final class CurrencyService

{
    const LINK = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
    protected $data;
    public $usdCours;

    public function get_currency($curr = 'USD')
    {
        $data=file_get_contents(self::LINK);
        if (!$data) return false;
        $courses=json_decode($data, true);
        $course_curr = false;
        foreach ($courses as $cours){
            if ($cours ['ccy'] == $curr) {
                $course_curr = $cours ['buy'];
                $course_country = $cours ['ccy'];
                break;
            }
        }
echo "<strong> 1 $course_country =  $course_curr грн. </strong> " ;
    }
}
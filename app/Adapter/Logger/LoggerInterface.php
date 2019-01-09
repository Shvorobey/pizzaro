<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.01.2019
 * Time: 15:41
 */

namespace App\Adapter\Logger;


interface LoggerInterface
{
    public function info (string $msg);
    public function error (string $msg);
    public function debug (string $msg);
}
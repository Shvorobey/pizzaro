<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.01.2019
 * Time: 15:41
 */

namespace App\Adapter\Logger;

use Katzgrau\KLogger\Logger;

interface LoggerInterface
{
    public function info(string $msg);

    public function error(string $msg);

    public function debug(string $msg);
}

\Illuminate\Support\Facades\App::bind(\App\Adapter\Logger\LoggerInterface::class, function () {
    $logger = new \Monolog\Logger('');
    $logger->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__ . '/../../Logs/monolog.log'));
    return new MonologLoggerAdapter($logger);
});

//\Illuminate\Support\Facades\App::bind(\App\Adapter\Logger\LoggerInterface::class, function () {
//    $logger = new Logger(__DIR__.'/../../Logs');
//    return new KatzgrauLoggerAdapter($logger);
//});
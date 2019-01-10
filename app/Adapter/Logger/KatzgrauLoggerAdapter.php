<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.01.2019
 * Time: 11:11
 */

namespace App\Adapter\Logger;

use Katzgrau\KLogger\Logger;

class KatzgrauLoggerAdapter implements LoggerInterface

{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function info(string $msg)
    {
        $this->logger->info($msg);
    }

    public function error(string $msg)
    {
        $this->logger->error($msg);
    }

    public function debug(string $msg)
    {
        $this->logger->debug($msg);
    }
}
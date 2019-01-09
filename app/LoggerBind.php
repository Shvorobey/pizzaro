<?php
\Illuminate\Support\Facades\App::bind (\App\Adapter\Logger\LoggerInterface::class, function ()
{
    $logger = new \Monolog\Logger('name');
    $logger->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__ . '/../../Logs/monolog.log'));
    return new App\Adapter\Logger\MonologLoggerAdapter($logger);
});



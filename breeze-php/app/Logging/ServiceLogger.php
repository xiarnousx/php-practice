<?php

namespace App\Logging;

use Monolog\Logger;
use Monolog\Formatter\JsonFormatter;
use Monolog\Processor\PsrLogMessageProcessor;
use App\Logging\Handlers\DatabaseHandler;

class ServiceLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     */
    public function __invoke(array $config)
    {
        $logger = new Logger('service');

        $handler = new DatabaseHandler(Logger::toMonologLevel($config['level']));
        $handler->setFormatter(new JsonFormatter());

        $logger->pushHandler($handler);
        $logger->pushProcessor(new PsrLogMessageProcessor());
        $logger->pushProcessor(function ($record) {
            $record['extra']['remote_addr'] = request()->ip();
            $record['extra']['user_agent'] = request()->userAgent();
            return $record;
        });

        return $logger;
    }
}
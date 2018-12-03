<?php
/**
 * BaseController
 */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class BaseController
{

    public function __construct()
    {

        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(dirname(__FILE__).'/../logs', Logger::WARNING));

// add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}

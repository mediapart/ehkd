<?php

namespace AppBundle\Monolog\Handler;

use Monolog\Handler\SocketHandler as MonologSocketHandler;

/**
 * @author Inal DJAFAR <inalgnu@ulipse.com>
 */
class SocketHandler extends MonologSocketHandler
{
    protected function generateDataStream($record)
    {
        $r = $record;
        unset($r['formatted']);

        return json_encode($r)."\n";
    }
}
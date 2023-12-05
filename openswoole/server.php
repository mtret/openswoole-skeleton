<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use OpenSwoole\Http\Server;
use OpenSwoole\Http\Request;
use OpenSwoole\Http\Response;

$server = new OpenSwoole\HTTP\Server('0.0.0.0', 9501);

$server->on('start', function (OpenSwoole\Http\Server $server) {
    echo "OpenSwoole http server is started at http://0.0.0.0:9501\n";
});

$server->on('request', function (OpenSwoole\Http\Request $request, OpenSwoole\Http\Response $response) {
    $response->header('Content-Type', 'text/plain');
    $response->end("Hello World\n");
});

$server->start();

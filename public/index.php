<?php

use Zend\Diactoros\Response;
use Zend\Diactoros\Server;
use Zend\Stratigility\Middleware\NotFoundHandler;
use Zend\Stratigility\MiddlewarePipe;

use function Zend\Stratigility\middleware;
use function Zend\Stratigility\path;

require __DIR__ . '/../vendor/autoload.php';

$app = new MiddlewarePipe();

$server = Server::createServer([$app, 'handle'], $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);

// Landing page
$app->pipe(middleware(function ($req, $handler) {
    if (! in_array($req->getUri()->getPath(), ['/', ''], true)) {
        return $handler->handle($req);
    }

    $response = new Response();
    $response->getBody()->write('Hello world!');

    return $response;
}));

// Another page
$app->pipe(path('/foo', middleware(function ($req, $handler) {
    $response = new Response();
    $response->getBody()->write('FOO!');

    return $response;
})));

// 404 handler
$app->pipe(new NotFoundHandler(function () {
    return new Response();
}));

$server->listen(function ($req, $res) {
    return $res;
});
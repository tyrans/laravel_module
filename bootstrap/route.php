<?php

/**
 * @var \Illuminate\Routing\Router
 */
$router = $app->make('router');

$router->get('/', function () {
    return 'Hello Module!';
});
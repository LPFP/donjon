<?php
use Cake\Routing\Router;

Router::plugin(
    'BakeBootstrap3Crud',
    ['path' => '/bake-bootstrap3-crud'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);

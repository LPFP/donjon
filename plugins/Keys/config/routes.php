<?php

use Cake\Routing\Router;

Router::plugin('Keys', ['path' => '/keys'], function ($routes) {
    $routes->fallbacks();
}
);


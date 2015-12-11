<?php

$menu = [
    'index' => 'Accueil',
    'keys' => 'Clefs',
    'fabmanagers' => 'FabManagers',
    'scheduling' => 'Permanences',
    'members' => 'Membres',
];

$uri = parse_url("http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define('CURRENT_PAGE_NAME', str_replace('.php', '', end(explode('/', $uri['path']))));

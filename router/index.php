<?php

require_once __DIR__ . '/config/__init.php';
require_once __DIR__ . '/router/index.php';

$router = new Router();

$router->get('/', 'index.html');

$router->get('/home', 'index.html');

$router->get('/about', 'about.html');

$router->get('/contact', 'contact.html');
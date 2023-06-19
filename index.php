<?php
//timestamp 11:00AM;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Router.php';

// copy of Router() class;
$router = new Router();

$router->get('/','form');
$router->post('/create','create');
$router->get('/listPage','lists');
$router->post('/edit','edit');
$router->put('/update','update');
$router->delete('/delete','delete');

$router->handle();
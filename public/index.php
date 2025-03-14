<?php

require_once '../vendor/autoload.php';

use App\Core\Request;
use App\Core\Router;
use App\Core\Response;

// Initialize the routing system
$request = new Request();
$response = new Response();

require_once '../routes/web.php';

$url = $request->getPath();
$method = $request->getMethod();
Router::dispatch($url, $method);
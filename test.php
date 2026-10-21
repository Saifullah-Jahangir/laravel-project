<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "1. PHP works<br>";

require __DIR__ . '/vendor/autoload.php';

echo "2. Composer loaded<br>";

$app = require_once __DIR__ . '/bootstrap/app.php';

echo "3. Laravel app created<br>";

$app->usePublicPath(__DIR__ . '/public');

echo "4. Public path set<br>";

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

echo "5. Kernel created<br>";

$request = Illuminate\Http\Request::capture();

echo "6. Request captured<br>";

$response = $kernel->handle($request);

echo "7. Request handled<br>";

$response->send();

echo "8. Response sent<br>";

$kernel->terminate($request, $response);

echo "9. Laravel terminated<br>";
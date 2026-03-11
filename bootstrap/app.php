<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// On Vercel the deployed filesystem is read-only; redirect all writable
// Laravel storage to /tmp which is always writable at runtime.
if (isset($_SERVER['VERCEL']) || getenv('VERCEL')) {
    $tmpStorage = '/tmp/laravel-storage';
    foreach ([
        'app/private',
        'framework/cache/data',
        'framework/sessions',
        'framework/testing',
        'framework/views',
        'logs',
    ] as $dir) {
        $path = $tmpStorage . '/' . $dir;
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }
    }
}

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// Apply the /tmp storage path after the app is created.
if (isset($tmpStorage)) {
    $app->useStoragePath($tmpStorage);
}

return $app;

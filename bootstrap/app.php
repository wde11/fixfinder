<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// On Vercel the deployed filesystem is read-only; redirect all writable
// Laravel storage to /tmp which is always writable at runtime.
if (isset($_SERVER['VERCEL']) || getenv('VERCEL')) {

    // Force critical config values that must NOT fall back to DB/file defaults.
    // This runs before Laravel loads config files, so these values win.
    $forceEnv = [
        'APP_MAINTENANCE_DRIVER' => 'file',
        'CACHE_STORE'            => 'array',
        'SESSION_DRIVER'         => 'cookie',
        'QUEUE_CONNECTION'       => 'sync',
        'LOG_CHANNEL'            => 'stderr',
        'LOG_LEVEL'              => 'error',
        'DB_CONNECTION'          => 'sqlite',
        'FILESYSTEM_DISK'        => 'local',
        'BROADCAST_CONNECTION'   => 'log',
        'MAIL_MAILER'            => 'log',
    ];
    foreach ($forceEnv as $key => $value) {
        putenv("$key=$value");
        $_ENV[$key]    = $value;
        $_SERVER[$key] = $value;
    }

    // Create writable directories under /tmp
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

    // bootstrap/cache (services.php, packages.php) also needs to be writable
    $tmpBootstrap = '/tmp/laravel-bootstrap';
    if (!is_dir($tmpBootstrap . '/cache')) {
        mkdir($tmpBootstrap . '/cache', 0755, true);
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

// Apply the /tmp storage and bootstrap paths after the app is created.
if (isset($tmpStorage)) {
    $app->useStoragePath($tmpStorage);
    $app->useBootstrapPath($tmpBootstrap);
}

return $app;

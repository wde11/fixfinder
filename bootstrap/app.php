<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$bootstrapDir = __DIR__;
$tmpStorage   = null;
$tmpBootstrap = null;

// Detect a read-only filesystem (Vercel) by checking actual writability.
// This is more reliable than checking for the VERCEL env variable.
$readOnly = !is_writable($bootstrapDir . '/cache')
         || !is_writable(dirname($bootstrapDir) . '/storage/framework/views');

if ($readOnly) {
    // Force critical config values before Laravel loads config files.
    $forceEnv = [
        'APP_DEBUG'              => 'true',   // temporary: remove once site loads
        'APP_MAINTENANCE_DRIVER' => 'file',
        'CACHE_STORE'            => 'array',
        'SESSION_DRIVER'         => 'cookie',
        'QUEUE_CONNECTION'       => 'sync',
        'LOG_CHANNEL'            => 'stderr',
        'LOG_LEVEL'              => 'debug',
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

    // Redirect storage/ to /tmp
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

    // Redirect bootstrap/cache/ to /tmp and copy providers.php so
    // useBootstrapPath() works correctly (it needs providers.php to exist).
    $tmpBootstrap = '/tmp/laravel-bootstrap';
    if (!is_dir($tmpBootstrap . '/cache')) {
        mkdir($tmpBootstrap . '/cache', 0755, true);
    }
    if (!file_exists($tmpBootstrap . '/providers.php')) {
        copy($bootstrapDir . '/providers.php', $tmpBootstrap . '/providers.php');
    }
    // Carry over any pre-built cache files from the deployment
    foreach (['services.php', 'packages.php'] as $f) {
        $src = $bootstrapDir . '/cache/' . $f;
        $dst = $tmpBootstrap . '/cache/' . $f;
        if (file_exists($src) && !file_exists($dst)) {
            copy($src, $dst);
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

if ($tmpStorage !== null) {
    $app->useStoragePath($tmpStorage);
}
if ($tmpBootstrap !== null) {
    $app->useBootstrapPath($tmpBootstrap);
}

return $app;

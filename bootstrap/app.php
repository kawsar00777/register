<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' =>App\Http\Middleware\Admin::class,
            'subadmin' =>App\Http\Middleware\SubAdmin::class,
            'user' =>App\Http\Middleware\User::class,
        ]);
        $middleware->alias([
            'issuperadmin' =>App\Http\Middleware\SuperAdminAuthentication::class,
            'isadmin' =>App\Http\Middleware\AdminAuthentication::class,
            'issubadmin' =>App\Http\Middleware\SubAdminAuthentication::class,
            'isuser' =>App\Http\Middleware\UserAuthentication::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

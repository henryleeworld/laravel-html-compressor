<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use RenatoMarinho\LaravelPageSpeed\Middleware\CollapseWhitespace;
use RenatoMarinho\LaravelPageSpeed\Middleware\DeferJavascript;
use RenatoMarinho\LaravelPageSpeed\Middleware\ElideAttributes;
use RenatoMarinho\LaravelPageSpeed\Middleware\InlineCss;
use RenatoMarinho\LaravelPageSpeed\Middleware\InsertDNSPrefetch;
use RenatoMarinho\LaravelPageSpeed\Middleware\RemoveComments;
// use RenatoMarinho\LaravelPageSpeed\Middleware\RemoveQuotes;
// use enatoMarinho\LaravelPageSpeed\Middleware\TrimUrls; 

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append([
            InlineCss::class,
            ElideAttributes::class,
            InsertDNSPrefetch::class,
            RemoveComments::class,
            // TrimUrls::class,
            // RemoveQuotes::class,
            CollapseWhitespace::class, // Note: This middleware invokes "RemoveComments::class" before it runs.
            DeferJavascript::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

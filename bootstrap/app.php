<?php

use App\Http\Middleware\ForceJsonResponse;
use App\Infraestructure\Exceptions\CustomException;
use App\Infraestructure\Exceptions\Handler;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(prepend:[
            ForceJsonResponse::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function(NotFoundHttpException $e){
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 404
            ], 404);
        });

        $exceptions->render(function(TypeError $e){
            return response()->json([
                'message' => 'Peticion mal formada o incorrecta',
                'status' => 400
            ], 400);
        });

        $exceptions->render(function(ValidationException $e){
            return response()->json([
                'message' => $e->getMessage(),
                'errors' => $e->errors(),
                'status' => 422
            ], 422);
        });

        $exceptions->render(function(CustomException $e){
            return response()->json([
                'message' => $e->getMessage(),
                'status' => $e->getCode(),
            ], $e->getCode());
        });

    })->create();

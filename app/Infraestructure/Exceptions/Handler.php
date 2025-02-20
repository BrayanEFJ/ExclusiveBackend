<?php

namespace App\Infraestructure\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Throwable;


class Handler extends ExceptionHandler
{

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];


    public function register(): void
    {
        $this->renderable(function (Throwable $e, $request) {
            if ($request->expectsJson()) {
                return $this->handleApiException($e);
            }
        });
    }

    /**
     * Handle API exceptions and return consistent JSON format
     */
    private function handleApiException(Throwable $e): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => 'Error interno del servidor',
        ];

        // Código HTTP por defecto
        $statusCode = 500;

        switch (true) {
            case $e instanceof ValidationException:
                $response['message'] = 'Error de validación';
                $response['errors'] = $e->errors();
                $statusCode = 422;
                break;

            case $e instanceof AuthenticationException:
                $response['message'] = 'No autenticado';
                $statusCode = 401;
                break;

            case $e instanceof AuthorizationException:
                $response['message'] = 'No autorizado';
                $statusCode = 403;
                break;

            case $e instanceof ModelNotFoundException:
                $response['message'] = 'Recurso no encontrado';
                $statusCode = 404;
                break;

            case $e instanceof NotFoundHttpException:
                $response['message'] = 'Ruta no encontrada';
                $statusCode = 404;
                break;

            case $e instanceof CustomException:
                $response['message'] = $e->getMessage();
                $statusCode = $e->getCode() ?: 500;
                break;

            default:
                $response['message'] = config('app.debug') 
                    ? $e->getMessage() 
                    : 'Ha ocurrido un error inesperado';
                break;
        }

        // Información adicional en modo debug
        if (config('app.debug')) {
            $response['debug'] = [
                'exception' => get_class($e),
                'trace' => $e->getTrace(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ];
        }

        return response()->json($response, $statusCode);
    }
}
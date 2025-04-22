<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        // Handle CSRF token mismatches (which normally cause a 419)
        $this->renderable(function (TokenMismatchException $e, $request) {
            return redirect()
                ->guest(route('login'))
                ->with('error', 'Your session has expired. Please log in again.');
        });

        // If you ever throw a generic HttpException with status 419
        $this->renderable(function (Throwable $e, $request) {
            if (method_exists($e, 'getStatusCode') && $e->getStatusCode() === 419) {
                return redirect()
                    ->guest(route('login'))
                    ->with('error', 'Page expired. Please log in again.');
            }
        });
    }
}

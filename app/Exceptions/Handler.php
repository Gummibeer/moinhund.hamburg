<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        // do not log
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if(env('APP_DEBUG', config('app.debug', false))) {
            return parent::render($request, $e);
        }

        $fe = FlattenException::create($e);
        $status = $fe->getStatusCode();
        $baseError = substr($status, 0, 1).'00';

        $data = basic_view_data();
        $data['status'] = $status;

        if(view()->exists('error.'.$status)) {
            $view = view('error.'.$status, $data);
        } elseif(view()->exists('error.'.$baseError)) {
            $view = view('error.'.$baseError, $data);
        } else {
            $view = view('error.basic', $data);
        }

        return response($view, $status);
    }
}

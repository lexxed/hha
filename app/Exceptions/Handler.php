<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Mail\site_error;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {

        if ($exception instanceof \Exception) {

            try{
                $request= request();
            }catch (Exception $e2){}

            # send email only if .env APP_EMAIL_ERROR is true
            if (env('APP_EMAIL_ERROR')) {
                $errormsg = $exception->getMessage();
                \Mail::to(env('MAIL_ADMIN'))->send(new site_error($errormsg, $request));
            }    
        }           

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    //public function render($request, Exception $exception)
    //{
    //   return parent::render($request, $exception);
    //}
    public function render($request, Exception $exception)
    {
         if ($exception instanceof \Illuminate\Session\TokenMismatchException) {

              return redirect()
                  ->back()
                  ->withInput($request->except('_token'))
                  ->withMessage('Oops! The form was taking too long to submit. Please try again');

        }

        return parent::render($request, $exception);
    }


    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }
}

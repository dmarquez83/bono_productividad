<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

abstract class IsType
{

    private $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    abstract public function getType();
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       //dd($this->auth->user());
        if( ! $this->auth->user()->is($this->getType())){ //si el usuario no es administrador

            $this->auth->logout();//si no es admin lo desconecto y lo redirijo al login, se puede cambiar eso redireccionando al home con un msj que no tiene permiso para entrar

            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to('auth/login');//cambie el gue por to para que cuando redirecciones no se quede pegado en el ultimo acceso
            }
        }
        //retornar un msj que indique por que fue redireccionado
        return $next($request);
    }
}

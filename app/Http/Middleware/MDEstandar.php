<?php

namespace App\Http\Middleware;

use Closure;

class MDEstandar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $usuario_actual=\Auth::user();
        if($usuario_actual->TipoUsuario!=2){
            return redirect('mensajes.msj_rechazado');
        }


        return $next($request);
    
    }
}

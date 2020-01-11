<?php
namespace Grunenthal\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

abstract class Type {


    private $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    abstract public function getType();


    public function handle($request, Closure $next)
    {
      $user = Auth::user()->rol_id;
      $access = false;
      foreach($user as $value) {
        $taskRoles = $value->rol_id;
        if ($value->rol_id != 1  )
              $access = true;
            }
        
      if ($access == true){
        return $next($request);
      } else{
        Auth::logout();
        if ($request->ajax()){
            return response('Unauthorized.', 401);
        } else{
            Session::flash('Error', 'Por favor comunicate con el administrador del sitio web');
            return redirect()->to('/');
        }
      }
    }
}

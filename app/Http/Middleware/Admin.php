<?php
namespace App\Http\Middleware;
use Closure;
class Admin
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
       if(auth('admin')->guest())
       {
            return redirect(url('admin/login'));
       }elseif(auth('admin')->check())
       {
         return $next($request); 
       }else{
         return redirect('404');
       }
    }
}

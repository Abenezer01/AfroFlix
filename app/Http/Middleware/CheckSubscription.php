<?php

namespace App\Http\Middleware;

use Closure;
use App\Subscription;
use Auth;
use Offlinepayment;
use DB;
use LocalActiveUser;

class CheckSubscription
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
       // $getBanned = DB::table('Uzivatele')->where('id', Auth::id())
    //    Table::select('name','surname')->where('id', 1)->get();

        //$local = DB::raw('localactiveUsers')->select('status')->where('user_id', Auth::id())->first();
        // $user = mysql_fetch_object($local);

        if(!Auth::user()->subscription('main')){

            if(Auth::user()->isVerified == 1)
            {
               // if($local== 1)
                //{
                    return $next($request);
                //}
                //else{
                    // return 'error';
                //}

            }

            return redirect('subscription');
        }

        return $next($request);

    }


}

<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function payment_info(){
        //return view('front.accountpayment');
     }

    public function payment()
    {
        // if(auth()->user()->subscribedToPlan('afroflix_basic')) {
            // return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        // }

        $availablePlans =[
           'afroflix_basic' => "Basic",
           'afroflix_standard' => "Standard",
        ];
        $data = [
            'intent' => auth()->user()->createSetupIntent(),
            'plans'=> $availablePlans
        ];
        return view('fronta.sub.subscription')->with($data);
    }

    public function subscribe(Request $request)
    {
            $user = auth()->user();
            $paymentMethod = $request->payment_method;

            $planId = $request->plan;
            $user->newSubscription('main', $planId)->create($paymentMethod);

            return response([
                'success_url'=> redirect()->intended('dashboard')->getTargetUrl(),
                'message'=>'success'
            ]);
    }
}

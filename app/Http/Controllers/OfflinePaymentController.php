<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \Illuminate\Http\Response;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;
use App\Offlinepayment;
use Auth;

class OfflinePaymentController extends Controller
{
    public function show()
    {
        return view('localbank.localbank');
    }
    protected function Validation($request)
    {

        $rules = array(
            'bank'  => 'required',
            'refno' => 'required',
        );
        $this->validate( $request , $rules);
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            ]);

    $pay= new Offlinepayment();
        $pay->bank= $request['bank'];
        $pay->refno= $request['refno'];
        $pay->user_id= Auth::id();
        $pay->name= Auth::user()->name;
    // add other fields
    $pay->save();

        return redirect('/');
    }
    protected function offpay(Request $request)
    {

        $validator = $this->Validation($request);
        var_dump($validator); die();
        // $this->validate([
            // 'bank'  => 'required',
            // 'refno' => 'required'
        // ]);
        if($validator->passes()){
            $id = Auth::id();
            $name = Auth::user()->name;
            $offpayment = new Offlinepayment([
                'bank'     => $request->get('bank'),
                'refno'    => $request->get('refno'),
                'user_id'  => Auth::id(),
                'name'     => $name
        ]);

        $offpayment->save();
        return redirect()->route('land3');
        }
        else{
            return redirect()->back()->withErrors();
         }

        // return Offlinepayment::create([
        //     'bank' => $data['bank'],
        //     'refno' => $data['refno'],
        // ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

     public function list()
     {
            return User::all();
     }


     public function listD($id)
     {
        return $data = User::findOrFail($id);
     }


     public function account_setting()
     {
        return view('front.account');
     }



     public function update(Request $request)
     {
         $user = Auth::user();
         $user->name = $request['first-name'];
         $user->save();
         return back();
     }

}

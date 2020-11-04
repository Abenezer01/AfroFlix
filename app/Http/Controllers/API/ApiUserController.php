<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class ApiUserController extends Controller
{
    public $successStatus = 200;
  ///////////////////////////////////////////////////////////////////
  //                        LOGIN                                  //
  ///////////////////////////////////////////////////////////////////
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
  ///////////////////////////////////////////////////////////////////
  //                        REGISTRATION                           //
  ///////////////////////////////////////////////////////////////////
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['name'] =  $user->name;

        return response()->json(['success'=>$success], $this-> successStatus);
    }


  ///////////////////////////////////////////////////////////////////
  //                        SHOW USERS DETAIL                      //
  ///////////////////////////////////////////////////////////////////
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }

  ///////////////////////////////////////////////////////////////////
  //                        USERS LOGOUT                           //
  ///////////////////////////////////////////////////////////////////
    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke();
        return 'logged out';
    }

    public function list()
    {
        $user = Auth::all();
        return $user;
    }
}

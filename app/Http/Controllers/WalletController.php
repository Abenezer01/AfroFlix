<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WalletController extends Controller
{
    //

    public function popup()
    {
        $user = User::first();
        $user->balance; // int(0)

        $user->deposit(10);
        $user->balance; // int(10)
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

class SignInController extends Controller
{
    public function signin()
    {
        // Add code for user to sign-in to existing account
    }

    public function newUser()
    {
        App\User::create(Request::all());

        return redirect('signin');
    }
}

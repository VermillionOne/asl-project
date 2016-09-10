<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SignInController extends Controller
{
    public function signin()
    {
        return view('signin');
    }
}

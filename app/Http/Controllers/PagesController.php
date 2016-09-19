<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

class PagesController extends Controller
{

    public function welcome()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.register');
    }

    public function listr_main()
    {
        return view('listr_main');
    }

}

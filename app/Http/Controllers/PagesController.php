<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

class PagesController extends Controller
{

    public function welcome()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function listr_main()
    {
        return view('listr_main');
    }



}

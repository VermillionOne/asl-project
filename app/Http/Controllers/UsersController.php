<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests;

use Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();

        return $users;
    }

    public function show($id)
    {
        $user = User::find($id);
    }

    public function store()
    {
        $user = User::create(Request::all());

        return redirect('signin');
    }

}

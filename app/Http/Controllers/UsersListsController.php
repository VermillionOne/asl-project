<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Request;

class UsersListsController extends Controller
{

    public function store()
    {

        $usersLists = new Userslist($request->all());

        \Auth::user()->usersLists()->save($usersLists);

    }

}

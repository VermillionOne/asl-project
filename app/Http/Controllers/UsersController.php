<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests;

use Request;

class UsersController extends Controller
{

    /**
     * { function_description }
     *
     * @return     $user -> The user object as created
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * { function_description }
     *
     * @param      <type>  $id     The identifier
     */
    public function show($id)
    {
        $user = User::find($id);
    }


    /**
     * { function_description }
     *
     * @return     <type>  ( description_of_the_return_value )
     */
    public function store()
    {
        $user = User::create(Request::all());
        return redirect('listr');
    }

}

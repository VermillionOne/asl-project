<?php

namespace App\Http\Controllers;

use App\Book;
use App\Note;
use App\UsersList;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Request;

class BooksController extends Controller
{

    public function index()
    {
        dd($request);
    }

    public function store(\App\Http\Requests\CreateBookRequest $request)
    {

        $user = Auth::user();

        $usersList = [];

        $book = Request::all();

        /**
         * For each item in the $book request
         * @var $book
         */
        foreach($book as $page => $value)
        {
            /**
             * Get the key value and add the list-items to an array for the usersList model
             */
            if(preg_match( '/^list-item*/', $page))
            {
                $usersList[] = $value;
            }
        }

        $book_create = Book::create(Request::all());
        $note_create = Note::create(Request::all());
        $users_list  = UsersList::create(
            [
                'list_items' => json_encode($usersList),
            ]
        );

        $user->books()->save($book_create);

        // dd($book);

        $book_create->note()->save($note_create);
        $book_create->usersList()->save($users_list);

        return back();

    }

}

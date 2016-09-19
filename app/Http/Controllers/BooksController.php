<?php

namespace App\Http\Controllers;

use App\Book;
use App\UsersList;
use App\Note;
use App\Image;
use App\Video;

use App\Http\Requests\CreateBookRequest;

use App\Http\Requests;

use Request;

class BooksController extends Controller
{

    // public function index()
    // {
    //     dd($request);
    // }

    public function store(CreateBookRequest $request)
    {
        $book = Request::all();

        $usersListData = [];

        $noteData = $book['note'];

        dd(print_r($book));

        /**
         * For each item in the $book request
         * @var $book
         */
        // foreach($book as $page => $value)
        // {
            /**
             * Get the key value and add the list-items to an array for the usersList model
             */
        //     if(preg_match( '/^list-item*/', $page))
        //     {
        //         $usersList[] = $page;
        //     }
        // }

      // $note = $book->note()->create($noteData);
      // $usersList = $book->usersList()->create($usersList);

    }

}

<?php

namespace App\Http\Controllers;

use App\Book;

use Illuminate\Support\Facades\Auth;

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

        $user = Auth::user();

        $books = $user->books()->with('note','usersList')->get();

        // $lists = $books[0]->usersList;

        foreach($books as $book)
        {
            // dd($book);

            foreach ($book->usersList as $list)
            {
                $list_items[] = json_decode($list->list_items);
            }
        }

        // dd($list_items);

        // dd($lists);

        // foreach($lists)
        // {

        // }

        // dd($books);

        return response()->view('listr_main', ['books' => $books, 'list_items' => $list_items], 200);
    }

}

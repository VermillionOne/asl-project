<?php

namespace App\Http\Controllers;

use App\Note;

use App\Http\Requests;

use Request;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return $notes;
    }
}

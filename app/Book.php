<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_title'
    ];

    public function user()
    {
        return $this->belongsToMany("App\User");
    }

    public function usersList()
    {
        return $this->belongsToMany("App\UsersList");
    }

    public function note()
    {
        return $this->belongsToMany("App\Note");
    }

}

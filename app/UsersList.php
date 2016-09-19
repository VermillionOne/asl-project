<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_order','list_items',
    ];

    public function book()
    {
        return $this->belongsToMany("App\Book");
    }
}

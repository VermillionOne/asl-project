<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_order','note_body',
    ];

    public function book()
    {
        return $this->belongsToMany("App\Book");
    }
}

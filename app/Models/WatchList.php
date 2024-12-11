<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'movies',
        'note',
    ];

    // WatchList.php
    public function movies()
    {
        return $this->belongsToMany(Movies::class, 'watch_lists', 'movies', 'id');
    }
}

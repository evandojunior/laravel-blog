<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    /**
    * Get all of the video's comments.
    */
   public function comments()
   {
       return $this->morphMany('App\Comment', 'commentable');
   }
}

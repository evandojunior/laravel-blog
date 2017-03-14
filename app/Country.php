<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country',
    ];

    /**
    * Get all of the posts for the country.
    */
   public function posts()
   {
       return $this->hasManyThrough(
          Post::class, User::class,
          'country_id', 'user_id', 'id'
       );
   }
}

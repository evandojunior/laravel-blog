<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body', 'commentable_id','commentable_type',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}

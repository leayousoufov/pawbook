<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user who wrote the post.
     */
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    /**
     * Get the comments that are on the post.
     */
    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
